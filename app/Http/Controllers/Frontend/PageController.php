<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Job;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Scholarship;
use App\Models\User;
use App\Models\VoteCandidate;
use App\Models\Votedate;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index()
    {
        $data['blogpost'] = Blog::where('status', '=', 1)->inRandomOrder()->simplePaginate(3);
        $data['jobs'] = Job::where('status', '=', 1)->inRandomOrder()->simplePaginate(3);
        $data['scholarships'] = Scholarship::where('status', '=', 1)->inRandomOrder()->simplePaginate(3);
        $data['event'] = Event::where('status', 1)->latest()->take(1)->get();
        $data['galleries'] = Gallery::where('status', '=', 1)->inRandomOrder()->simplePaginate(6);
        $today = now();
        $data['birthday'] = Profile::whereMonth('dob', $today->month)->whereDay('dob', $today->day)->get();
        $data['allgalleries'] = Gallery::where('status', '=', 1)->count();
        $data['allevent'] = Event::where('status', 1)->count();
        $data['allusers'] = User::where('role_id', 2)->count();
        $data['allscholarship'] = Scholarship::where('status', 1)->count();
        return view('frontend.index', $data);
    }

    public function about()
    {
        $data['allgalleries'] = Gallery::where('status', '=', 1)->count();
        $data['allevent'] = Event::where('status', 1)->count();
        $data['allusers'] = User::where('role_id', 2)->count();
        $data['allscholarship'] = Scholarship::where('status', 1)->count();
        return view('frontend.about', $data);
    }

    public function mission()
    {
        return view('frontend.mission');
    }
    public function president()
    {
        return view('frontend.president');
    }

    public function event()
    {
        $data['event'] = Event::where('status', 1)->get();
        return view('frontend.event', $data);
    }

    public function birthday()
    {
        $today = now();
        $data['birthday'] = Profile::whereMonth('dob', $today->month)->whereDay('dob', $today->day)->get();
        return view('frontend.birthday', $data);
    }

    public function gallery()
    {
        $data['gallerycategory'] = GalleryCategory::where('status', 1)->get();
        return view('frontend.gallery', $data);
    }

    public function galleryimage($id)
    {
        $data['gallery'] = Gallery::where('category_id', $id)->get();
        return view('frontend.galleryimage', $data);
    }

    public function blog()
    {
        $data['blogpost'] = Blog::where('status', '=', 1)->inRandomOrder()->simplePaginate(9);
        return view('frontend.blog', $data);
    }

    public function blogdetails($slug)
    {
        $data['blogdetails'] = Blog::where('slug', '=', $slug)->first();
        $data['blogpost'] = Blog::where('status', '=', 1)->inRandomOrder()->simplePaginate(9);
        $data['categories'] = BlogCategory::get();
        return view('frontend.blogdetails', $data);
    }

    public function donate()
    {
        $data['projects'] = Project::where('status', 1)->get();
        return view('frontend.donate', $data);
    }

    public function committee()
    {
        return view('frontend.committee');
    }

    public function database()
    {
        $data['allusers'] = User::where('role_id', 2)->count();
        $data['users'] = User::where('role_id', 2)->get();
        return view('frontend.database', $data);
    }

    public function searchmember(Request $request)
    {
        $search_text = $request->get('search');
        $search_text1 = $request->get('search1');
        $data['searchprofile'] = Profile::where('lname', 'LIKE', '%' . $search_text . '%')->Where('entryyear', 'LIKE', '%' . $search_text1 . '%')->get();

        return view('frontend.memberdetails', $data);
    }

    public function career()
    {
        $data['jobs'] = Job::where('status', '=', 1)->inRandomOrder()->simplePaginate(3);
        return view('frontend.career', $data);
    }

    public function jobapplication($id)
    {
        $data['jobs'] = Job::where('id', '=', $id)->first();
        return view('frontend.jobapplication', $data);
    }

    public function scholarshipapplication($id)
    {
        $data['scholarship'] = Scholarship::where('id', '=', $id)->first();
        return view('frontend.scholarshipform', $data);
    }

    public function election()
    {
        $data['election'] = VoteCandidate::where('status', '=', 1)->get();
        $data['today'] = now();
        $data['votedate'] = Votedate::where('status', 1)->latest('created_at')->get();
        return view('frontend.election', $data);
    }

    public function dues()
    {
        return view('frontend.dues');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function products()
    {
        $data['products'] = Product::where('status', '=', 1)->get();
        return view('frontend.product', $data);
    }
}
