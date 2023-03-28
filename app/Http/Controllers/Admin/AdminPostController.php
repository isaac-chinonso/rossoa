<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Job;
use App\Models\Noticeboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Support\Str;
use App\Models\Scholarship;

class AdminPostController extends Controller
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

        $slug = Str::slug($request->name);
        $pslug = Product::where('slug', $slug)->first();
        //check if slug exists
        if ($pslug) {
            $slug = $slug . '-copy';
        }

        $user = Auth::user();
        // Save Record into Product DB
        $product = new Product();
        $product->user_id = $user->id;
        $product->name = $request->input('name');
        $product->slug = $slug;
        $product->brand = $request->input('brand');
        $product->location = $request->input('location');
        $product->price = $request->input('price');
        $product->condition = $request->input('condition');
        $product->feature = $request->input('feature');
        $product->description = $request->input('description');
        $product->image = $filename;
        $product->status = 1;
        $product->save();

        \Session::flash('Success_message', 'Product Added Successfully');

        return back();
    }

    public function deleteproduct($id)
    {
        // Delete product
        $product = Product::where('id', $id)->first();
        $file_path = public_path() . '/upload/' . $product->image->first()->source;
        unlink($file_path);
        $product->delete();

        \Session::flash('Success_message', 'You Have Successfully Deleted product');

        return back();
    }

    public function setfeatured($id)
    {

        Product::where(['id' => $id])
            ->update(array('status' => 2));

        \Session::flash('Success_message', 'Product Successfully Set as Featured Product');

        return back();
    }

    public function activateproduct($id)
    {

        Product::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('Success_message', 'Product Approved Successfully');

        return back();
    }

    public function deactivateproduct($id)
    {

        Product::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('Success_message', 'Product Deactivated Successfully');

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
        $job->status = 1;
        $job->save();

        \Session::flash('Success_message', 'Job Opening Added Successfully');

        return back();
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

        return redirect()->route('adminjobs');
    }

    public function activatejob($id)
    {

        Job::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('Success_message', 'Job Approved Successfully');

        return back();
    }

    public function deactivatejob($id)
    {

        Job::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('Success_message', 'Job Deactivated Successfully');

        return back();
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

        // Save Record into Scholarship DB
        $scholarship = new Scholarship();
        $scholarship->title = $request->input('title');
        $scholarship->closingdate = $request->input('closingdate');
        $scholarship->requirement = $request->input('requirement');
        $scholarship->scholarshipimage = $filename;
        $scholarship->description = $request->input('description');
        $scholarship->status = 1;
        $scholarship->save();

        \Session::flash('Success_message', 'Scholarship Added Successfully');

        return back();
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

        return back();
    }

    public function activatescholarship($id)
    {

        Scholarship::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('Success_message', 'Scholarship Approved Successfully');

        return back();
    }

    public function deactivatescholarship($id)
    {

        Scholarship::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('Success_message', 'Scholarship Deactivated Successfully');

        return back();
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

    // Save Event
    public function saveevent(Request $request)
    {
        // Validation
        $this->validate($request, [
            'title' => 'required',
            'date' => 'required',
            'location' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        $image = $request['image'];
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $destination = public_path('event/');
        $image->move($destination, $filename);

        $user = Auth::user();
        // Save Record into Event DB
        $event = new Event();
        $event->title = $request->input('title');
        $event->date = $request->input('date');
        $event->location = $request->input('location');;
        $event->description = $request->input('description');
        $event->coverimage = $filename;
        $event->status = 1;
        $event->save();

        \Session::flash('Success_message', 'Event Added Successfully');

        return back();
    }

    public function deleteevent($id)
    {
        // Delete Event
        $event = Event::where('id', $id)->first();
        $file_path = public_path() . '/event/' . $event->coverimage;
        unlink($file_path);
        $event->delete();

        \Session::flash('Success_message', 'You Have Successfully Deleted product');

        return back();
    }

    // Save Notice Board
    public function savenoticeboard(Request $request)
    {
        // Validation
        $this->validate($request, [
            'noticesubject' => 'required',
            'notice' => 'required',
        ]);

        // Save Record into Notice Board DB
        $noticeboard = new Noticeboard();
        $noticeboard->noticesubject = $request->input('noticesubject');
        $noticeboard->notice = $request->input('notice');
        $noticeboard->status = 1;
        $noticeboard->save();

        \Session::flash('Success_message', 'Notice Added Successfully');

        return back();
    }

    // Update Notice Board function
    public function updatenotice(Request $request, $id)
    {
        $noticeboard = Noticeboard::find($id);
        // Validation
        $this->validate($request, array(
            'noticesubject' => 'required',
            'notice' => 'required',
        ));

        $noticeboard = Noticeboard::find($id);

        $noticeboard->noticesubject = $request->input('noticesubject');

        $noticeboard->notice = $request->input('notice');

        $noticeboard->save();

        \Session::flash('Success_message', '✔ Notice Updated Succeffully');

        return back();
    }

    public function deletenoticeboard($id)
    {
        // Delete Notice Board
        $noticeboard = Noticeboard::where('id', $id)->first();
        $noticeboard->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted NoticeBoard');

        return back();
    }

    // Save Gallery Category
    public function savegallerycategory(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
        ]);

        $slug = Str::slug($request->name);
        $gslug = GalleryCategory::where('slug', $slug)->first();
        //check if slug exists
        if ($gslug) {
            $slug = $slug . '-copy';
        }

        $image = $request['image'];
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $destination = public_path('gallery/');
        $image->move($destination, $filename);


        // Save Record into User DB
        $gallerycategory = new GalleryCategory();
        $gallerycategory->name = $request->input('name');
        $gallerycategory->slug = $slug;
        $gallerycategory->coverimage = $filename;
        $gallerycategory->status = 1;
        $gallerycategory->save();

        \Session::flash('Success_message', 'You Have Successfully Added a Category');

        return back();
    }

    // Update Gallery Category function
    public function updategallerycategory(Request $request, $id)
    {
        $gallerycategory = GalleryCategory::find($id);
        // Validation
        $this->validate($request, array(
            'name' => 'required',
        ));

        if ($request->hasFile('coverimage')) {
            $image = $request['coverimage'];
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destination = public_path('gallery/');
            $image->move($destination, $filename);
            $gallerycategory->coverimage = $image;
        }

        $gallerycategory = GalleryCategory::find($id);

        $gallerycategory->name = $request->input('name');

        $gallerycategory->save();

        \Session::flash('Success_message', '✔ Gallery Category Updated Succeffully');

        return back();
    }

    public function deletegallerycategory($id)
    {
        // Delete Gallery Category
        $gallerycategory = GalleryCategory::where('id', $id)->first();
        $file_path = public_path() . '/gallery/' . $gallerycategory->coverimage;
        unlink($file_path);
        $gallerycategory->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Category');

        return back();
    }

    public function savegallery(Request $request)
    {
        $this->validate($request, [
            'galleryimage' => 'mimes:jpeg,jpg,png|required|max:5000',
            'category_id' => 'required',
        ]);

        $galleryimage = $request['galleryimage'];
        $filename = time() . '.' . $galleryimage->getClientOriginalExtension();
        $destination = public_path('gallery/');
        $galleryimage->move($destination, $filename);

        // Save Record into Gallery DB
        $gallery = new Gallery();
        $gallery->category_id = $request->input('category_id');
        $gallery->galleryimage = $filename;
        $gallery->status = 1;
        $gallery->save();

        \Session::flash('Success_message', 'Gallery posted Successfully');

        return back();
    }

    // Delete Gallery
    public function deletegallery($id)
    {
        $gallery = Gallery::find($id);
        $file_path = public_path() . '/gallery/' . $gallery->first()->galleryimage;
        unlink($file_path);
        $gallery->delete();

        \Session::flash('Success_message', 'Gallery Deleted Successfully');
        return back();
    }

    public function saveproject(Request $request)
    {
        $this->validate($request, [
            'projectimage' => 'mimes:jpeg,jpg,png|required|max:5000',
            'title' => 'required',
        ]);

        $projectimage = $request['projectimage'];
        $filename = time() . '.' . $projectimage->getClientOriginalExtension();
        $destination = public_path('project/');
        $projectimage->move($destination, $filename);

        // Save Record into Project DB
        $project = new Project();
        $project->title = $request->input('title');
        $project->projectimage = $filename;
        $project->status = 1;
        $project->save();

        \Session::flash('Success_message', 'Project Uploaded Successfully');

        return back();
    }

    // Delete Project
    public function deleteproject($id)
    {
        $project = Project::find($id);
        $file_path = public_path() . '/project/' . $project->first()->projectimage;
        unlink($file_path);
        $project->delete();

        \Session::flash('Success_message', 'Project Deleted Successfully');
        return back();
    }
}
