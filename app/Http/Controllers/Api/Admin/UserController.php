<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessResource;
use App\Models\User;
use Carbon\Carbon;
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
        $users = User::all();
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Sukses',
            'api_results' => $users
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
        $user = User::create([
            'first_name' => "Admin",
            'last_name' => "Mangga",
            'email' => $request['email'],
            'handphone' => '0',
            'province_id' => 35,
            'city_id' => 3578,
            'district_id' => 3578170,
            'village_id' => 3578170005,
            'password' => Hash::make($request['password']),
            'user_role' => $request->user_role,
            'referral_code' => '',
            'nik_karyawan' => '0',
            'employee_department_id' => 1,
            'email_verified_at' => Carbon::now()
        ]);
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Sukses',
            'api_results' => $user
        ];
        return SuccessResource::make($return);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Sukses',
            'api_results' => $user
        ];
        return SuccessResource::make($return);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
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
            'google_maps' => $request->google_maps ?? $user->google_maps
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Sukses Terhapus.',
            'api_results' => $user
        ];
        $user->delete();
        return SuccessResource::make($return);
    }
}
