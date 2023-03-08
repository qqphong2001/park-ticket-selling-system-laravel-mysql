<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\taikhoan;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule as ValidationRule;
use Symfony\Component\HttpFoundation\Session\Session;

use Illuminate\Validation\Rule;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AccountController extends Controller
{



    public function admin()
    {

        return view('admin/index/index');
    }

    public function login()
    {
        $data =[
            'banners' =>banner::where('name','login-register')->get(),
        ];


        return view('account/login')->with($data);
    }

    public function register()
    {
        $data =[
            'banners' =>banner::where('name','login-register')->get(),
        ];

        return view('account/register')->with($data);
    }

    public function processLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        $remember = $request->has('remember');

        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => 2
        ],$remember)) {

            if (auth()->user()->email_verified_at != null) {
                return redirect()->route('admin');
            }
            else{

            Session()->flash('error','Your account not active');

            }

        }
        elseif (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => 1,
        ], $remember)) {

            if (auth()->user()->email_verified_at != null) {
                return redirect()->route('user');
            }
            else{
                Session()->flash('error','Your account not active');
            }
        }
        elseif (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => 0,
        ], $remember)) {

            if (auth()->user()->email_verified_at != null) {
                Session()->flash('error','Your account has been locked');
            }
            else{
                Session()->flash('error','Your account not active');
            }

        }


        return redirect('account/login');

    }

    public function processregister(Request $request){

        $this->validate($request, [
            'name'=> 'required|',
            'email' => 'required|email:filter',
            'password' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',

        ]);
        try{
      $user =   User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
        ]);

        event(new Registered($user));

         auth()->login($user);

     }
      catch(\Exception $err){

        Session()->flash('error','Your email already exist');
        return  redirect()->back();
      }
      return  redirect('index');
    }




    public function updateRole(){

    }

    public function logout() {
        Auth::logout();

        return redirect()->route('login');
    }


}
