<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminForumController;
use App\Http\Controllers\Admin\AdminVoteController;
use App\Http\Controllers\User\UserPageController;
use App\Http\Controllers\User\UserPostController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/mission', [PageController::class, 'mission']);

Route::get('/president', [PageController::class, 'president']);

Route::get('/events', [PageController::class, 'event']);

Route::get('/birthday-celebrants', [PageController::class, 'birthday']);

Route::get('/galleries', [PageController::class, 'gallery']);

Route::get('/gallery/{id}{slug}', [PageController::class, 'galleryimage'])->name('galleryimage');

Route::get('/news', [PageController::class, 'blog']);

Route::get('blog-post/{slug}', [PageController::class, 'blogdetails'])->name('blogdetails');

Route::get("share-posts/{slug}", [AdminPostController::class, "sharePosts"]);

Route::post('/save-blog-comments', [PageController::class, 'saveblogcomment']);

Route::get('/market-place', [PageController::class, 'products']);

Route::get('/donate', [PageController::class, 'donate']);

Route::get('/committee', [PageController::class, 'committee']);

Route::get('/members-directory', [PageController::class, 'database'])->middleware('auth');

Route::get('/member', [PageController::class, 'searchmember'])->name('searchmember');

Route::get('/career', [PageController::class, 'career'])->name('career');

Route::get('/job-application-form/{id}', [PageController::class, 'jobapplication'])->name('jobapplicationform');

Route::post('/save-job-application', [PostController::class, 'savejobapplication']);

Route::get('/scholarship-application-form/{id}', [PageController::class, 'scholarshipapplication']);

Route::post('/save-scholarship-application', [PostController::class, 'savescholarshipapplication']);

Route::get('/election', [PageController::class, 'election'])->name('election');

Route::post('/cast-vote', [PostController::class, 'savevote'])->middleware('auth');

Route::get('/dues', [PageController::class, 'dues']);

Route::get('/contact', [PageController::class, 'contact']);

Route::post('sigin', [AuthController::class, 'signin']);

Route::get('login', [PageController::class, 'login'])->name('login');

