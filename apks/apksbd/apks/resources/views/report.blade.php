@extends('master')
@php
    $title =  $catname;
@endphp
@section('title', 'Report | '. $title)
@section('content')
 <!-- Page Breadcrumbs Start -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Reports / {{ $catname }}</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Reports / {{ $catname }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    
    <!-- Main Body Content Start -->
    <main id="body-content">
        <div class="container wide-tb-100">
            <div class="row">
                <div class="col-md-12">
                    <table id="pdf_file" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Download</th>

                            </tr>
                        </thead>
                        <tbody>
                           
                           @php
                               $sl = 0;
                           @endphp
                           @foreach ($getSlugByReport as $item)
                               
                            @php
                                $sl++;
                            @endphp
                            <tr>
                                <td>{{ $sl }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                <td class="text-center">
                                    <a href="{{ asset('apks/public/uploads/reports/'.$item->file_name) }}" class="pdf-icon" target="_blank">
                                        <i class="icofont-file-pdf"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('scripts')
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap4.min.js"></script>
<script>
    
$(document).ready(function() {
        $('#pdf_file').DataTable();
    });
</script>
@endsection