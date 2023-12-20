<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VoteCandidate;
use App\Models\VoteCategory;
use App\Models\Votedate;
use App\Models\Batch_Candidate;
use App\Models\Batch_Category;
use App\Models\Batch_vote;
use App\Models\Batch_votedate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminVoteController extends Controller
{
    // Save Vote Category
    public function savevotecategory(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
        ]);

        // Save Record into Vote Category DB
        $votecategory = new VoteCategory();
        $votecategory->name = $request->input('name');
        $votecategory->status = 1;
        $votecategory->save();

        \Session::flash('Success_message', 'Vote Category Added Successfully');

        return back();
    }

    // Update Vote Category function
    public function updatevotecategory(Request $request, $id)
    {
        $votecategory = VoteCategory::find($id);
        // Validation
        $this->validate($request, array(
            'name' => 'required',
        ));

        $votecategory = VoteCategory::find($id);

        $votecategory->name = $request->input('name');

        $votecategory->save();

        \Session::flash('Success_message', '✔ Vote Category Updated Succeffully');

        return back();
    }

    public function deletevotecategory($id)
    {
        // Delete Voting Category
        $votecategory = VoteCategory::where('id', $id)->first();
        $votecategory->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Vote Category');

        return back();
    }

    // Add Vote Candidate
    public function savevotecandidate(Request $request)
    {
        // Validation
        $this->validate($request, [
            'category_id' => 'required',
            'user_id' => 'required',
        ]);

        $image = $request['image'];
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $destination = public_path('voting/');
        $image->move($destination, $filename);

        // Save Record into Vote Candidate DB
        $votecandidate = new VoteCandidate();
        $votecandidate->user_id = $request->user_id;
        $votecandidate->category_id = $request->category_id;
        $votecandidate->candidate_image = $filename;
        $votecandidate->status = 1;

        if (VoteCandidate::where('user_id', '=', $votecandidate->user_id)->exists()) {
            return redirect()->back()->with('warning_message', 'Candidate is currently holding a position');
        } else {

            $votecandidate->save();

            \Session::flash('Success_message', 'Candidate Added Successfully');

            return back();
        }
    }

    // Save Vote Date/Time
    public function savevotedate(Request $request)
    {
        // Validation
        $this->validate($request, [
            'start' => 'required',
            'end' => 'required',
        ]);

        // Save Record into Vote Date/Time DB
        $votedate = new Votedate();
        $votedate->category_id = $request->category_id;
        $votedate->start = $request->input('start');
        $votedate->end = $request->input('end');
        $votedate->status = 1;
        $votedate->save();

        \Session::flash('Success_message', 'Vote Date Set Successfully');

        return back();
    }

    public function deletevotedate($id)
    {
        // Delete Voting Date/Time
        $votedate = Votedate::where('id', $id)->first();
        $votedate->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Vote Date/Time');

        return back();
    }



    // Save Batch Vote Category
    public function savebatchvotecategory(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
        ]);

        // Save Record into Batch Vote Category DB
        $batchvotecategory = new Batch_Category();
        $batchvotecategory->name = $request->input('name');
        $batchvotecategory->status = 1;
        $batchvotecategory->save();

        \Session::flash('Success_message', 'Batch Vote Category Added Successfully');

        return back();
    }

    // Update Batch Vote Category function
    public function updatebatchvotecategory(Request $request, $id)
    {
        $batchvotecategory = Batch_Category::find($id);
        // Validation
        $this->validate($request, array(
            'name' => 'required',
        ));

        $batchvotecategory = Batch_Category::find($id);

        $batchvotecategory->name = $request->input('name');

        $batchvotecategory->save();

        \Session::flash('Success_message', '✔ Batch Vote Category Updated Succeffully');

        return back();
    }

    public function deletebatchvotecategory($id)
    {
        // Delete Voting Category
        $batchvotecategory = Batch_Category::where('id', $id)->first();
        $batchvotecategory->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Batch Vote Category');

        return back();
    }

    // Add Batch Vote Candidate
    public function savebatchvotecandidate(Request $request)
    {
        // Validation
        $this->validate($request, [
            'category_id' => 'required',
            'user_id' => 'required',
        ]);

        $image = $request['image'];
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $destination = public_path('voting/');
        $image->move($destination, $filename);

        // Save Record into Vote Candidate DB
        $batchvotecandidate = new Batch_Candidate();
        $batchvotecandidate->user_id = $request->user_id;
        $batchvotecandidate->category_id = $request->category_id;
        $batchvotecandidate->candidate_image = $filename;
        $batchvotecandidate->status = 1;
        $batchvotecandidate->save();

        \Session::flash('Success_message', 'Batch Candidate Added Successfully');

        return back();
    }

    // Save Batch Vote Date/Time
    public function savebatchvotedate(Request $request)
    {
        // Validation
        $this->validate($request, [
            'start' => 'required',
            'end' => 'required',
        ]);

        // Save Record into Batch Vote Date/Time DB
        $batchvotedate = new Batch_votedate();
        $batchvotedate->category_id = $request->category_id;
        $batchvotedate->start = $request->input('start');
        $batchvotedate->end = $request->input('end');
        $batchvotedate->status = 1;
        $batchvotedate->save();

        \Session::flash('Success_message', 'Batch Vote Date Set Successfully');

        return back();
    }

    public function deletebatchvotedate($id)
    {
        // Delete Batch Voting Date/Time
        $batchvotedate = Batch_votedate::where('id', $id)->first();
        $batchvotedate->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Batch Vote Date/Time');

        return back();
    }
}
