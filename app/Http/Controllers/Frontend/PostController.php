<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Models\ScholarshipApplication;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    // Save Jobs Application Form
    public function savejobapplication(Request $request)
    {
        // Validation
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'dob' => 'required',
            'sex' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'education_level' => 'required',
            'course' => 'required',
            'school_name' => 'required',
            'grade' => 'required',
            'last_work' => 'required',
            'duration' => 'required',
            'job_location' => 'required',
            'designation' => 'required',
            'old_salary' => 'required',
            'new_salary' => 'required',
            'cv' => 'required',
        ]);

        // Save Record into email
        $jobapplication = new JobApplication();
        $jobapplication->job_id = $request->input('job_id');
        $jobapplication->fname = $request->input('fname');
        $jobapplication->lname = $request->input('lname');
        $jobapplication->dob = $request->input('dob');
        $jobapplication->sex = $request->input('sex');
        $jobapplication->email = $request->input('email');
        $jobapplication->phone = $request->input('phone');
        $jobapplication->address = $request->input('address');
        $jobapplication->education_level = $request->input('education_level');
        $jobapplication->course = $request->input('course');
        $jobapplication->school_name = $request->input('school_name');
        $jobapplication->grade = $request->input('grade');
        $jobapplication->last_work = $request->input('last_work');
        $jobapplication->duration = $request->input('duration');
        $jobapplication->job_location = $request->input('job_location');
        $jobapplication->designation = $request->input('designation');
        $jobapplication->old_salary = $request->input('old_salary');
        $jobapplication->new_salary = $request->input('new_salary');
        // save image 
        $cv = $request['cv'];
        $filename = $cv->getClientOriginalName();
        $destination = 'file';
        $cv->move($destination, $filename);
        $jobapplication->cv = $filename;

        $jobapplication->status = 1;
        $jobapplication->save();

        \Session::flash('Success_message', 'Application Submitted Successfully');

        return back();
    }

    // Save Vote
    public function savevote(Request $request)
    {
        // Validation
        $this->validate($request, [
            'candidate_id' => 'required',
            'category' => 'required',
        ]);

        $user = Auth::user();
        // Save Record into Vote DB
        $vote = new Vote();
        $vote->user_id = $user->id;
        $vote->candidate_id = $request->input('candidate_id');
        $vote->category = $request->input('category');

        if (Vote::where('user_id', '=', $user->id)->where('candidate_id', '=', $vote->candidate_id)->exists()) {
            return redirect()->back()->with('warning_message', 'You have Casted Vote already');
        } else {

            $vote->save();
            \Session::flash('Success_message', 'Vote Casted Successfully');

            return redirect()->route('election');
        }
    }

    // Save Scholarship Application Form
    public function savescholarshipapplication(Request $request)
    {
        // Validation
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'dob' => 'required',
            'sex' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'education_level' => 'required',
            'course' => 'required',
            'school_name' => 'required',
            'grade' => 'required',
        ]);

        // Save Record into email
        $scholarshipform = new ScholarshipApplication();
        $scholarshipform->scholarship_id = $request->input('scholarship_id');
        $scholarshipform->fname = $request->input('fname');
        $scholarshipform->lname = $request->input('lname');
        $scholarshipform->dob = $request->input('dob');
        $scholarshipform->sex = $request->input('sex');
        $scholarshipform->email = $request->input('email');
        $scholarshipform->phone = $request->input('phone');
        $scholarshipform->address = $request->input('address');
        $scholarshipform->education_level = $request->input('education_level');
        $scholarshipform->course = $request->input('course');
        $scholarshipform->school_name = $request->input('school_name');
        $scholarshipform->grade = $request->input('grade');
        $scholarshipform->status = 1;
        $scholarshipform->save();

        \Session::flash('Success_message', 'Application Submitted Successfully');

        return back();
    }
}
