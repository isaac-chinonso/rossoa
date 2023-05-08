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

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '2' , 'status' => '1'])) {

            return redirect()->intended(route('userdashboard'));
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '2' , 'status' => '0'])) {

            return redirect()->intended(route('userauthpending'));
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
            'nickname' => 'required',
            'entryyear' => 'required',
            'occupation' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'post_held' => 'required',
            'associate_post' => 'required',
            'dob' => 'required',
            'location' => 'required',
            'gender' => 'required',
            'password' => 'required|min:4',
            'confirm_password' => 'required|same:password',
        ]);

        // Save Record into user DB
        $user = new User();
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = 2;
        $user->status = 0;
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
        $profile->nickname = $request->input('nickname');
        $profile->entryyear = $request->input('entryyear');
        $profile->occupation = $request->input('occupation');
        $profile->phone = $request->input('phone');
        $profile->alt_phone = $request->input('alt_phone');
        $profile->post_held = $request->input('post_held');
        $profile->associate_post = $request->input('associate_post');
        $profile->dob = $request->input('dob');
        $profile->location = $request->input('location');
        $profile->gender = $request->input('gender');
        $profile->institution = $request->input('institution');
        $profile->course = $request->input('course');
        $profile->description = '';
        $profile->save();

        Auth::login($user);

        $user = Auth::user();

        \Session::flash('Success_message', 'You have successfully registered');

        return redirect()->route('profile1');
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
            'location' => 'required',
            'post_held' => 'required',
            'associate_post' => 'required',
            'institution' => 'required',
            'course' => 'required',
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

        $profile->alt_phone = $request->input('alt_phone');

        $profile->location = $request->input('location');

        $profile->dob = $request->input('dob');

        $profile->post_held = $request->input('post_held');

        $profile->associate_post = $request->input('associate_post');

        $profile->institution = $request->input('institution');

        $profile->course = $request->input('course');

        $profile->description = $request->input('description');
         
        if ($request->hasFile('pimage')) {
            $image = $request['pimage'];
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destination = public_path('file/');
            $image->move($destination, $filename);
            $profile->pimage = $image;
        }

        $profile->save();

        \Session::flash('Success_message', '✔ profile Updated Succeffully');

        return redirect()->intended(route('userdashboard'));
    }

    // Logout Function
    public function logout()
    {
        $user = Auth::user();

        Auth::logout();
        return redirect()->route('login');
    }
}
