@extends('backend.layout.master')

@push('backendCss')
    <link href="{{asset('public/backend')}}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
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
                        <li class="breadcrumb-item active">Basic-info</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    {{--    Form Starts--}}
    <form method="post" action="{{route('admin.basic.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            @if(Session::has('error_message'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    {{Session::get('error_message')}}
                </div>
            @endif
            @if(Session::has('success_message'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{Session::get('success_message')}}
                </div>
            @endif
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Website Basic Information</h4>

                    </div>
                    <div class="card-body p-4">

                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label for="logo" class="form-label">Black Logo</label>
                                        <input oninput="bLogoImgPrev.src=window.URL.createObjectURL(this.files[0])"
                                               class="form-control" type="file" name="black_logo"
                                               id="logo">
                                        <img id="bLogoImgPrev" class="mt-1" src="{{asset($data->black_logo)}}"
                                             height="60px" width="200px" alt=""/>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input class="form-control" type="email" name="email"
                                               placeholder="xyz@gmail.com"
                                               id="email" value="{{$data->email}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone_1" class="form-label">Customer Service Phone</label>
                                        <input class="form-control" name="phone_1" type="text"
                                               placeholder="Enter Store Phone Number"
                                               id="phone_1" value="{{$data->phone_1}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fb_link" class="form-label">Facebook link</label>
                                        <input class="form-control" name="fb_link" type="text"
                                               placeholder="Enter Store Phone Number"
                                               id="fb_link" value="{{$data->fb_link}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="x_link" class="form-label">X link</label>
                                        <input class="form-control" name="x_link" type="text"
                                               placeholder="Enter Store Phone Number"
                                               id="x_link" value="{{$data->x_link}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="p_link" class="form-label">Pinterest link</label>
                                        <input class="form-control" name="p_link" type="text"
                                               placeholder="Enter Store Phone Number"
                                               id="p_link" value="{{$data->p_link}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="short_desc" class="form-label">Short Description(footer)</label>
                                        <textarea id="short_desc" name="short_desc"
                                                  class="form-control">{{$data->short_desc}}</textarea>
                                    </div>
                                    
                                


                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mt-3 mt-lg-0">
                                    <div class="mb-3">
                                        <label for="logo" class="form-label">Light Logo</label>
                                        <input oninput="wLogoImgPrev.src=window.URL.createObjectURL(this.files[0])"
                                               class="form-control" type="file" name="light_logo"
                                               id="logo">
                                        <img id="wLogoImgPrev" class="mt-1" src="{{asset($data->light_logo)}}"
                                             height="60px" width="200px" alt=""/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="youtube_link" class="form-label">Youtube Link</label>
                                        <input class="form-control" name="youtube_link" type="text"
                                               placeholder="Enter Store Phone Number"
                                               id="youtube_link" value="{{$data->youtube_link}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="insta_link" class="form-label">Instagram Link</label>
                                        <input class="form-control" name="insta_link" type="text"
                                               placeholder="Enter Store Phone Number"
                                               id="insta_link" value="{{$data->insta_link}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inside_dhaka_charge" class="form-label">Inside Dhaka Charge</label>
                                        <input class="form-control" type="number" placeholder="Enter Store Phone Number"
                                               id="inside_dhaka_charge" name="inside_dhaka_charge"
                                               value="{{$data->inside_dhaka_charge}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="outside_dhaka_charge" class="form-label">Outside Dhaka
                                            Charge</label>
                                        <input class="form-control" name="outside_dhaka_charge" type="number"
                                               placeholder="Enter Store Phone Number"
                                               id="outside_dhaka_charge" value="{{$data->outside_dhaka_charge}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="store_location" class="form-label">Store Location</label>
                                        <textarea id="store_location" name="store_location"
                                                  class="form-control">{{$data->store_location}}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="currency_symbol" class="form-label">Currency Symbol</label>
                                        <input type="text" id="currency_symbol" name="currency_symbol"
                                               class="form-control" value="{{$data->currency_symbol}}"/>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Pixel & Analytics</h4>

                    </div>


                    <div class="card-body p-4">

                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label for="fb_pixel" class="form-label">Facebook Pixel</label>
                                        <textarea id="fb_pixel" class="form-control"
                                                  name="fb_pixel">{{$data->fb_pixel}}</textarea>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label for="chatbox_script" class="form-label">Chatbox Script</label>
                                        <textarea id="chatbox_script" name="chatbox_script"
                                                  class="form-control">{{$data->chatbox_script}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mt-3 mt-lg-0">
                                    <div class="mb-3">
                                        <label for="google_analytics" class="form-label">Google Analytics</label>
                                        <textarea id="google_analytics" class="form-control"
                                                  name="google_analytics">{{$data->google_analytics}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="marquee_text" class="form-label">Marquee Text</label>
                                        <textarea id="marquee_text" class="form-control"
                                                  name="marquee_text">{{$data->marquee_text}}</textarea>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4 d-grid">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>

                </div>
            </div> <!-- end col -->
        </div>
    </form>
@endsection

@push('backendJs')


@endpush