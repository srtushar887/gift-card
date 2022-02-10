<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserCustomLoginController extends Controller
{
    public function custom_register(Request $request)
    {
        $new_user = new User();
        $new_user->have_ref_id = $request->have_ref_id;
        $new_user->name = $request->name;
        $new_user->email = $request->email;
        $new_user->phone_number = $request->phone_number;
        $new_user->password = Hash::make($request->password);
        $new_user->save();


        $ref_id = User::where('id',$new_user->id)->first();
        $ref_id->my_ref_id = rand(000000,999999).$new_user->id.rand(000000,999999);
        $ref_id->save();


        return redirect(route('login'))->with('success','Account Successfully Created. Please Login');
    }


    public function custom_login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
        if(Auth::guard('auth')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            return redirect(route('home'));
        }

        return redirect()->back();
    }

}
