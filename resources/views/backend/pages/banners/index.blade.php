@extends('backend.layout.master')

@push('backendCss')
    {{--    <meta name="csrf_token" content="{{ csrf_token() }}" />--}}

    <link href="{{asset('public/backend')}}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
          rel="stylesheet" type="text/css">
    <link href="{{asset('public/backend')}}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
          rel="stylesheet" type="text/css">

@endpush

@section('contents')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Banners</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">banners</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>





 

    @if(!$banners)
        <form method="post" action="{{route('admin.banner.store')}}" enctype="multipart/form-data">
     @else
        <form method="post" action="{{route('admin.banner.update',$banners->id)}}" enctype="multipart/form-data">
                    @method('PUT')
    @endif
                    
                    @csrf

                    <div class="mb-3">
                        <label for="banner_type" class="col-form-label">Background Image</label>
                        <input type="file" class="form-control" name="background_img" id="background_img">
                       
                        <img class="mt-2" src="{{$banners && $banners->background_img ? asset($banners->background_img) : 'https://via.placeholder.com/150' }}" alt="" id="background_img_preview" width="50" height="50">
                        
                    </div>

                    <div class="mb-3">
                        <label for="banner_type" class="col-form-label">Profile Image</label>
                        <input type="file" class="form-control" name="profile_img" id="profile_img">
                       
                        <img class="mt-2" src="{{$banners && $banners->background_img ? asset($banners->profile_img) :'https://via.placeholder.com/150'}}" alt="" id="profile_img_preview" width="50" height="50">
                       
                    </div>

                    <div class="mb-3">
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$banners->name ?? ''}}">
                    </div>

                    <div class="mb-3">
                        <label for="designation" class="col-form-label">Designation</label>
                        <input type="text" class="form-control" name="designation" id="designation" value="{{$banners->designation ?? ''}}">
                    </div>

                    <div class="mb-3">
                        <label for="short_desc" class="col-form-label">Short Description</label>
                        <textarea type="text" class="form-control" name="short_desc" id="short_desc">{{$banners->short_desc ?? ''}}</textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>



                @endsection

                @push('backendJs')

                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script src="{{asset('public/backend')}}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
                    <script src="{{asset('public/backend')}}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>



        @endpush