<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Batch_Candidate;
use App\Models\Batch_Category;
use App\Models\Batch_votedate;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Event;
use App\Models\Forum;
use App\Models\ForumMember;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\Noticeboard;
use App\Models\Product;
use App\Models\Project;
use App\Models\Scholarship;
use App\Models\ScholarshipApplication;
use App\Models\User;
use App\Models\Vote;
use App\Models\VoteCandidate;
use App\Models\VoteCategory;
use App\Models\Votedate;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function dashboard()
    {
        $data['user'] = User::where('role_id', 2)->count();
        $data['blogpost'] = Blog::where('status', '=', 1)->count();
        $data['product'] = Product::count();
        $data['forum'] = Forum::count();
        $data['scholarship'] = Scholarship::count();
        $data['gallery'] = Gallery::count();
        $data['event'] = Event::latest()->where('status', 1)->limit(1)->get();
        $data['job'] = Job::latest()->where('status', 1)->paginate(5);
        return view('admin.dashboard', $data);
    }

    public function product()
    {
        $data['product'] = Product::all();
        return view('admin.product', $data);
    }

    public function addproduct()
    {
        return view('admin.addproduct');
    }

    public function blog()
    {
        $data['blogpost'] = Blog::where('status', '=', 1)->get();
        return view('admin.blog', $data);
    }

    public function addblog()
    {
        $data['categories'] = BlogCategory::get();
        return view('admin.addblog', $data);
    }

    public function blogcategory()
    {
        $data['categories'] = BlogCategory::get();
        return view('admin.blogcategory', $data);
    }

    public function dues()
    {
        return view('admin.dues');
    }

    public function nationalvoting()
    {
        $data['user'] = User::where('role_id', 2)->get();
        $data['votecategory'] = VoteCategory::where('status', 1)->get();
        $data['votecandidate'] = VoteCandidate::where('status', 1)->get();
        $data['votedate'] = Votedate::where('status', 1)->latest('created_at')->get();
        return view('admin.nationalvoting', $data);
    }

    public function batchvoting()
    {
        $data['user'] = User::where('role_id', 2)->get();
        $data['votecategory'] = Batch_Category::where('status', 1)->get();
        $data['votecandidate'] = Batch_Candidate::where('status', 1)->get();
        $data['votedate'] = Batch_votedate::where('status', 1)->latest('created_at')->limit(1)->get();
        return view('admin.batchvoting', $data);
    }

    public function batchvotingcandidate($id)
    {
        $data['votecandidate'] = Batch_Candidate::where('category_id', $id)->get();
        return view('admin.bvotecandidate', $data);
    }

    public function nationalvotingcandidate($id)
    {
        $data['votecandidate'] = VoteCandidate::where('category_id', $id)->get();
        return view('admin.nvotecandidate', $data);
    }

    public function voteresult($id)
    {
        $data['voteresult'] = Vote::where('id', $id)->get();
        $data['voteresultcount'] = Vote::where('id', $id)->count();
        return view('admin.voteresult', $data);
    }

    public function event()
    {
        $data['event'] = Event::where('status', 1)->get();
        return view('admin.event', $data);
    }

    public function job()
    {
        $data['jobs'] = Job::all();
        return view('admin.job', $data);
    }

    public function submittedjob()
    {
        $data['submittedjobs'] = JobApplication::all();
        return view('admin.submittedjobs', $data);
    }

    public function addjob()
    {
        return view('admin.addjob');
    }

    public function editjob($id)
    {
        $data['editjob'] = Job::where('id', $id)->first();
        return view('admin.editjob', $data);
    }

    public function scholarship()
    {
        $data['scholarship'] = Scholarship::all();
        return view('admin.scholarship', $data);
    }

    public function submittedscholarship()
    {
        $data['submittedscholarship'] = ScholarshipApplication::all();
        return view('admin.submittedscholarship', $data);
    }

    public function member()
    {
        $data['user'] = User::where('role_id', 2)->get();
        return view('admin.members', $data);
    }

    public function forum()
    {
        $data['forums'] = Forum::get();
        $data['users'] = User::all();
        return view('admin.forum', $data);
    }

    public function forummembers($id)
    {
        $data['forummembers'] = ForumMember::where('group_id', $id)->get();
        return view('admin.forum_members', $data);
    }

    public function pendingforummembers()
    {
        $data['pendingforummembers'] = ForumMember::where('status', 0)->get();
        return view('admin.pending_forum_member', $data);
    }

    public function noticeboard()
    {
        $data['noticeboard'] = Noticeboard::where('status', 1)->get();
        return view('admin.noticeboard', $data);
    }

    public function gallerycategory()
    {
        $data['gallerycategory'] = GalleryCategory::where('status', 1)->get();
        return view('admin.gallerycategory', $data);
    }

    public function gallery()
    {
        $data['gallerycategory'] = GalleryCategory::where('status', 1)->get();
        $data['galleries'] = Gallery::where('status', 1)->get();
        return view('admin.gallery', $data);
    }

    public function project()
    {
        $data['projects'] = Project::where('status', 1)->get();
        return view('admin.projects', $data);
    }

    
}
