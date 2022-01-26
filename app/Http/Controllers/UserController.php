<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Education;
use App\Models\EstablishmentStatus;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Religion;
use App\Models\User;
use App\Models\Village;
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
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinces = Province::all();
        $cities = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        $establishment_statuses = EstablishmentStatus::all();
        $religions = Religion::all();
        $educations = Education::all();
        return view('user.change_profile', compact('provinces', 'cities', 'districts', 'villages', 'establishment_statuses', 'educations', 'religions'));
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
        }else{
            $image = Auth::user()->picture;
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
            'religion' => $request->religion,
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
            'village_id' => $request->village
        ]);
        return redirect()->route('user.edit', $id);
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


    public function change_password()
    {
        return view('user.change_password');
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
            return redirect()->route('user.changepassword')->with('Success', 'Password Updated!');
        }
        return redirect()->route('user.changepassword')->with('Error', 'Wrong Password.');
    }
}
