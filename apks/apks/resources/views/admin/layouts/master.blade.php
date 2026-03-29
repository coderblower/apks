<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon_io/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon_io/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('admin/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('admin/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/phoenix.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('admin/assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
   
    <link rel="stylesheet" type="text/css" 
       href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('admin/richtexteditor/rte_theme_default.css') }}" />


    
    <style>
      body {
        opacity: 0;
      }
    </style>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">
        <nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column" id="navbarVerticalNav">

                <li class="nav-item">
                  <a class="nav-link {{ (request()->is('admin-panel')) ? 'active': '' }}" href="{{ route('admin.panel') }}">
                    <div class="d-flex align-items-center">
                      <span class="nav-link-icon">
                        <span data-feather=""></span>
                      </span>
                      <span class="nav-link-text">Dashbboard</span>
                    </div>
                  </a>
                </li>
               
                {{-- Home links --}}
                <a class="nav-link dropdown-indicator" href="#errors" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="errors">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather=""></span></span><span class="nav-link-text">Home Page Management</span>
                    </div>
                  </a>
                  <ul class="nav collapse parent {{ (request()->is('admin-panel/banner-slider') || request()->is('admin-panel/banner-slider/create') ? 'show':'') }}" id="errors">
                    <li class="nav-item ">
                      <a class="nav-link {{ (request()->is('admin-panel/banner-slider') ? 'active':'') }}" href="{{ route('admin.banner-slider.index') }}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Banner Slider</span></div>
                      </a>
                    </li>
                   
                    <li class="nav-item ">
                      <a class="nav-link {{ (request()->is('admin-panel/banner-slider/create') ? 'active':'') }}" href="{{ route('admin.banner-slider.create') }}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Add New Slider</span></div>
                      </a>
                    </li>
                   
                  </ul>
                   
                 </li>
                 {{-- End Home Links --}}
                 {{-- Home links --}}
                <a class="nav-link dropdown-indicator" href="#blog" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="blog">
                  <div class="d-flex align-items-center">
                    <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather=""></span></span><span class="nav-link-text">Blog Management</span>
                  </div>
                </a>
                <ul class="nav collapse parent {{ (request()->is('admin-panel/blog') || request()->is('admin-panel/blog/create') ? 'show':'') }}" id="blog">
                  <li class="nav-item ">
                    <a class="nav-link {{ (request()->is('admin-panel/blog') ? 'active':'') }}" href="{{ route('admin.blog.index') }}" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">All Blogs</span></div>
                    </a>
                  </li>
                 
                  <li class="nav-item ">
                    <a class="nav-link {{ (request()->is('admin-panel/blog/create') ? 'active':'') }}" href="{{ route('admin.blog.create') }}" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Publish a blog</span></div>
                    </a>
                  </li>
                 
                </ul>
                 
               </li>
               {{-- End Home Links --}}
                 {{-- Team Lonks --}}
                 <a class="nav-link dropdown-indicator" href="#team" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="team">
                  <div class="d-flex align-items-center">
                    <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather=""></span></span><span class="nav-link-text">Team Management</span>
                  </div>
                </a>
                <ul class="nav collapse parent {{ (request()->is('admin-panel/team/all') || request()->is('admin-panel/team/create') ? 'show':'') }}" id="team">
                  <li class="nav-item ">
                    <a class="nav-link {{ (request()->is('admin-panel/team/all') ? 'active':'') }}" href="{{ route('admin.team.index') }}" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Team Members</span></div>
                    </a>
                  </li>
                 
                  <li class="nav-item ">
                    <a class="nav-link {{ (request()->is('admin-panel/team/create') ? 'active':'') }}" href="{{ route('admin.team.create') }}" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Add New Member</span></div>
                    </a>
                  </li>
                 
                </ul>
                 
               </li>
               {{-- Team Links --}}
                {{-- Activity Lonks --}}
                <a class="nav-link dropdown-indicator" href="#activity" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="activity">
                  <div class="d-flex align-items-center">
                    <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather=""></span></span><span class="nav-link-text">Activity</span>
                  </div>
                </a>
                <ul class="nav collapse parent {{ (request()->is('admin-panel/activity/programme') || request()->is('admin-panel/activity/programme/create') || request()->is('admin-panel/activity/project/create') || request()->is('admin-panel/activity/project') || request()->is('admin-panel/activity/project/category') || request()->is('admin-panel/activity/event/create') || request()->is('admin-panel/activity/event') ? 'show':'') }}" id="activity">
                  <li class="nav-item ">
                    <a class="nav-link {{ (request()->is('admin-panel/activity/programme') ? 'active':'') }}" href="{{ route('admin.programme.index') }}" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Programme</span></div>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link {{ (request()->is('admin-panel/activity/project') ? 'active':'') }}" href="{{ route('admin.project.index') }}" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Project</span></div>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link {{ (request()->is('admin-panel/activity/project/category') ? 'active':'') }}" href="{{ route('admin.project.category.index') }}" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Project Categories</span></div>
                    </a>
                  </li>

                  <li class="nav-item ">
                    <a class="nav-link {{ (request()->is('admin-panel/activity/event') ? 'active':'') }}" href="{{ route('admin.event.index') }}" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Event</span></div>
                    </a>
                  </li>
                 
                </ul>
                 
               </li>
               {{-- activity Links --}}
            {{-- Gallery --}}
            <a class="nav-link dropdown-indicator" href="#gallery" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="gallery">
              <div class="d-flex align-items-center">
                <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather=""></span></span><span class="nav-link-text">Gallery</span>
              </div>
            </a>
            <ul class="nav collapse parent {{ (request()->is('admin-panel/gallery/photo') || request()->is('admin-panel/gallery/video') || request()->is('admin-panel/gallery/news')  ? 'show':'') }}" id="gallery">
              <li class="nav-item ">
                <a class="nav-link {{ (request()->is('admin-panel/gallery/photo') ? 'active':'') }}" href="{{ route('admin.gallery.photo') }}" data-bs-toggle="" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text">Photo</span></div>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link {{ (request()->is('admin-panel/gallery/video') ? 'active':'') }}" href="{{ route('admin.gallery.video') }}" data-bs-toggle="" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text">Video</span></div>
                </a>
              </li>

              <li class="nav-item ">
                <a class="nav-link {{ (request()->is('admin-panel/gallery/news') ? 'active':'') }}" href="{{ route('admin.news.index') }}" data-bs-toggle="" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text">News</span></div>
                </a>
              </li>
             
            </ul>
             
           </li>
            {{-- Gallery --}}

            {{-- Report --}}
            <a class="nav-link dropdown-indicator" href="#report" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="report">
              <div class="d-flex align-items-center">
                <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather=""></span></span><span class="nav-link-text">Reports</span>
              </div>
            </a>
            <ul class="nav collapse parent {{ (request()->is('admin-panel/report/catgeory') || request()->is('admin-panel/reports') ? 'show':'') }}" id="report">
              <li class="nav-item ">
                <a class="nav-link {{ (request()->is('admin-panel/report/catgeory') ? 'active':'') }}" href="{{ route('admin.report.cat') }}" data-bs-toggle="" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text">Categories</span></div>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link {{ (request()->is('admin-panel/reports') ? 'active':'') }}" href="{{ route('admin.report.index') }}" data-bs-toggle="" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text">Reports</span></div>
                </a>
              </li>
             
            </ul>
             
           </li>
            {{-- report --}}
            {{-- Notice --}}
            <a class="nav-link dropdown-indicator" href="#notice" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="notice">
              <div class="d-flex align-items-center">
                <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather=""></span></span><span class="nav-link-text">Notices</span>
              </div>
            </a>
            <ul class="nav collapse parent {{ (request()->is('admin-panel/notice/catgeory') || request()->is('admin-panel/notice') ? 'show':'') }}" id="notice">
              <li class="nav-item ">
                <a class="nav-link {{ (request()->is('admin-panel/notice/catgeory') ? 'active':'') }}" href="{{ route('admin.notice.cat') }}" data-bs-toggle="" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text">Categories</span></div>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link {{ (request()->is('admin-panel/notice') ? 'active':'') }}" href="{{ route('admin.notice.index') }}" data-bs-toggle="" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text">Notices</span></div>
                </a>
              </li>
             
            </ul>
             
           </li>
            {{-- Notice --}}
                 <li class="nav-item">
                  <a class="nav-link {{ (request()->is('admin-panel/about-manage')) ? 'active': '' }}" href="{{ route('admin.about') }}" role="button" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather=""></span></span><span class="nav-link-text">About Page Management</span></div>
                    </a>
                  </li>
                 <li class="nav-item">
                  <a class="nav-link {{ (request()->is('admin-panel/mv-manage')) ? 'active': '' }}" href="{{ route('admin.mv') }}" role="button" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="user"></span></span><span class="nav-link-text">Mission Vision Management</span></div>
                    </a>
                  </li>
                 <li class="nav-item">
                  <a class="nav-link {{ (request()->is('admin-panel/summery-manage')) ? 'active': '' }}" href="{{ route('admin.sm') }}" role="button" data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="user"></span></span><span class="nav-link-text">Organization Summary Management</span></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin-panel/donation/package')) ? 'active': '' }}" href="{{ route('admin.package.index') }}">
                      <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                          <span data-feather="cast"></span>
                        </span>
                        <span class="nav-link-text">Donation Packages</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin-panel/recruitement')) ? 'active': '' }}" href="{{ route('admin.recruitement') }}">
                      <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                          <span data-feather=""></span>
                        </span>
                        <span class="nav-link-text">Career Recruitement</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin-panel/career/get/resume/request')) ? 'active': '' }}" href="{{ route('admin.resume.career.request') }}">
                      <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                          <span data-feather=""></span>
                        </span>
                        <span class="nav-link-text">Resume Request</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin-panel/volunteer/request')) ? 'active': '' }}" href="{{ route('admin.v.show') }}">
                      <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                          <span data-feather=""></span>
                        </span>
                        <span class="nav-link-text">Volunteer Request</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin-panel/counter/section')) ? 'active': '' }}" href="{{ route('admin.counter') }}">
                      <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                          <span data-feather=""></span>
                        </span>
                        <span class="nav-link-text">Counter Section</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin-panel/partner/brand')) ? 'active': '' }}" href="{{ route('admin.partner') }}">
                      <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                          <span data-feather=""></span>
                        </span>
                        <span class="nav-link-text">Partner Brand</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin-panel/newsletter-email/collection')) ? 'active': '' }}" href="{{ route('admin.newsletter') }}">
                      <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                          <span data-feather=""></span>
                        </span>
                        <span class="nav-link-text">Newsletter Emails</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin-panel/contact/message')) ? 'active': '' }}" href="{{ route('admin.contact.sms') }}">
                      <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                          <span data-feather=""></span>
                        </span>
                        <span class="nav-link-text">Contact Message</span>
                      </div>
                    </a>
                  </li>
              </ul>
            </div>
            <div class="navbar-vertical-footer"><a class="btn btn-link border-0 fw-semi-bold d-flex ps-0" href="{{ route('admin.setting') }}"><span class="navbar-vertical-footer-icon"></span><span>Settings</span></a></div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-top navbar-expand">
          <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> <a class="navbar-brand me-1 me-sm-3" href="{{ route('admin.panel') }}">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="{{asset('assets/images/logo/logo.png') }}" alt="phoenix" width="32">
                  <p class="logo-text ms-2 d-none d-sm-block">{{ config('app.name'); }}</p>
                </div>
              </div>
            </a></div>
          <div class="collapse navbar-collapse">
            <div class="search-box d-none d-lg-block">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control-sm search-input search min-h-auto" type="search" placeholder="Search..." aria-label="Search"> <span class="fas fa-search search-box-icon"></span></form>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
              <li class="nav-item dropdown"><a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="bell" style="height:20px;width:20px;"></span></a></li>
              <li class="nav-item dropdown"><a class="nav-link notification-indicator notification-indicator-primary" id="navbarDropdownSettings" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="settings" style="height:20px;width:20px;"></span></a></li>
              
              <li class="nav-item dropdown"><a class="nav-link lh-1 px-0 ms-5" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-l"><img class="rounded-circle" src="{{ asset('admin/assets/img/team/57.png') }}" alt=""></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                  <div class="card bg-white position-relative border-0">
                    <div class="card-body p-0 overflow-auto scrollbar" style="height: 18rem;">
                      <div class="text-center pt-4 pb-3">
                        <div class="avatar avatar-xl"><img class="rounded-circle" src="{{ asset('admin/assets/img/team/57.png') }}" alt=""></div>
                        <h6 class="mt-2">{{ Auth::user()->name }}</h6>
                      </div>
                     
                      <ul class="nav d-flex flex-column mb-2 pb-1">
                        <li class="nav-item"><a class="nav-link px-3" href="{{ route('admin.profile') }}"><span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                      </ul>
                    </div>
                    <div class="card-footer p-0 border-top">
    
                      <div class="px-3 py-3">
                       
                          <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                     <span class="me-2" data-feather="log-out"></span> Sign Out
                        {{-- {{ __('Logout') }} --}}
                      </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        @yield('content')
    
    <footer class="footer">
        <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-900">Thank you for creating with phoenix <span class="d-none d-sm-inline-block">|</span><br class="d-sm-none">{{ date('Y') }} &copy; <a href="https://webdevifti.com">webdevifti</a></p>
          </div>
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-600">v1.0.0</p>
          </div>
        </div>
      </footer>
    </div>
</main>
<script src="{{ asset('admin/assets/js/phoenix.js') }}"></script>
<script src="{{ asset('admin/assets/js/ecommerce-dashboard.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" src="{{ asset('admin/richtexteditor/rte.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/richtexteditor/plugins/all_plugins.js')}}"></script>
@yield('footer_script')
</body>

</html>
