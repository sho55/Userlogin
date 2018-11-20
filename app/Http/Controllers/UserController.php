<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function getSignup(){
    return View('user.signup');
  }

  public function postSignup(Request $request){
  // バリデーション
    $this->validate($request,[
      'name' => 'required',
      'email' => 'email|required|unique:users',
      'password' => 'required|min:4',
      'area' => 'required',
      'experience' => 'required'
    ]);

  // DBインサート
    $user = new User([
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'password' => bcrypt($request->input('password')),
      'area' => $request->input('area'),
      'experience' => $request->input('experience')
      // 'area' => 'required',
      // 'experience' => 'required'
    ]);

  // 保存
    $user->save();

  // リダイレクト
    return redirect()->route('user.profile');
  }

  public function getSignin()
  {
    return view('user.signin');
  }

  public function postSignin(Request $request)
  {
    $this->validate($request,[
      'email' => 'email|required',
      'password' => 'required|min:4',
    ]);
    // 認証確認
    if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
      return redirect()->route('user.profile');
   }
   return redirect()->back();
 }

   public function getProfile(){
    return view('user.profile');
  }
  // ログアウト
 public function getLogout(){
  Auth::logout();
  return redirect()->route('user.signin');
}
}