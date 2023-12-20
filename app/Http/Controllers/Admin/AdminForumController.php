<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use App\Models\ForumMember;
use Illuminate\Http\Request;

class AdminForumController extends Controller
{
    // Save Forum
    public function saveforum(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
        ]);

        // Save Record into Forum DB
        $forum = new Forum();
        $forum->name = $request->input('name');
        $forum->status = 1;
        $forum->save();

        \Session::flash('Success_message', 'Forum Added Successfully');

        return back();
    }

    // Update Forum function
    public function updateForum(Request $request, $id)
    {
        $forum = Forum::find($id);
        // Validation
        $this->validate($request, array(
            'name' => 'required',
        ));

        $forum = Forum::find($id);

        $forum->name = $request->input('name');

        $forum->save();

        \Session::flash('Success_message', '✔ Forum Updated Succeffully');

        return back();
    }

    public function deleteForum($id)
    {
        // Delete Forum
        $forum = Forum::where('id', $id)->first();
        $forum->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Forum');

        return back();
    }

    // Add Member to Forum
    public function addmember(Request $request)
    {
        // Validation
        $this->validate($request, [
            'group_id' => 'required',
            'user_id' => 'required',
        ]);

        // Save Record into Forum Members DB
        $forum = new ForumMember();
        $forum->group_id = $request->input('group_id');
        $forum->user_id = $request->input('user_id');
        $forum->status = 1;
        if (ForumMember::where('user_id', '=', $forum->user_id)->where('group_id', '=', $forum->group_id)->exists()) {
            return redirect()->back()->with('warning_message', 'Member already Exist');
        } else {

            $forum->save();
            \Session::flash('Success_message', 'Member Added Forum Successfully');

            return back();
        }

    }

    public function approvememberrequest($id)
    {

        ForumMember::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('Success_message', '✔ Approved Successfully');

        return back();
    }

    public function deletemember($id)
    {
        // Delete Forum Member
        $forummember = ForumMember::where('id', $id)->first();
        $forummember->delete();

        \Session::flash('Success_message', '✔ Deleted Successfully');

        return back();
    }
    
}
