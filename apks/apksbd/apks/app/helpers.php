<?php

use App\Models\AboutPage;
use App\Models\NoticeCategory;
use App\Models\ReportCategory;
use App\Models\SiteInfo;

function getData(){
    $a = AboutPage::select('page_heading')->first();
    return $a;
}


function siteInfo(){
    $data = SiteInfo::first();
    return $data;
}
function GetReportCategory(){
    $cats = ReportCategory::all();
    return $cats;
}
function GetNoticeCategory(){
    $cats = NoticeCategory::all();
    return $cats;
}