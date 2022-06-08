<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Education;
use App\Models\EstablishmentStatus;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Religion;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Village;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = UserRole::all()->except([1, 2]);
        return view('admin.user.create', compact('roles'));
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

        return redirect()->route('admin.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $provinces = Province::all();
        $cities = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        $establishment_statuses = EstablishmentStatus::all();
        $religions = Religion::all();
        $educations = Education::all();
        return view('admin.user.edit', compact('provinces', 'cities', 'districts', 'villages', 'establishment_statuses', 'educations', 'religions', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if ($request->image) {
            $image = 'user-' . time() . '-' . $request['image']->getClientOriginalName();
            $request->image->move(public_path('uploads/user'), $image);
        } else {
            $image = $user->picture;
        }
        $user->update([
            'picture' => $image,
            'ktp_code' => $request->ktp_code,
            'kk_code' => $request->kk_code,
            'profession' => $request->profession,
            'retired' => $request->retired,
            'education' => $request->education,
            'heir' => $request->heir,
            'house_ownership' => $request->house_ownership,
            'npwp' => $request->npwp,
            'bank_number' => $request->bank_number,
            'bank_owner' => $request->bank_owner,
            'bank_name' => $request->bank_name,
            'bank_branch' => $request->bank_branch,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'gender' => $request->gender,
            'married' => $request->married,
            'spouse' => $request->spouse,
            'religion_id' => $request->religion,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'handphone' => $request->handphone,
            'address' => $request->address,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'postal_code' => $request->postal_code,
            'province_id' => $request->province,
            'city_id' => $request->city,
            'district_id' => $request->district,
            'village_id' => $request->village,
            'google_maps' => $request->google_maps
        ]);
        return redirect()->route('admin.user.edit', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
