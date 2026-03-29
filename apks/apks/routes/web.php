<?php

use App\Http\Controllers\admin\AdminAboutController;
use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\admin\AdminCareerController;
use App\Http\Controllers\admin\AdminContactController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminDonationPackageController;
use App\Http\Controllers\admin\AdminEventsController;
use App\Http\Controllers\admin\AdminMissionVissionController;
use App\Http\Controllers\admin\AdminNewsController;
use App\Http\Controllers\admin\AdminNewsletter;
use App\Http\Controllers\admin\AdminNoticeController;
use App\Http\Controllers\admin\AdminPhotoGalleryController;
use App\Http\Controllers\admin\AdminProgramController;
use App\Http\Controllers\admin\AdminReportController;
use App\Http\Controllers\admin\AdminSummeryController;
use App\Http\Controllers\admin\AdminTeamController;
use App\Http\Controllers\admin\AdminVideoController;
use App\Http\Controllers\admin\BannerSliderController;
use App\Http\Controllers\admin\CounterSectionController;
use App\Http\Controllers\admin\PartnerBrandController;
use App\Http\Controllers\admin\ProjectController as AdminProjectController;
use App\Http\Controllers\admin\ProjectCategoryController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\site\AboutController;
use App\Http\Controllers\site\BlogController;
use App\Http\Controllers\site\ContactController;
use App\Http\Controllers\site\EventsController;
use App\Http\Controllers\site\HomeController;
use App\Http\Controllers\site\MissionVissionController;
use App\Http\Controllers\site\NewsController;
use App\Http\Controllers\site\PhotoGalleryController;
use App\Http\Controllers\site\ProgramController;
use App\Http\Controllers\site\ProjectController;
use App\Http\Controllers\site\SummeryController;
use App\Http\Controllers\site\TeamController;
use App\Http\Controllers\site\VideoGalleryController;
use App\Http\Controllers\SiteInfoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// For Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');
// for about page
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
// for mission and vision page
Route::get('/mission-vission', [MissionVissionController::class, 'index'])->name('mv');
// for organization summary page
Route::get('/organization-summery', [SummeryController::class, 'index'])->name('summery');
// Board member page
Route::get('/team/advisory-board', [TeamController::class, 'advisoryMember'])->name('team.advisory');
Route::get('/team/executive-board', [TeamController::class, 'executiveMember'])->name('team.executive');
Route::get('/team/official-board', [TeamController::class, 'officalMember'])->name('team.official');

// activity -- progeramme
Route::get('/activity/programme', [ProgramController::class, 'index'])->name('activity.programme');
Route::get('/activity/programme/{slug}', [ProgramController::class, 'show'])->name('activity.programme.show');

// activity -- projects
Route::get('/activity/project', [ProjectController::class, 'index'])->name('activity.project');
Route::get('/activity/project/category/{slug}', [ProjectController::class, 'category'])->name('activity.project.category');
Route::get('/activity/project/{slug}', [ProjectController::class, 'show'])->name('activity.project.show');
// activity -- events
Route::get('/activity/event', [EventsController::class, 'index'])->name('activity.event');
Route::get('/activity/event/{slug}', [EventsController::class, 'show'])->name('activity.event.show');
//blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/donation', [HomeController::class,'donation'])->name('donation');

Route::get('/career',[HomeController::class, 'career'])->name('career');
Route::get('/gallery/news', [NewsController::class, 'index'])->name('news');
Route::get('/gallery/photo', [PhotoGalleryController::class, 'index'])->name('gallery');
Route::get('/gallery/video', [VideoGalleryController::class, 'index'])->name('video');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');

Route::post('/career/resume/uploads/', [HomeController::class, 'resumeFromCareer'])->name('resume.upload');
Route::post('/career/get/volunteer/request', [AdminCareerController::class, 'volunteerRequest'])->name('resume.volunteer.request');

Route::get('/report/{cat}', [HomeController::class, 'report'])->name('report');
Route::get('/notice/{cat}', [HomeController::class, 'notice'])->name('notice');
Route::post('/newsletter/email', [HomeController::class, 'newsletter'])->name('newsletter.email');

Route::post('/contact/send/message', [ContactController::class, 'contactMessage'])->name('contact.send.message');
Auth::routes();

// admin panel routs
Route::get('/admin-panel', [AdminController::class, 'index'])->name('admin.panel');

