<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeeDepartment;
use App\Models\Madu;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MaduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = EmployeeDepartment::all();
        return view('admin.mangga.create.madu', compact('departments'));
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
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'handphone' => $request->handphone,
            'province_id' => 35,
            'city_id' => 3578,
            'district_id' => 3578170,
            'village_id' => 3578170005,
            'nik_karyawan' => $request->nik,
            'employee_department_id' => $request->department,
            'password' => Hash::make($request->password),
            'user_role' => 1,
            'registration_ip' => request()->ip(),
            'referral_code' => 'mamad',
            'email_verified_at' => Carbon::now()
        ]);
        $image = 'mangga-madu-' . time() . '-' . $request['image']->getClientOriginalName();
        $request->image->move(public_path('uploads/mangga/establishment_picture'), $image);
        $reg_number = $this->getRegistrationNumber(Auth::user()->nik_karyawan, 1);

        $madu = Madu::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => 1,
            'registration_number' => $reg_number,
            'business_status_id' => 1,
            'image' => $image,
            'link' => $request->link,
            'user_id' => $user->id
        ]);
        return redirect()->route('admin.program');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Madu  $madu
     * @return \Illuminate\Http\Response
     */
    public function show(Madu $madu)
    {
        return view('admin.mangga.madu', compact('madu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Madu  $madu
     * @return \Illuminate\Http\Response
     */
    public function edit(Madu $madu)
    {
        return view('admin.mangga.edit.madu', compact('madu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Madu  $madu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Madu $madu)
    {
        if ($request->image) {
            $image = 'mangga-madu-' . time() . '-' . $request['image']->getClientOriginalName();
            $request->image->move(public_path('uploads/mangga/establishment_picture'), $image);
        }else{
            $image = $madu->image;
        }

        $madu->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.program');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Madu  $madu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Madu $madu)
    {
        $madu->delete();
        return redirect()->route('admin.program');
    }
    public function approve_surveyor(Madu $madu)
    {
        if (Auth::user()->user_role == 2 || Auth::user()->user_role == 3|| Auth::user()->user_role == 4) {
            $madu->update([
                'status' => 4,
                'business_status_id' => 4,
                'approved_by_surveyor_at' => Carbon::now(),
                'rejected_at' => null,
            ]);
        }
        return redirect()->route('admin.madu.show', $madu->id);
    }

    public function reject(Madu $madu)
    {
        $madu->update([
            'status' => 5,
            'business_status_id' => 5,
            'rejected_at' => Carbon::now(),
        ]);
        return redirect()->route('admin.madu.show', $madu->id);
    }
}
