<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use App\Models\BannerSlider;
use App\Models\Blog;
use App\Models\Career;
use App\Models\CounterSection;
use App\Models\DonationPackage;
use App\Models\NewsletterEmail;
use App\Models\Notice;
use App\Models\PartnerBrand;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Report;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $sliders = BannerSlider::where('status', 1)->get();
        $aboutData = AboutPage::first();
        $blogData = Blog::where('status', 1)->orderBy('created_at','DESC')->limit(3)->get();
        $get_advisor = Team::where('member_board_access','advisor')->latest('created_at',4)->get();
        $client_brands = PartnerBrand::where('status',1)->get();
        $getCounter = CounterSection::limit(4)->get();
        $homeProjectCategories = ProjectCategory::where('status', 1)
            ->whereHas('projects', function ($query) {
                $query->where('status', 1);
            })
            ->withCount(['projects' => function ($query) {
                $query->where('status', 1);
            }])
            ->orderBy('category_name')
            ->limit(6)
            ->get();
        $homeProjects = Project::with('category')
            ->where('status', 1)
            ->orderBy('created_at', 'DESC')
            ->limit(4)
            ->get();
        return view('index', compact('sliders','aboutData','get_advisor','blogData','client_brands','getCounter','homeProjectCategories','homeProjects'));
    }

    public function donation(){
        $getPackages = DonationPackage::where('status',1)->get();
        return view('donation', compact('getPackages'));
    }

    public function career(){
        $d = Career::first();
        if($d == null){
            $data = [];
        }else{
            $data = $d;
        }
        return view('career', compact('data'));
    }

    public function resumeFromCareer(Request $request){
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg,pdf,docx'
        ]);
        $extension = $request->image->getClientOriginalExtension();
        $imageName = 'resume_collect_'.date('ydms').'.'.$extension;
        
        $add = Career::create([
            'resume_collect' => $imageName,
        ]);
        if($add){
            $request->image->move(public_path('uploads/resume/'), $imageName);
            return back()->with('success', 'Your file hass been uploaded');
        }else{
            return back()->with('error', 'Something wrong!Please try Again');
        }
    }

    public function report($cat){
        $catname = $cat;
        $getSlugByReport = Report::where('report_category', $cat)->where('status', 1)->orderBy('id', 'DESC')->get();
        return view('report', compact('getSlugByReport', 'catname'));
    }
    public function notice($cat){
        $catname = $cat;
        $getSlugByNotice = Notice::where('notice_category', $cat)->where('status', 1)->orderBy('id', 'DESC')->get();
        return view('notice', compact('getSlugByNotice', 'catname'));
    }

    public function newsletter(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);
        $a = NewsletterEmail::create([
            'email' => $request->email,
        ]);
        if($a){
            return back()->with('success', 'We Recieved Your Email');
        }else{
            return back()->with('error', 'Something happened wrong!');
        }
    }
}
