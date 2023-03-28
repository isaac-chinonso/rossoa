<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Profile;

class AuthController extends Controller
{
    // Login Function
    public function signin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput($request->all());
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '1', 'status' => '1'])) {

            return redirect()->intended(route('admindashboard'));
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '2'])) {

            return redirect()->intended(route('userdashboard'));
        }
        \Session::flash('warning_message', 'These credentials do not match our records.');

        return redirect()->back();
    }

    //Save Users Function
    public function savelogin(Request $request)
    {
        // Validation
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'email' => 'required|email|unique:users',
            'occupation' => 'required',
            'entryyear' => 'required',
            'nickname' => 'required',
            'password' => 'required|min:4',
            'confirm_password' => 'required|same:password',
        ]);

        // Save Record into user DB
        $user = new User();
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = 2;
        $user->status = 1;
        if (User::where('email', '=', $user->email)->exists()) {
            return redirect()->back()->with('warning_message', 'User Already Exist');
        } else {
            $user->save();
        }

        // Save Record into picture DB
        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->fname = $request->input('fname');
        $profile->lname = $request->input('lname');
        $profile->occupation = $request->input('occupation');
        $profile->gender = $request->input('gender');
        $profile->nickname = $request->input('nickname');
        $profile->entryyear = $request->input('entryyear');
        $profile->phone = '';
        $profile->location = '';
        $profile->dob = '';
        $profile->description = '';
        $profile->save();

        Auth::login($user);

        $user = Auth::user();

        \Session::flash('Success_message', 'You have successfully registered');

        return redirect()->route('userdashboard');
    }

    // Update profile function
    public function updateprofile(Request $request, $id)
    {
        $user = Auth::user();
        $profile = Profile::find($id);
        // Validation
        $this->validate($request, array(
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'occupation' => 'required',
            'entryyear' => 'required',
            'nickname' => 'required',
        ));

        $profile = Profile::find($id);

        $profile->user_id = $user->id;

        $profile->fname = $request->input('fname');

        $profile->lname = $request->input('lname');

        $profile->occupation = $request->input('occupation');

        $profile->gender = $request->input('gender');

        $profile->nickname = $request->input('nickname');

        $profile->entryyear = $request->input('entryyear');

        $profile->phone = $request->input('phone');

        $profile->location = $request->input('location');

        $profile->dob = $request->input('dob');

        $profile->description = $request->input('description');

         // save image 
         $pimage = $request['pimage'];
         $filename = $pimage->getClientOriginalName();
         $destination = 'file';
         $pimage->move($destination, $filename);
         $profile->pimage = $filename;

        $profile->save();

        \Session::flash('Success_message', '✔ profile Updated Succeffully');

        return back();
    }

    // Logout Function
    public function logout()
    {
        $user = Auth::user();

        Auth::logout();
        return redirect()->route('login');
    }
}
