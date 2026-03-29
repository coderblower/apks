@extends('admin.layouts.master')
@section('title','Volunteer Management')
@section('content')
<div class="content pt-5">
    <div class="mx-n6 bg-white px-6 pt-7 border-y border-300">
        <div class="row">
          <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
            <div class="row align-items-end justify-content-between pb-5 g-3">
              <div class="col-auto">
                <h3>Volunteer Request Management</h3>
                <p class="text-700 lh-sm mb-0">The New What you want to share with the world</p>
              </div>
              <div class="col-12 col-md-auto">
                <div class="row g-2">
                  <div class="col-auto flex-1">
                    <div class="search-box">
                      <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control-sm search-input search" type="search" placeholder="Search" aria-label="Search"> <span class="fas fa-search search-box-icon"></span></form>
                    </div>
                  </div>
                  <div class="col-auto">
                   
                </div>
                </div>
              </div>
            </div>
            <div class="table-responsive mx-n1 px-1 scrollbar">
              <table class="table fs--2 mb-0 overflow-hidden">
                <thead>
                  <tr>
                  
                    <th class="sort border-top white-space-nowrap align-middle" scope="col" style="min-width:200px;" data-sort="product"> FullName</th>
                    <th class="sort border-top white-space-nowrap align-middle" scope="col" style="min-width:200px;" data-sort="product"> Email</th>
                    <th class="sort border-top white-space-nowrap align-middle" scope="col" style="min-width:200px;" data-sort="product"> Phone</th>
                    
                    <th class="sort border-top white-space-nowrap align-middle" scope="col" style="min-width:200px;" data-sort="product"> Message</th>
                    
                    <th class="sort border-top text-end align-middle" scope="col" data-sort="time">Sended On</th>
                    <th class="sort border-top text-end pe-0 align-middle" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                  @foreach ($getVolonteers as $item)
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                   
                    
                    <td class="align-middle product white-space-nowrap" style="min-width:200px;">
                      <h6 class="fw-semi-bold mb-0">{{ $item->fullname }}</h6>
                    </td>
                    
                    <td class="align-middle product white-space-nowrap" style="min-width:200px;">
                      <h6 class="fw-semi-bold mb-0">{{ $item->email }}</h6>
                    </td>
                    <td class="align-middle product white-space-nowrap" style="min-width:200px;">
                      <h6 class="fw-semi-bold mb-0">{{ $item->phone }}</h6>
                    </td>
                    <td class="align-middle product white-space-nowrap" style="min-width:200px;">
                      <h6 class="fw-semi-bold mb-0">{{ $item->message }}</h6>
                    </td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">{{ $item->created_at->diffForHumans() }}</h6>
                      </div>
                    </td>
                    <td class="align-middle product white-space-nowrap" style="min-width:200px;">
                        <a class="btn btn-info btn-sm" href="{{ asset('apks/public/uploads/cv/'.$item->cv) }}">Show CV</a>
                      </td>
                   
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="row align-items-center py-2">
              <div class="pagination d-none"></div>
              <div class="col d-flex fs--1">
                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less</a>
              </div>
              <div class="col-auto d-flex"><button class="btn btn-link px-1 me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left me-2"></span>Previous</button><button class="btn btn-link px-1 ms-1" type="button" title="Next" data-list-pagination="next">Next<span class="fas fa-chevron-right ms-2"></span></button></div>
            </div>
          </div>
        </div>
      </div>

  @endsection
  @section('footer_script')
@if(Session::has('success'))
<script>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('success') }}");
  </script>
  @endif

  @if(Session::has('error'))
  <script>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
    </script>
  @endif
@endsection