<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use APP\Signup;

class SignupController extends Controller
{
    //
    public function add()
    {
    	return view('admin.signup.create');
    }
    public function create(Requst $request)
   {
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

}
