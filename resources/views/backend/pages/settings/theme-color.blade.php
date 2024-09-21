@extends('backend.layout.master')

@push('backendCss')
    <link href="{{asset('public/backend')}}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
          rel="stylesheet" type="text/css">

@endpush

@section('contents')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
{{--                <h4 class="mb-sm-0 font-size-18">Website Theme Color</h4>--}}

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Website Appearance</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

  @if(!$themes) 
    <form method="post" action="{{route('admin.theme.store')}}" enctype="multipart/form-data">
        @csrf
        
        @else
            <form method="post" action="{{route('admin.theme.update',$themes->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @endif
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Website Appearance</h4>

                    </div>
                    <div class="card-body p-4">

                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label for="primary_color_value" class="form-label">Primary Color</label>
                                        <input type="color" class="form-control form-control-color w-75"  name="primary_color_value"
                                               id="primary_color_value" value="{{$themes->primary_color_value ?? ''}}">
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label for="secondary_color_value" class="form-label">Secondary Color</label>
                                        <input type="color" class="form-control form-control-color w-75"  name="secondary_color_value"
                                               id="secondary_color_value" value="{{$themes->secondary_color_value ?? ''}}">
                                    </div>

                                </div>
                            </div>


                            <div class="text-center mt-4 d-grid">
                                <button class="btn btn-primary">Update</button>
                            </div>

                           
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
      
    </form>
@endsection

@push('backendJs')


@endpush