// grouping routes for the admin panel
Route::group(['prefix' => 'admin-panel', 'as' => 'admin.'], function(){

    // admin middleware
    Route::group(['middleware' => ['adminMiddleware']], function(){
       Route::resource('/banner-slider', BannerSliderController::class);
       Route::get('/banner-slider/status/{id}', [BannerSliderController::class, 'changeStatus'])->name('banner.status');
       Route::get('/banner-slider/delete/{id}', [BannerSliderController::class, 'destroy'])->name('banner.delete');

        //   About Page Controllers
        Route::get('/about-manage', [AdminAboutController::class, 'index'])->name('about');
        Route::put('/about-manage/create/{id}', [AdminAboutController::class, 'store'])->name('about.store');
        //   Mission Vision Page Controllers
        Route::get('/mv-manage', [AdminMissionVissionController::class, 'index'])->name('mv');
        Route::put('/mv/create/{id}', [AdminMissionVissionController::class, 'store'])->name('mv.store');
        //   Summery Page Controllers
        Route::get('/summery-manage', [AdminSummeryController::class, 'index'])->name('sm');
        Route::put('/summery/create/{id}', [AdminSummeryController::class, 'store'])->name('sm.store');

        // Team Member 
        Route::get('/team/all', [AdminTeamController::class, 'index'])->name('team.index');
        Route::get('/team/create', [AdminTeamController::class, 'create'])->name('team.create');
        Route::post('/team/create', [AdminTeamController::class, 'store'])->name('team.store');
        Route::get('/team/{id}/edit', [AdminTeamController::class, 'edit'])->name('team.edit');
        Route::put('/team/{id}/edit', [AdminTeamController::class, 'update'])->name('team.update');
        Route::get('/team/delete/{id}', [AdminTeamController::class, 'destroy'])->name('team.delete');
        Route::get('/team/status/{id}', [AdminTeamController::class, 'statuChange'])->name('team.status');


        // Programm
        Route::resource('/activity/programme', AdminProgramController::class);
        Route::get('/activity/programme/status/{id}', [AdminProgramController::class, 'statuChange'])->name('programme.status');
        Route::get('/activity/programme/delete/{id}', [AdminProgramController::class, 'destroy'])->name('programme.delete');
        
        Route::get('/activity/project/category', [ProjectCategoryController::class, 'index'])->name('project.category.index');
        Route::post('/activity/project/category', [ProjectCategoryController::class, 'store'])->name('project.category.store');
        Route::get('/activity/project/category/delete/{id}', [ProjectCategoryController::class, 'delete'])->name('project.category.delete');
        // Projects
        Route::resource('/activity/project', AdminProjectController::class);
        Route::get('/activity/project/status/{id}', [AdminProjectController::class, 'statuChange'])->name('project.status');
        Route::get('/activity/project/delete/{id}', [AdminProjectController::class, 'destroy'])->name('project.delete');

        // Projects
        Route::resource('/activity/event', AdminEventsController::class);
        Route::get('/activity/event/status/{id}', [AdminEventsController::class, 'statuChange'])->name('event.status');
        Route::get('/activity/event/delete/{id}', [AdminEventsController::class, 'destroy'])->name('event.delete');

        //Blog
        Route::resource('/blog', AdminBlogController::class);
        Route::get('/blog/status/{id}', [AdminBlogController::class, 'statuChange'])->name('blog.status');
        Route::get('/blog/delete/{id}', [AdminBlogController::class, 'destroy'])->name('blog.delete');

        //Donation Packages
        Route::resource('/donation/package', AdminDonationPackageController::class);
        Route::get('/donation/status/{id}', [AdminDonationPackageController::class, 'statuChange'])->name('donation.status');
        Route::get('/donation/delete/{id}', [AdminDonationPackageController::class, 'destroy'])->name('donation.delete');

        Route::get('/recruitement/',[AdminCareerController::class, 'index'])->name('recruitement');
        Route::get('/recruitement/delete/{id}',[AdminCareerController::class, 'destroy'])->name('recruit.delete');
        Route::post('/recruitement/store/{id}',[AdminCareerController::class, 'store'])->name('recruit.store');

        // Photo Gallery Routes
        Route::get('/gallery/photo', [AdminPhotoGalleryController::class, 'index'])->name('gallery.photo');
        Route::post('/gallery/photo/create', [AdminPhotoGalleryController::class, 'store'])->name('gallery.photo.store');
        Route::get('/gallery/photo/status/{id}', [AdminPhotoGalleryController::class, 'statusChange'])->name('gallery.photo.status');
        Route::get('/gallery/photo/delete/{id}', [AdminPhotoGalleryController::class, 'delete'])->name('gallery.photo.delete');

        // Video Gallery Routes
        Route::get('/gallery/video', [AdminVideoController::class, 'index'])->name('gallery.video');
        Route::post('/gallery/video/create', [AdminVideoController::class, 'store'])->name('gallery.video.store');
        Route::get('/gallery/video/status/{id}', [AdminVideoController::class, 'statusChange'])->name('gallery.video.status');
        Route::get('/gallery/video/delete/{id}', [AdminVideoController::class, 'delete'])->name('gallery.video.delete');

        // Video Gallery Routes
        Route::resource('/gallery/news', AdminNewsController::class);
        Route::get('/gallery/news/status/{id}', [AdminNewsController::class, 'statusChange'])->name('gallery.news.status');
        Route::get('/gallery/news/delete/{id}', [AdminNewsController::class, 'delete'])->name('gallery.news.delete');

        // Partner Brand

        Route::get('/partner/brand', [PartnerBrandController::class, 'index'])->name('partner');
        Route::post('/partner/brand/create', [PartnerBrandController::class, 'store'])->name('partner.store');
        Route::get('/partner/brand/status/{id}', [PartnerBrandController::class, 'statusChange'])->name('partner.status');
        Route::get('/partner/brand/delete/{id}', [PartnerBrandController::class, 'delete'])->name('partner.delete');


        // Site Setting
        Route::get('/setting', [SiteInfoController::class, 'index'])->name('setting');
        Route::put('/setting/update/{id}', [SiteInfoController::class, 'store'])->name('setting.store');


        Route::get('/career/get/resume/request', [AdminCareerController::class, 'resumeRequest'])->name('resume.career.request');

        
        Route::get('/volunteer/request', [AdminCareerController::class, 'volunteerShow'])->name('v.show');

        Route::get('/counter/section',[CounterSectionController::class, 'index'])->name('counter');
        Route::post('/counter/section/create',[CounterSectionController::class, 'store'])->name('counter.store');
        Route::put('/counter/section/update/{id}',[CounterSectionController::class, 'update'])->name('counter.update');
        Route::get('/counter/section/delete/{id}',[CounterSectionController::class, 'delete'])->name('counter.delete');
        Route::get('/counter/section/edit/{id}',[CounterSectionController::class, 'edit'])->name('counter.edit');

        Route::get('/profile', [UserController::class, 'profile'])->name('profile');
        Route::put('/profile/update/{id}', [UserController::class, 'profileUpdate'])->name('profile.update');

        // Admin Report Category
        Route::get('/reports/',[AdminReportController::class, 'index'])->name('report.index');
        Route::post('/reports/store',[AdminReportController::class, 'store'])->name('report.store');
        Route::get('/reports/delete/{id}',[AdminReportController::class, 'delete'])->name('report.delete');
        Route::get('/reports/status/{id}',[AdminReportController::class, 'status'])->name('report.status');
        Route::get('/report/catgeory',[AdminReportController::class, 'categoryPage'])->name('report.cat');
        Route::post('/report/catgeory/store',[AdminReportController::class, 'categoryStore'])->name('report.cat.store');
        Route::get('/report/catgeory/delete/{id}',[AdminReportController::class, 'categoryDelete'])->name('report.cat.delete');

        // Admin NOtice Category
        Route::get('/notice/',[AdminNoticeController::class, 'index'])->name('notice.index');
        Route::post('/notice/store',[AdminNoticeController::class, 'store'])->name('notice.store');
        Route::get('/notice/delete/{id}',[AdminNoticeController::class, 'delete'])->name('notice.delete');
        Route::get('/notice/status/{id}',[AdminNoticeController::class, 'status'])->name('notice.status');
        Route::get('/notice/catgeory',[AdminNoticeController::class, 'categoryPage'])->name('notice.cat');
        Route::post('/notice/catgeory/store',[AdminNoticeController::class, 'categoryStore'])->name('notice.cat.store');
        Route::get('/notice/catgeory/delete/{id}',[AdminNoticeController::class, 'categoryDelete'])->name('notice.cat.delete');


        Route::get('/newsletter-email/collection', [AdminNewsletter::class,'index'])->name('newsletter');
        Route::get('/contact/message', [AdminContactController::class,'index'])->name('contact.sms');
    });

});
