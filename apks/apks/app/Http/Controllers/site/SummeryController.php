<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Summery;
use Illuminate\Http\Request;

class SummeryController extends Controller
{
    //

    public function index(){
        $getSummery = Summery::first();
        $defaultContent = organizationSummaryDefaultContent();
        $storedContent = optional($getSummery)->sm_content;
        $pageTitle = optional($getSummery)->page_heading ?: 'Organizational Summary';
        $contentHtml = filled($storedContent) ? $storedContent : $defaultContent;
        $heroImage = optional($getSummery)->sm_image
            ? asset('apks/public/uploads/sm/'.$getSummery->sm_image)
            : asset('assets/images/about/summary.jpg');
        $showStructuredNavigation = ! filled($storedContent) || trim($storedContent) === trim($defaultContent);
        $sections = organizationSummarySections();

        return view('summary', compact(
            'getSummery',
            'pageTitle',
            'contentHtml',
            'heroImage',
            'sections',
            'showStructuredNavigation'
        ));
    }
}
