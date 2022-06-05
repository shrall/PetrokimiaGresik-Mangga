<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\FailedResource;
use App\Http\Resources\SuccessResource;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->referral_code) {
            if (
                !Auth::user()->email || !Auth::user()->handphone || !Auth::user()->ktp_code || !Auth::user()->kk_code ||
                !Auth::user()->postal_code || !Auth::user()->birth_date || !Auth::user()->birth_place || !Auth::user()->address ||
                !Auth::user()->profession || !Auth::user()->heir || !Auth::user()->house_ownership || !Auth::user()->bank_number ||
                !Auth::user()->bank_owner || !Auth::user()->bank_name || !Auth::user()->bank_branch || !Auth::user()->rt || !Auth::user()->rw
            ) {
                $return = [
                    'api_code' => 403,
                    'api_status' => false,
                    'api_message' => 'Data diri user masih ada yang belum lengkap. Mohon dilengkapi terlebih dahulu.',
                    'api_results' => Auth::user()
                ];
                return SuccessResource::make($return);
            }
        }
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Sukses',
            'api_results' => Auth::user()
        ];
        return SuccessResource::make($return);
    }

    public function resend_email(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $user->sendEmailVerificationNotification();
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Sukses',
            'api_results' => 'Link verifikasi berhasil dikirim.'
        ];
        return SuccessResource::make($return);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        if ($request->image) {
            $image = 'user-' . time() . '-' . $request['image']->getClientOriginalName();
            $request->image->move(public_path('uploads/user'), $image);
        } else {
            $image = Auth::user()->picture;
        }
        $user->update([
            'picture' => $image,
            'ktp_code' => $request->ktp_code ?? $user->ktp_code,
            'kk_code' => $request->kk_code ?? $user->kk_code,
            'profession' => $request->profession ?? $user->profession,
            'retired' => $request->retired ?? $user->retired,
            'education' => $request->education ?? $user->education,
            'heir' => $request->heir ?? $user->heir,
            'house_ownership' => $request->house_ownership ?? $user->house_ownership,
            'npwp' => $request->npwp ?? $user->npwp,
            'bank_number' => $request->bank_number ?? $user->bank_number,
            'bank_owner' => $request->bank_owner ?? $user->bank_owner,
            'bank_name' => $request->bank_name ?? $user->bank_name,
            'bank_branch' => $request->bank_branch ?? $user->bank_branch,
            'latitude' => $request->latitude ?? $user->latitude,
            'longitude' => $request->longitude ?? $user->longitude,
            'gender' => $request->gender ?? $user->gender,
            'married' => $request->married ?? $user->married,
            'spouse' => $request->spouse ?? $user->spouse,
            'religion_id' => $request->religion ?? $user->religion,
            'birth_place' => $request->birth_place ?? $user->birth_place,
            'birth_date' => $request->birth_date ?? $user->birth_date,
            'handphone' => $request->handphone ?? $user->handphone,
            'address' => $request->address ?? $user->address,
            'rt' => $request->rt ?? $user->rt,
            'rw' => $request->rw ?? $user->rw,
            'postal_code' => $request->postal_code ?? $user->postal_code,
            'province_id' => $request->province ?? $user->province,
            'city_id' => $request->city ?? $user->city,
            'district_id' => $request->district ?? $user->district,
            'village_id' => $request->village ?? $user->village,
        ]);
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Akun user berhasil diupdate.',
            'api_results' => $user
        ];
        return SuccessResource::make($return);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function update_password(Request $request)
    {
        $data = $request->validate([
            'current_password' => ['required', 'min:8'],
            'new_password' => ['required', 'confirmed', 'min:8'],
        ]);
        $user = User::find(Auth::id());
        if (Hash::check($data['current_password'], $user->password)) {
            $user->update([
                'password' => Hash::make($data['new_password']),
            ]);
            $return = [
                'api_code' => 200,
                'api_status' => true,
                'api_message' => 'Password berhasil diperbarui!',
                'api_results' => $user
            ];
            return SuccessResource::make($return);
        }
        $return = [
            'api_code' => 403,
            'api_status' => false,
            'api_message' => 'Password salah.',
            'api_results' => $user
        ];
        return SuccessResource::make($return);
    }
}
