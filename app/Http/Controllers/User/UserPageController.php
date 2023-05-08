<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Forum;
use App\Models\ForumMember;
use App\Models\Job;
use App\Models\Message;
use App\Models\Noticeboard;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Scholarship;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPageController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $data['product'] = Product::where('user_id', $user->id)->count();
        $data['scholarship'] = Scholarship::where('user_id', $user->id)->count();
        $data['job'] = Job::where('user_id', $user->id)->count();
        $data['event'] = Event::latest()->where('status', 1)->limit(2)->get();
        $data['noticeboard'] = Noticeboard::where('status', 1)->limit(3)->get();
        return view('user.dashboard', $data);
    }

    public function pendingapproval()
    {
        return view('user.awaiting_page');
    }

    public function product()
    {
        $user = Auth::user();
        $data['product'] = Product::where('user_id', $user->id)->get();
        return view('user.product', $data);
    }

    public function addproduct()
    {
        return view('user.addproduct');
    }

    public function job()
    {
        $user = Auth::user();
        $data['jobs'] = Job::where('user_id', $user->id)->get();
        return view('user.job', $data);
    }

    public function addjob()
    {
        return view('user.addjob');
    }

    public function editjob($id)
    {
        $user = Auth::user();
        $data['editjob'] = Job::where('user_id', $user->id)->first();
        return view('user.editjob', $data);
    }

    public function scholarship()
    {
        $user = Auth::user();
        $data['scholarship'] = Scholarship::where('user_id', $user->id)->get();
        return view('user.scholarship', $data);
    }

    public function addscholarship()
    {
        return view('user.addscholarship');
    }

    public function editscholarship($id)
    {
        $data['schol'] = Scholarship::where('id', $id)->first();
        return view('user.editscholarship', $data);
    }

    public function noticeboard()
    {
        $data['noticeboard'] = Noticeboard::where('status', 1)->get();
        return view('user.noticeboard', $data);
    }

    public function forum()
    {
        $data['forum'] = Forum::where('status', 1)->get();
        $user = Auth::user();
        $data['forummember'] = ForumMember::where('user_id', $user->id)->get();
        return view('user.forum', $data);
    }

    public function forumchat($id)
    {
        $data['forums'] = ForumMember::where('group_id', $id)->first();
        $data['forum'] = ForumMember::where('group_id', $id)->get();
        $data['forumconversation'] = Message::where('group_id', $id)->get();
        return view('user.forum_chat', $data);
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function editprofile()
    {
        return view('user.editprofile');
    }
}
