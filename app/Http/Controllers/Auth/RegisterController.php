<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Village;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required',
            'handphone' => 'required|numeric',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $name = explode(' ', $data['name']);
        $firstName = $name[0];
        $lastName = (isset($name[count($name) - 1])) ? $name[count($name) - 1] : '';
        if ($data['referral_code'] == 'mamad') {
            return User::create([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $data['email'],
                'handphone' => $data['handphone'],
                'province_id' => 35,
                'city_id' => 3578,
                'district_id' => 3578170,
                'village_id' => 3578170005,
                'nik_karyawan' => $data['nik'],
                'employee_department_id' => $data['department'],
                'password' => Hash::make($data['password']),
                'user_role' => 1,
                'registration_ip' => request()->ip(),
                'referral_code' => $data['referral_code'] ?? ''
            ]);
        } else {
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
                'registration_ip' => request()->ip(),
                'referral_code' => $data['referral_code'] ?? ''
            ]);
        }
    }

    public function showRegistrationForm()
    {
        $provinces = Province::all();
        $cities = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        return view('auth.register', compact('provinces', 'cities', 'districts', 'villages'));
    }
}
