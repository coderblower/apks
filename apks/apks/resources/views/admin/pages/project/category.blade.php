@extends('admin.layouts.master')
@section('title','Project Categories')
@section('content')
<div class="content pt-5">
    <div class="row g-4">
        <div class="col-lg-5">
            <div class="mx-n6 bg-white px-6 pt-5 py-5 border-y border-300 h-100">
                <h3 class="mb-4">Create Project Category</h3>
                <form action="{{ route('admin.project.category.store') }}" method="POST">
                    @csrf
                    <div class="col-md-12 position-relative mb-3">
                        <label class="form-label" for="categoryName">Category Name</label>
                        <input class="form-control" id="categoryName" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="col-md-12 position-relative mb-3">
                        <label class="form-label" for="categoryDescription">Description</label>
                        <textarea class="form-control" id="categoryDescription" name="description" rows="5">{{ old('description') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Add Category</button>
                </form>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="mx-n6 bg-white px-6 pt-5 py-5 border-y border-300 h-100">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="mb-0">Category List</h3>
                    <a href="{{ route('admin.project.index') }}" class="btn btn-sm btn-phoenix-secondary bg-white hover-bg-100">Back To Projects</a>
                </div>
                <div class="table-responsive">
                    <table class="table fs--1 mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Projects</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td class="fw-semi-bold">{{ $category->category_name }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($category->category_description, 90) }}</td>
                                    <td>{{ $category->projects_count }}</td>
                                    <td class="text-end">
                                        <a class="text-danger" onclick="return confirm('Are You Sure? This Action Can Not be Undone.')" href="{{ route('admin.project.category.delete', $category->id) }}">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No categories found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
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

@error('name')
<script>
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
    toastr.error("{{ $message }}");
</script>
@enderror
@endsection
