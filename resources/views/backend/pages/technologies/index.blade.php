
@extends('backend.layout.master')

@push('backendCss')
    {{--    <meta name="csrf_token" content="{{ csrf_token() }}" />--}}

    <link href="{{asset('public/backend')}}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
          rel="stylesheet" type="text/css">
    <link href="{{asset('public/backend')}}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
          rel="stylesheet" type="text/css">
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    {{--    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">--}}

@endpush

@section('contents')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">services</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Technologies</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    {{-- Table Starts--}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Service List</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createServiceModal">
                            Add Service
                        </button>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0  nowrap w-100 dataTable no-footer dtr-inline" id="ServiceTable">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Technology Title</th>
                                <th>Technology Icon</th>

                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>


                            @forelse($technologies as $technology)
                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td>
                                       {!! $technology->technology_icon !!}
                                    </td>

                                    <td>{{$technology->technology_title}}</td>


                                    <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editServiceModal{{$technology->id}}">Edit
                                        </button>
                                        <button form="deleteService{{$technology->id}}" class="btn btn-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteServiceModal{{$technology->id}}">Delete
                                        </button>
                                        <form id="deleteService{{$technology->id}}"
                                              action="{{route('admin.technology.destroy', $technology->id)}}"
                                              method="post">
                                            @csrf
                                            @method('DELETE')

                                        </form>
                                    </td>
                                </tr>

                                {{--    Edit Service Modal--}}
                                <div class="modal fade" id="editServiceModal{{$technology->id}}" tabindex="-1"
                                     aria-labelledby="exampleModalLabel"
                                     style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Technology</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post"
                                                      action="{{route('admin.technology.update',$technology->id)}}"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="mb-3">
                                                        <label for="email" class="col-form-label">Technology
                                                            Icon</label>
                                                        <input type="text" class="form-control" name="technology_icon" value="{{$technology->technology_icon ?? ''}} ">
                                                    </div>
                                                    @if(isset($technology->technology_icon))
                                                        <div class="mb-3">
                                                         {!!  $technology->technology_icon !!}
                                                        </div>
                                                    @endif

                                                    <div class="mb-3">
                                                        <label for="email" class="col-form-label">Technology
                                                            Title</label>
                                                        <input type="text" class="form-control"
                                                               value="{{$technology->technology_title}}"
                                                               name="technology_title">
                                                    </div>


                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>

    {{--    Table Ends--}}

    {{--    Create Service Modal--}}
    <div class="modal fade" id="createServiceModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="form" id="createService" method="post" action="{{route('admin.technology.store')}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Technology Icon</label>
                            <input type="text" class="form-control" name="technology_icon">
                        </div>


                        <div class="mb-3">
                            <label for="email" class="col-form-label">Technology Title</label>
                            <input type="text" class="form-control" name="technology_title">
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('backendJs')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('public/backend')}}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/backend')}}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


    {{--    <script>--}}
    {{--        $(document).ready(function() {--}}
    {{--            $('#service_desc').summernote();--}}

    {{--            @foreach($technologys as $technology)--}}
    {{--            $('#up_service_desc{{$technology->id}}').summernote();--}}
    {{--            @endforeach--}}

    {{--        });--}}
    {{--    </script>--}}

@endpush
    