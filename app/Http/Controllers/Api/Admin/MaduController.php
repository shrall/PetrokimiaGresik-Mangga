<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\FailedResource;
use App\Http\Resources\SuccessResource;
use App\Models\Madu;
use Carbon\Carbon;
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
        $madus = Madu::all();
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Sukses',
            'api_results' => $madus
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
     * @param  \App\Models\Madu  $madu
     * @return \Illuminate\Http\Response
     */
    public function show(Madu $madu)
    {
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Sukses',
            'api_results' => $madu
        ];
        return SuccessResource::make($return);
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
        } else {
            $image = $madu->image;
        }

        $madu->update([
            'name' => $request->name ?? $madu->name,
            'description' => $request->description ?? $madu->description,
            'image' => $image,
            'link' => $request->link ?? $madu->link,
        ]);
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Pengajuan Mangga Madu berhasil diperbarui.',
            'api_results' => $madu
        ];
        return SuccessResource::make($return);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Madu  $madu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Madu $madu)
    {
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Pengajuan Mangga Madu berhasil dihapus.',
            'api_results' => $madu
        ];
        $madu->delete();
        return SuccessResource::make($return);
    }
    public function approve(Madu $madu)
    {
        if (Auth::user()->user_role == 2 || Auth::user()->user_role == 3 || Auth::user()->user_role == 4) {
            $madu->update([
                'status' => 4,
                'business_status_id' => 4,
                'approved_by_surveyor_at' => Carbon::now(),
                'rejected_at' => null,
            ]);
            $return = [
                'api_code' => 200,
                'api_status' => true,
                'api_message' => 'Pengajuan Mangga Madu berhasil disetujui.',
                'api_results' => $madu
            ];
            return SuccessResource::make($return);
        } else {
            $return = [
                'api_code' => 403,
                'api_status' => false,
                'api_message' => 'Anda tidak memiliki akses untuk fungsi ini.',
            ];
            return FailedResource::make($return);
        }
    }

    public function reject(Madu $madu)
    {
        if (Auth::user()->user_role == 2 || Auth::user()->user_role == 3 || Auth::user()->user_role == 4) {
            $madu->update([
                'status' => 5,
                'business_status_id' => 5,
                'rejected_at' => Carbon::now(),
            ]);
            $return = [
                'api_code' => 200,
                'api_status' => true,
                'api_message' => 'Pengajuan Mangga Madu berhasil ditolak.',
                'api_results' => $madu
            ];
            return SuccessResource::make($return);
        } else {
            $return = [
                'api_code' => 403,
                'api_status' => false,
                'api_message' => 'Anda tidak memiliki akses untuk fungsi ini.',
            ];
            return FailedResource::make($return);
        }
    }
}
