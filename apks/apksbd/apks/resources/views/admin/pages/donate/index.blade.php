@extends('admin.layouts.master')
@section('title','Donation Package Management')
@section('content')
<div class="content pt-5">
    <div class="mx-n6 bg-white px-6 pt-7 border-y border-300">
        <div class="row">
            <h3>Donation Package  Management</h3>
            <div class="col-md-4">
                @if(!isset($getPackage))
                <form action="{{ route('admin.package.store') }}" method="POST">
                    @csrf
                    <div class="col-md-12 position-relative">
                        <label class="form-label" for="validationTooltip01"> Write Package </label> 
                        <textarea class="form-control" cols="30" rows="6" name="package" id="validationTooltip01" placeholder="Write Donation Packege" required=""></textarea>
                        <button type="submit" class="btn btn-success mt-5">Add</button>
                    </div>
                </form>
                @else 
                <form action="{{ route('admin.package.update', $getPackage->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12 position-relative">
                        <label class="form-label" for="validationTooltip01"> Write Package </label> 
                        <textarea class="form-control" cols="30" rows="6" name="package" id="validationTooltip01"  placeholder="Write Donation Packege" required="">{{ $getPackage->packages }}</textarea>
                        <button type="submit" class="btn btn-success mt-5">Update</button>
                    </div>
                </form>
                @endif
            </div>
            <div class="col-md-8">
          <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
            <div class="row align-items-end justify-content-between pb-5 g-3">
              <div class="col-auto">
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
                  
                    <th class="sort border-top white-space-nowrap align-middle" scope="col" style="min-width:360px;" data-sort="product">Packages</th>
                   
                  
                    <th class="sort border-top text-start ps-5 align-middle" scope="col" data-sort="status">Status</th>
                    <th class="sort border-top text-end align-middle" scope="col" data-sort="time">Posted On</th>
                    <th class="sort border-top text-end pe-0 align-middle" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                  @foreach ($packages as $item)
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                   
                  
                    <td class="align-middle product white-space-nowrap" style="min-width:360px;">
                      <h6 class="fw-semi-bold mb-0">{{ $item->packages }}</h6>
                    </td>
                    <td class="align-middle text-start ps-5 status">
                      @if($item->status == 1)
                          <span class="badge fs--1 badge-light-success">
                            Published
                          <span class="ms-2 fas fa-check"></span></span>
                          @else
                          <span class="badge fs--1 badge-light-danger">
                            Disabled
                          <span class="ms-2 fas fa-uncheck"></span></span>
                          @endif
                    </td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">{{ $item->created_at->diffForHumans() }}</h6>
                      </div>
                    </td>
                   
                    <td class="align-middle white-space-nowrap text-end pe-0">
                     
                      <div class="font-sans-serif btn-reveal-trigger">
                        <button class="btn btn-link fs--2 text-600 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2">
                          <a class="dropdown-item" href="{{ route('admin.package.edit', $item->id) }}">Edit</a>
                          <a class="dropdown-item" href="{{ route('admin.donation.status', $item->id) }}">Change status</a>
                          {{-- <a class="dropdown-item text-danger" href="{{ route('admin.team-member.destroy', $item->id) }}">Remove</a> --}}
                            <a class="dropdown-item text-danger" onclick="return confirm('Are You Sure? This Action Can Not be Undone.')" href="{{ route('admin.donation.delete',$item->id) }}">Delete </a>
                        </div>
                      </div>
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
      </div>

  @endsection
  @section('footer_script')
  @error('package')
  <script>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ $message }}");
    </script>
@enderror
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
  <script>
    var editor1 = new RichTextEditor("#inp_editor1"); 
</script>
@endsection