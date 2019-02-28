<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use APP\Signup;
use APP\Profile;

class SignupController extends Controller
{
    //
    public function add()
    {
    	return view('admin.signup.create');
    }
    public function create(Requst $request)
{
  // 以下を追記
      // Varidationを行う
      $this->validate($request, Signup::$rules);

      $signup = new Signup;
      $form = $request->all();

            // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      
      // データベースに保存する
      $signup->fill($form);
      $signup->save();

     return redirect('admin/signup/create');
   }

  public function edit()
  {
      return view('admin.signup.edit');
  }

  public function update()

  {
      return redirect('admin/signup/edit');
      }

public function profile(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Signup::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Signup::all();
      }
      return view('admin.signup.profile', ['posts' => $posts, 'cond_title' => $cond_title]);
  }


}
