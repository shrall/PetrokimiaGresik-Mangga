<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Madu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'user_id' => Auth::id()
        ]);

        return redirect()->route('user.create_ajuan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Madu  $madu
     * @return \Illuminate\Http\Response
     */
    public function show(Madu $madu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Madu  $madu
     * @return \Illuminate\Http\Response
     */
    public function edit(Madu $madu)
    {
        //
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
            'status' => 1,
            'business_status_id' => 1,
            'image' => $image,
            'link' => $request->link,
        ]);

        return redirect()->route('user.create_ajuan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Madu  $madu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Madu $madu)
    {
        //
    }
    public function getRegistrationNumber(int $sector, int $subsector)
    {
        $temp = 'GG-' . str_pad(rand(0, pow(10, 8) - 1), 8, '0', STR_PAD_LEFT) . '-' . $sector . '-' . $subsector;
        if (Business::where('registration_number', $temp)->exists()) {
            return $this->getRegistrationNumber($sector, $subsector);
        } else {
            return $temp;
        }
    }
}