Route::post('savelogin', [AuthController::class, 'savelogin']);

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'before' => 'admin'], function () {

    Route::get('/', [AdminPageController::class, 'dashboard'])->name('admindashboard');

    Route::get('/product', [AdminPageController::class, 'product']);

    Route::get('/add-product', [AdminPageController::class, 'addproduct']);

    Route::post('/save-product', [AdminPostController::class, 'saveproduct']);

    Route::get('delete-product/{slug}', [AdminPostController::class, 'deleteproduct'])->name('deleteproduct');

    Route::get('activae-product/{id}', [AdminPostController::class, 'activateproduct'])->name('activateproduct');

    Route::get('deactivae-product/{id}', [AdminPostController::class, 'deactivateproduct'])->name('deactivateproduct');

    Route::get('/blog', [AdminPageController::class, 'blog'])->name('blog');

    Route::get('/add-blog', [AdminPageController::class, 'addblog']);

    Route::post('save-blog', [AdminBlogController::class, 'saveblog']);

    Route::get('blog/{slug}', [AdminPageController::class, 'blogBySlug'])->name('blogview');

    Route::post('update-blog', [AdminBlogController::class, 'updateBlog']);

    Route::get('delete-blog/{slug}', [AdminBlogController::class, 'deleteblog'])->name('deleteblog');

    Route::get('/blog-category', [AdminPageController::class, 'blogcategory']);

    Route::post('/save-blog-category', [AdminBlogController::class, 'saveblogcategory']);

    Route::post('update-category/{id}', [AdminBlogController::class, 'updatecategory'])->name('updatecategory');

    Route::get('delete-category/{id}', [AdminBlogController::class, 'deletecategory'])->name('deletecategory');

    Route::get('/dues', [AdminPageController::class, 'dues']);

    Route::get('/national-voting', [AdminPageController::class, 'nationalvoting']);

    Route::post('/save-vote-category', [AdminVoteController::class, 'savevotecategory']);

    Route::post('update-vote-category/{id}', [AdminVoteController::class, 'updatevotecategory'])->name('updatevotingcategory');

    Route::post('/save-vote-candidate', [AdminVoteController::class, 'savevotecandidate']);

    Route::post('/save-vote-date', [AdminVoteController::class, 'savevotedate']);

    Route::get('delete-voting-date/{id}', [AdminVoteController::class, 'deletevotedate'])->name('deletevotedate');

    Route::get('/national-voting-candidate/{id}', [AdminPageController::class, 'nationalvotingcandidate'])->name('nationalvotingcandidate');

    Route::get('/batch-voting', [AdminPageController::class, 'batchvoting']);


    Route::post('/save-batch-vote-category', [AdminVoteController::class, 'savebatchvotecategory']);

    Route::post('update-batch-vote-category/{id}', [AdminVoteController::class, 'updatebatchvotecategory'])->name('updatebatchvotingcategory');

    Route::post('/save-batch-vote-candidate', [AdminVoteController::class, 'savebatchvotecandidate']);

    Route::get('/batch-voting-candidate/{id}', [AdminPageController::class, 'batchvotingcandidate'])->name('batchvotingcandidate');

    Route::post('/save-batch-vote-date', [AdminVoteController::class, 'savebatchvotedate']);

    Route::get('delete-batch-voting-date/{id}', [AdminVoteController::class, 'deletebatchvotedate'])->name('deletebatchvotedate');

    Route::get('/vote-result/{id}', [AdminPageController::class, 'voteresult'])->name('voteresult');

    Route::get('/event', [AdminPageController::class, 'event']);

    Route::post('/save-event', [AdminPostController::class, 'saveevent']);

    Route::get('delete-event/{id}', [AdminPostController::class, 'deleteevent'])->name('deleteevent');

    Route::get('/jobs', [AdminPageController::class, 'job'])->name('adminjobs');

    Route::post('/save-job', [AdminPostController::class, 'savejob']);

    Route::get('/add-job', [AdminPageController::class, 'addjob']);

    Route::get('edit-job/{id}', [AdminPageController::class, 'editjob'])->name('editjob');

    Route::post('update-job/{id}', [AdminPostController::class, 'updatejob'])->name('updatejob');

    Route::get('activae-job/{id}', [AdminPostController::class, 'activatejob'])->name('activatejob');

    Route::get('deactivae-job/{id}', [AdminPostController::class, 'deactivatejob'])->name('deactivatejob');

    Route::get('delete-job/{id}', [AdminPostController::class, 'deletejob'])->name('deletejob');

    Route::get('/submitted-jobs', [AdminPageController::class, 'submittedjob'])->name('adminsubmittedjobs');

    Route::get('/scholarship', [AdminPageController::class, 'scholarship']);

    Route::post('/save-scholarship', [AdminPostController::class, 'savescholarship']);

    Route::post('update-scholarship/{id}', [AdminPostController::class, 'updatescholarship'])->name('updatescholarship');

    Route::get('activae-scholarship/{id}', [AdminPostController::class, 'activatescholarship'])->name('activatescholarship');

    Route::get('deactivae-scholarship/{id}', [AdminPostController::class, 'deactivatescholarship'])->name('deactivatescholarship');

    Route::get('delete-scholarship/{id}', [AdminPostController::class, 'deletescholarship'])->name('deletescholarship');

    Route::get('/submitted-scholarship', [AdminPageController::class, 'submittedscholarship'])->name('adminsubmittedscholarship');

    Route::get('/members', [AdminPageController::class, 'member']);

    Route::get('/forum', [AdminPageController::class, 'forum']);

    Route::post('/save-forum', [AdminForumController::class, 'saveforum']);

    Route::post('update-forum/{id}', [AdminForumController::class, 'updateforum'])->name('updateforum');

    Route::get('delete-forum/{id}', [AdminForumController::class, 'deleteforum'])->name('deleteforum');

    Route::post('/save-forum-member', [AdminForumController::class, 'addmember'])->name('addforummember');

    Route::get('/forum-members/{id}', [AdminPageController::class, 'forummembers'])->name('forummembers');

    Route::get('/pending-forum-members', [AdminPageController::class, 'pendingforummembers'])->name('pendingforummembers');

    Route::get('approve-member-request/{id}', [AdminForumController::class, 'approvememberrequest'])->name('approvememberrequest');

    Route::get('delete-member/{id}', [AdminForumController::class, 'deletemember'])->name('deletemember');

    Route::get('/notice-board', [AdminPageController::class, 'noticeboard']);

    Route::post('/save-notice-board', [AdminPostController::class, 'savenoticeboard']);

    Route::post('update-notice/{id}', [AdminPostController::class, 'updatenotice'])->name('updatenotice');

    Route::get('delete-notice/{id}', [AdminPostController::class, 'deletenoticeboard'])->name('deletenotice');

    Route::get('/gallery-category', [AdminPageController::class, 'gallerycategory']);

    Route::post('/save-gallery-category', [AdminPostController::class, 'savegallerycategory']);

    Route::post('update-gallery-category/{id}', [AdminPostController::class, 'updategallerycategory'])->name('updategallerycategory');

    Route::get('delete-gallery-category/{id}', [AdminPostController::class, 'deletegallerycategory'])->name('deletegallerycategory');

    Route::get('/gallery', [AdminPageController::class, 'gallery']);

    Route::post('/save-gallery', [AdminPostController::class, 'savegallery']);

    Route::get('delete-gallery/{id}', [AdminPostController::class, 'deletegallery'])->name('deletegallery');

    Route::get('/project', [AdminPageController::class, 'project']);

    Route::post('/save-project', [AdminPostController::class, 'saveproject']);

    Route::get('delete-project/{id}', [AdminPostController::class, 'deleteproject'])->name('deleteproject');

});


