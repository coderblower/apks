@extends('admin.layouts.master')
@section('title','Counter Management')
@section('content')
<div class="content pt-5">
    <div class="mx-n6 bg-white px-6 pt-7 border-y border-300">
        <div class="row">
            <h3>Counter  Management</h3>
            <div class="col-md-4">
                @if(!isset($getCounter))
                <form action="{{ route('admin.counter.store') }}" method="POST">
                    @csrf
                    <div class="col-md-12 position-relative">
                        <label class="form-label" for="validationTooltip01"> Title </label> 
                        <input type="text" placeholder="title" name="title" class="form-control" required>

                        <label class="form-label" for="validationTooltip01"> Counter Number </label> 
                        <input type="text" placeholder="Count" name="number" class="form-control" required>
                        <button type="submit" class="btn btn-success mt-5">Add</button>
                    </div>
                </form>
                @else 
                <form action="{{ route('admin.counter.update', $getCounter->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12 position-relative">
                        <label class="form-label" for="validationTooltip01"> Title </label> 
                        <input type="text" placeholder="title" name="title" class="form-control" value="{{ $getCounter->title }}" required>

                        <label class="form-label" for="validationTooltip01"> Counter Number </label> 
                        <input type="text" placeholder="Count" name="number" class="form-control"  value="{{ $getCounter->counter_number }}" required>
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
                  
                    <th class="sort border-top white-space-nowrap align-middle" scope="col" style="min-width:100px;" data-sort="product">Title</th>
                   
                    <th class="sort border-top white-space-nowrap align-middle" scope="col" style="min-width:100px;" data-sort="product">Numbers</th>
                    <th class="sort border-top text-end pe-0 align-middle" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                  @foreach ($numbers as $item)
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle product white-space-nowrap" style="min-width:100px;">
                      <h6 class="fw-semi-bold mb-0">{{ $item->title }}</h6>
                    </td>
                   
                    <td class="align-middle product white-space-nowrap" style="min-width:100px;">
                      <h6 class="fw-semi-bold mb-0">{{ $item->counter_number }}</h6>
                    </td>
                   
                    <td class="align-middle white-space-nowrap text-end pe-0">
                     
                      <div class="font-sans-serif btn-reveal-trigger">
                        <button class="btn btn-link fs--2 text-600 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2">
                          <a class="dropdown-item" href="{{ route('admin.counter.edit', $item->id) }}">Edit</a>
                         
                            <a class="dropdown-item text-danger" onclick="return confirm('Are You Sure? This Action Can Not be Undone.')" href="{{ route('admin.counter.delete',$item->id) }}">Delete </a>
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