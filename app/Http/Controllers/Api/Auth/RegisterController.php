<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\FailedResource;
use App\Http\Resources\SuccessResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'handphone' => 'required|numeric',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'province' => 'required|exists:provinces,id',
            'city' => 'required|exists:regencies,id',
            'district' => 'required|exists:districts,id',
            'village' => 'required|exists:villages,id',
        ],[
            'email.unique' => 'E-Mail sudah terdaftar di database.'
        ]);
        if ($validator->fails()) {
            $return = [
                'api_code' => Response::HTTP_BAD_REQUEST,
                'api_status' => false,
                'api_message' => $validator->errors(),
            ];
            return FailedResource::make($return);
        }

        $user = $this->create($request->all());
        if (empty($user)) {
            $return = [
                'api_code' => Response::HTTP_BAD_REQUEST,
                'api_status' => false,
                'api_message' => 'Error.',
            ];
            return FailedResource::make($return);
        } else {
            // note harus ada event ini biar ngetrigger email verifynya
            event(new Registered($user));
            $return = [
                'api_code' => 200,
                'api_status' => true,
                'api_message' => 'Akun berhasil terbuat!',
                'api_results' => $user
            ];
            return SuccessResource::make($return);
        }
    }

    protected function create(array $data)
    {
        $name = explode(' ', $data['name']);
        $firstName = $name[0];
        $lastName = (isset($name[count($name) - 1])) ? $name[count($name) - 1] : '';
        return User::create([
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $data['email'],
            'handphone' => $data['handphone'],
            'province_id' => $data['province'],
            'city_id' => $data['city'],
            'district_id' => $data['district'],
            'village_id' => $data['village'],
            'password' => Hash::make($data['password']),
            'user_role' => 1,
            'referral_code' => $data['referral_code'] ?? ''
            // 'registration_ip' => request()->ip()
        ]);
    }
}
