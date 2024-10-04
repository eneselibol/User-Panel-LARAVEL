<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function loginPage()
    {
        if (session()->has('user_id')) {
            return redirect('/home-page');
        } else {
            return view('login');
        }
    }

    public function userResgister(Request $request)
    {
        $user = new User();
        $user->user_name = $request->username;
        $user->tel = $request->tel;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return back()->with('status', 'Kayıt başarılı');
    }

    public function userLogin(Request $request)
    {
        $credetials = [
            'user_name' => $request->username,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)) {
            session()->put('user_id', Auth::user()->getAuthIdentifier());
            return redirect('/home-page');
        }
        return back()->with('status', 'Hata! Kullanıcı adı veya şifre hatalı');
    }

    public function homePage()
    {
        if (session()->has('user_id')) {
            $userProfile = User::find(session('user_id'));
            return view('index', ['userProfile' => $userProfile]);
        } else {
            return redirect('/');
        }
    }

    public function userUpdate(Request $request){
        $user = new User();
        $data = request()->all();
        unset($data['_token']);
        $user->whereId(session('user_id'))->update($data);
        return back()->with('update-status', 'Kaydedildi.');
    }

    public function logout()
    {
        Auth::logout();
        session()->forget('user_id');
        return redirect('/');
    }

}
