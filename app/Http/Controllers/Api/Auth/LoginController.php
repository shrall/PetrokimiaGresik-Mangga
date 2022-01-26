<?php

namespace App\Http\Controllers\Api\Auth;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Http\Resources\FailedResource;
use App\Http\Resources\SuccessResource;
use App\Models\User;
use App\Models\UserLog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Passport\Client;
use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = Client::find(2);
    }

    public function login(Request $request)
    {

        $http = new GuzzleHttpClient;

        $user = [
            'email' => $request->email,
            'password' => $request->password,
            'user_role' => 1,
        ];
        $admin = [
            'email' => $request->email,
            'password' => $request->password,
            'user_role' => 2,
        ];

        $check = User::where('email', $request->email)->first();

        if ($check != null) {
            if ($check->email_verified_at != null) {
                if (Auth::attempt($user) || Auth::attempt($admin)) {
                    $response = Http::asForm()->post(URL::to('/') . '/oauth/token', [
                        'grant_type' => 'password',
                        'client_id' => $this->client->id,
                        'client_secret' => $this->client->secret,
                        'username' => $request->email,
                        'password' => $request->password,
                        'scope' => '',
                    ]);
                    // $check->update([
                    //     'last_login_time' => Carbon::now(),
                    //     'last_login_ip' => request()->ip()
                    // ]);
                    $return = [
                        'api_code' => 200,
                        'api_status' => true,
                        'api_message' => 'Lorem ipsum',
                        'api_results' => $response->json()
                    ];
                    return SuccessResource::make($return);
                } else {
                    $return = [
                        'api_code' => Response::HTTP_FORBIDDEN,
                        'api_status' => false,
                        'api_message' => 'Login Failed',
                    ];
                    return FailedResource::make($return);
                }
            } else {
                $return = [
                    'api_code' => Response::HTTP_UNAUTHORIZED,
                    'api_status' => false,
                    'api_message' => 'E-Mail is not verified yet.'
                ];
                return FailedResource::make($return);
            }
        } else {
            $return = [
                'api_code' => Response::HTTP_UNAUTHORIZED,
                'api_status' => false,
                'api_message' => 'E-Mail is not registered yet.'
            ];
            return FailedResource::make($return);
        }
    }

    public function logout()
    {
        UserLog::create([
            'creator_id' => Auth::id(),
            'desc' => 'User Logout',
            'notes' => '',
            'path' => 'logout',
            'ip' => $_SERVER['REMOTE_ADDR']
        ]);
        $accesstoken = Auth::user()->token();
        DB::table('oauth_refresh_tokens')->where('access_token_id', $accesstoken->id)->update(['revoked' => true]);
        $accesstoken->revoke();

        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Logged Out.',
            'api_results' => null
        ];
        return SuccessResource::make($return);
    }
}
