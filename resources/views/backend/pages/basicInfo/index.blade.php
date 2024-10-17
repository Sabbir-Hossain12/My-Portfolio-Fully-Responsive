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
                <h4 class="mb-sm-0 font-size-18">Basic Info</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Info</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>







    @if(!isset($basicInfo))
        <form method="post" action="{{route('admin.basicinfo.store')}}" enctype="multipart/form-data">
            @else
                <form method="post" action="{{route('admin.basicinfo.update',$basicInfo->id)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @endif
                    
                    @csrf

                    <div class="mb-3">
                        <label for="banner_type" class="col-form-label">Logo</label>
                        <input type="file" class="form-control" name="logo" id="logo" oninput="logoPrev.src=window.URL.createObjectURL(this.files[0])" >

                        <img class="mt-2" src="{{isset($basicInfo->logo) ? asset($basicInfo->logo) : 'https://via.placeholder.com/150'}}" alt="" id="logoPrev" width="50" height="50">

                    </div>

                    <div class="mb-3">
                        <label for="name" class="col-form-label">University Name</label>
                        <input type="text" class="form-control" name="university" id="university" value="{{$basicInfo->university ?? ''}}">
                    </div>
                    

                    <div class="mb-3">
                        <label for="designation" class="col-form-label">Degree</label>
                        <input type="text" class="form-control" name="degree" id="degree" value="{{$basicInfo->degree ?? ''}}">
                    </div>
                    

                    <div class="mb-3">
                        <label for="short_desc" class="col-form-label">Passed Year</label>
                        <input type="text" class="form-control" name="passed_year" id="passed_year" value="{{$basicInfo->passed_year ?? ''}}">

                    </div>
                    
                    <div class="mb-3">
                        <label for="designation" class="col-form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{$basicInfo->address ?? ''}}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="designation" class="col-form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{$basicInfo->email ?? ''}}">
                    </div> 
                    
                    
                    <div class="mb-3">
                        <label for="designation" class="col-form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="{{$basicInfo->phone ?? ''}}">
                    </div>

                    
                    <div class="mb-3">
                        <label for="designation" class="col-form-label">Age</label>
                        <input type="text" class="form-control" name="age" id="age" value="{{$basicInfo->age ?? ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="cv_link" class="col-form-label">CV link</label>
                        <input type="text" class="form-control" name="cv_link" id="cv_link" value="{{$basicInfo->cv_link ?? ''}}">
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