Route::group(['middleware' => 'auth', 'prefix' => 'user', 'before' => 'user'], function () {

    Route::get('/dashboard', [UserPageController::class, 'dashboard'])->name('userdashboard');

    Route::get('/product', [UserPageController::class, 'product'])->name('userproduct');

    Route::get('/submit-product', [UserPageController::class, 'addproduct'])->name('useraddproduct');

    Route::post('/save-product', [UserPostController::class, 'saveproduct']);

    Route::get('delete-product/{id}', [UserPostController::class, 'deleteproduct'])->name('deleteuserproduct');

    Route::get('/job', [UserPageController::class, 'job'])->name('userjob');

    Route::get('/submit-job-opening', [UserPageController::class, 'addjob'])->name('useraddjob');

    Route::post('/save-job', [UserPostController::class, 'savejob']);

    Route::get('edit-job/{id}', [UserPageController::class, 'editjob'])->name('edituserjob');

    Route::post('update-job/{id}', [UserPostController::class, 'updatejob'])->name('updateuserjob');

    Route::get('delete-job/{id}', [UserPostController::class, 'deletejob'])->name('deleteuserjob');

    Route::get('/scholarship', [UserPageController::class, 'scholarship'])->name('userscholarship');

    Route::get('/submit-scholarship', [UserPageController::class, 'addscholarship'])->name('useraddscholarship');

    Route::post('/save-scholarship', [UserPostController::class, 'savescholarship']);

    Route::get('edit-scholarship/{id}', [UserPageController::class, 'editscholarship'])->name('edituserscholarship');

    Route::post('update-scholarship/{id}', [UserPostController::class, 'updatescholarship'])->name('updateuserscholarship');

    Route::get('delete-scholarship/{id}', [UserPostController::class, 'deletescholarship'])->name('deleteuserscholarship');

    Route::get('/notice-board', [UserPageController::class, 'noticeboard'])->name('usernoticeboard');

    Route::get('/forum', [UserPageController::class, 'forum'])->name('userforum');

    Route::post('/join-forum', [UserPostController::class, 'joinforum'])->name('joinforum');

    Route::get('/forum-chat/{id}', [UserPageController::class, 'forumchat'])->name('userforumchat');

    Route::post('/send-message', [UserPostController::class, 'saveforumconversation'])->name('sendmessage');

    Route::get('/profile', [UserPageController::class, 'profile'])->name('profile');

    Route::get('/edit-profile', [UserPageController::class, 'editprofile'])->name('editprofile');

    Route::post('update-profile/{id}', [AuthController::class, 'updateprofile'])->name('updateprofile');
    

});
