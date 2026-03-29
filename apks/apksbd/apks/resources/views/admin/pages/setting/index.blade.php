@extends('admin.layouts.master')
@section('title','Site Information')
@section('content')
<div class="content pt-5">
    
    <div class="mx-n6 bg-white px-6 pt-5 py-5 border-y border-300">
        <div class="row">
            <h3 class="mb-5">Site Information</h3>

            <form action="{{ route('admin.setting.store', $infos->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
               
                <div class="col-md-12 position-relative">
                    <label class="form-label"> Site Logo</label> 
                    <input type="file" class="form-control"  name="image">
                    @if($infos->site_logo)
                        <img style="height: 200px;width: 350px;object-fit:contain;margin-top: 5px" src="{{ asset('apks/public/uploads/logo/'.$infos->site_logo) }}" alt="">
                    @else 
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12 position-relative">
                            <label class="form-label" for="inp_editor1"> Site Description</label> 
                            <textarea name="description" id=""  required class="form-control" cols="30" rows="10">{{ $infos->site_description }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12 position-relative">
                            <label class="form-label" for="inp_editor1"> Site Keywords</label> 
                            <textarea name="keywords" id=""  required class="form-control" cols="30" rows="10">{{ $infos->site_keywords }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12 position-relative">
                            <label class="form-label"> Phone NUmber</label> 
                            <input type="text" placeholder="Phone Number" class="form-control" name="phone" value="{{ $infos->phone }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12 position-relative">
                            <label class="form-label"> Second Phone Number if any?</label> 
                            <input type="text" name="second_phone" placeholder="Second Phone Number (optinal)" class="form-control"  value="{{ $infos->second_phone }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12 position-relative">
                            <label class="form-label"> Email</label> 
                            <input type="email" name="email" placeholder="Email Address" class="form-control" value="{{ $infos->email }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12 position-relative">
                            <label class="form-label"> Second Email Address if any?</label> 
                            <input type="email" name="second_email" value="{{ $infos->second_email }}" placeholder="Second Email Address (optinal)" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12 position-relative">
                            <label class="form-label" > Address</label> 
                            <input type="text" value="{{ $infos->address }}" name="address" placeholder="Address" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12 position-relative">
                            <label class="form-label"> Google Map Location Share Address</label> 
                            <input type="text" value="{{ $infos->address_map }}" name="address_map" placeholder="Paste Your Google Location Share Link" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12 position-relative">
                            <label class="form-label">Facebook</label> 
                            <input type="text" name="facebook" placeholder="Paste Your Facebook  Link" value="{{ $infos->social_facebook }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12 position-relative">
                            <label class="form-label">Twitter</label> 
                            <input type="text" name="twitter" placeholder="Paste Your Twitter  Link" value="{{ $infos->social_twitter }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12 position-relative">
                            <label class="form-label">Instagram</label> 
                            <input type="text" name="instagram" placeholder="Paste Your Instagram  Link" value="{{ $infos->social_instagram }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12 position-relative">
                            <label class="form-label">Behanace</label> 
                            <input type="text" name="behance" placeholder="Paste Your Behance  Link" value="{{ $infos->social_behance }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12 position-relative">
                            <label class="form-label">Youtube</label> 
                            <input type="text" name="youtube" placeholder="Paste Your Youtube  Link" value="{{ $infos->social_youtube }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12 position-relative">
                            <label class="form-label">Opening Hours</label> 
                            <input type="text" name="opening_hrs" value="{{ $infos->opening_hrs }}" placeholder="Opening hours" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-5">Update</button>
            </form>
        </div>
    </div>

    
  @endsection
  @section('footer_script')
  @error('article')
  <script>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ $message }}");
    </script>
@enderror
@error('image')
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