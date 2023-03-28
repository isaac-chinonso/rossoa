<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ForumMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Job;
use App\Models\Message;
use App\Models\Scholarship;

class UserPostController extends Controller
{
    // Save product
    public function saveproduct(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
            'brand' => 'required',
            'location' => 'required',
            'price' => 'required',
            'condition' => 'required',
            'feature' => 'required',
            'description' => 'required',
        ]);

        $image = $request['image'];
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $destination = public_path('product/');
        $image->move($destination, $filename);

        $user = Auth::user();
        // Save Record into Product DB
        $product = new Product();
        $product->user_id = $user->id;
        $product->name = $request->input('name');
        $product->brand = $request->input('brand');
        $product->location = $request->input('location');
        $product->price = $request->input('price');
        $product->condition = $request->input('condition');
        $product->feature = $request->input('feature');
        $product->description = $request->input('description');
        $product->image = $filename;
        $product->status = 0;
        $product->save();

        \Session::flash('Success_message', 'Product Added Successfully');

        return redirect()->route('userproduct');
    }

    public function deleteproduct($id)
    {
        // Delete product
        $product = Product::where('id', $id)->first();
        $file_path = public_path() . '/product/' . $product->image;
        unlink($file_path);
        $product->delete();

        \Session::flash('Success_message', 'You Have Successfully Deleted product');

        return back();
    }

    // Save Job
    public function savejob(Request $request)
    {
        // Validation
        $this->validate($request, [
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'experience' => 'required',
            'jobtype' => 'required',
            'description' => 'required',
        ]);

        $image = $request['image'];
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $destination = public_path('job/');
        $image->move($destination, $filename);

        $user = Auth::user();
        // Save Record into Job DB
        $job = new Job();
        $job->user_id = $user->id;
        $job->title = $request->input('title');
        $job->company = $request->input('company');
        $job->location = $request->input('location');
        $job->experience = $request->input('experience');
        $job->jobtype = $request->input('jobtype');
        $job->companylogo = $filename;
        $job->description = $request->input('description');
        $job->status = 0;
        $job->save();

        \Session::flash('Success_message', 'Job Opening Added Successfully');

        return redirect()->route('userjob');
    }


    // Update Job function
    public function updatejob(Request $request, $id)
    {
        $job = Job::find($id);
        // Validation
        $this->validate($request, array(
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'experience' => 'required',
            'jobtype' => 'required',
            'description' => 'required',
        ));
        if ($request->hasFile('companylogo')) {
            $image = $request['companylogo'];
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destination = public_path('job/');
            $image->move($destination, $filename);
            $job->companylogo = $image;
        }

        $user = Auth::user();

        $job = Job::find($id);

        $job->user_id = $user->id;
        $job->title = $request->input('title');
        $job->company = $request->input('company');
        $job->location = $request->input('location');
        $job->experience = $request->input('experience');
        $job->jobtype = $request->input('jobtype');
        $job->description = $request->input('description');

        $job->save();

        \Session::flash('Success_message', '✔ Job Updated Successfully');

        return redirect()->route('userjob');
    }

    public function deletejob($id)
    {
        // Delete Job
        $job = Job::find($id);
        $job->delete();

        \Session::flash('Success_message', 'You Have Successfully Deleted Job Opening');

        return back();
    }

    // Save Scholarship
    public function savescholarship(Request $request)
    {
        // Validation
        $this->validate($request, [
            'title' => 'required',
            'closingdate' => 'required',
            'requirement' => 'required',
            'description' => 'required',
        ]);

        $image = $request['image'];
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $destination = public_path('scholarship/');
        $image->move($destination, $filename);

        $user = Auth::user();

        // Save Record into Scholarship DB
        $scholarship = new Scholarship();
        $scholarship->user_id = $user->id;
        $scholarship->title = $request->input('title');
        $scholarship->closingdate = $request->input('closingdate');
        $scholarship->requirement = $request->input('requirement');
        $scholarship->scholarshipimage = $filename;
        $scholarship->description = $request->input('description');
        $scholarship->status = 0;
        $scholarship->save();

        \Session::flash('Success_message', 'Scholarship Added Successfully');

        return redirect()->route('userscholarship');
    }

    // Update Scholarship function
    public function updatescholarship(Request $request, $id)
    {
        $scholarship = Scholarship::find($id);
        // Validation
        $this->validate($request, array(
            'title' => 'required',
            'closingdate' => 'required',
            'requirement' => 'required',
            'description' => 'required',
        ));
        if ($request->hasFile('scholarshipimage')) {
            $image = $request['scholarshipimage'];
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destination = public_path('scholarship/');
            $image->move($destination, $filename);
            $scholarship->scholarshipimage = $image;
        }

        $user = Auth::user();

        $scholarship = Scholarship::find($id);

        $scholarship->title = $request->input('title');
        $scholarship->closingdate = $request->input('closingdate');
        $scholarship->requirement = $request->input('requirement');
        $scholarship->description = $request->input('description');

        $scholarship->save();

        \Session::flash('Success_message', '✔ Scholarship Updated Successfully');

        return redirect()->route('userscholarship');
    }

    public function deletescholarship($id)
    {
        // Delete Blog Scholarship
        $scholarship = Scholarship::where('id', $id)->first();
        $file_path = public_path() . '/scholarship/' . $scholarship->scholarshipimage;
        unlink($file_path);
        $scholarship->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Scholarship');

        return back();
    }

     // Request to join Forum
     public function joinforum(Request $request)
     {
         // Validation
         $this->validate($request, [
             'group_id' => 'required',
         ]);
 
         $user = Auth::user();
         // Save Record into Forum Members DB
         $forum = new ForumMember();
         $forum->group_id = $request->input('group_id');
         $forum->user_id = $user->id;
         $forum->status = 0;
         if (ForumMember::where('user_id', '=', $forum->user_id)->where('group_id', '=', $forum->group_id)->where('status', '=', 0)->exists()) {
             return redirect()->back()->with('warning_message', 'You have an active request');
         } elseif 
            (ForumMember::where('user_id', '=', $forum->user_id)->where('group_id', '=', $forum->group_id)->where('status', '=', 1)->exists()) {
                return redirect()->back()->with('warning_message', 'You are already a Member');

         }else{

             $forum->save();
             \Session::flash('Success_message', 'Forum Request Sent Successfully');
 
             return back();
         }
 
     }

     // Save Forum Conversation
     public function saveforumconversation(Request $request)
     {
         // Validation
         $this->validate($request, [
             'group_id' => 'required',
             'message' => 'required',
         ]);
 
         $user = Auth::user();
         // Save Record into Message DB
         $message = new Message();
         $message->user_id = $user->id;
         $message->group_id = $request->input('group_id');
         $message->message = $request->input('message');
         $message->save();
 
         \Session::flash('Success_message', 'Message Sent Successfully');
 
         return back();
     }
}
