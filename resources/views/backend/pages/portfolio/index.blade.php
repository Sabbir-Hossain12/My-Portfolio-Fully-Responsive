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
                <h4 class="mb-sm-0 font-size-18">Portfolios</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Portfolios</li>
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
                        <h4 class="card-title">Portfolio List</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createPortfolioModal">
                            Add Portfolio
                        </button>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0  nowrap w-100 dataTable no-footer dtr-inline" id="PortfolioTable">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Link</th>
                                <th>Sequence</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>


                            @forelse($portfolios as $portfolio) 
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <img class="rounded" src="{{asset($portfolio->portfolio_image)}}" alt="" width="50" height="50">
                                </td>
                                <td>{{$portfolio->portfolio_title}}</td>
                                <td>{{$portfolio->portfolio_link}}</td>
                                <td>{{$portfolio->portfolio_sequence}}</td>
                                <td>
                                    @if($portfolio->status==1)
                                        <button class="btn btn-info">Active</button>
                                    @else

                                        <button class="btn btn-danger">Inactive</button>

                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPortfolioModal{{$portfolio->id}}">Edit</button>
                                    <button form="deletePortfolio"  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePortfolioModal">Delete</button>
                                    <form id="deletePortfolio" action="{{route('admin.portfolio.destroy', $portfolio->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                  
                                    </form>
                                </td>
                            </tr>
                           
                            {{--    Edit Portfolio Modal--}}
                            <div class="modal fade" id="editPortfolioModal{{$portfolio->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                 style="display: none;" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{route('admin.portfolio.update',$portfolio->id)}}">
                                                @csrf
                                                @method('PUT')

                                                <div class="mb-3">
                                                    <label for="Portfolio_type" class="col-form-label">Portfolio Sequence</label>
                                                    <input type="number" class="form-control" value="{{$portfolio->portfolio_sequence}}" name="portfolio_sequence">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="Name" class="col-form-label">Portfolio Image</label>
                                                    <input type="file" class="form-control"  name="portfolio_image">
                                                    <img class="rounded mt-1" src="{{asset($portfolio->portfolio_image)}}" alt="" width="50" height="50">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="col-form-label">Portfolio Title</label>
                                                    <input type="text" class="form-control" value="{{$portfolio->portfolio_title}}"  name="portfolio_title">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="phone" class="col-form-label">Portfolio Link</label>
                                                    <input type="text" class="form-control" value="{{$portfolio->portfolio_link}}"  name="portfolio_link">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="type" class="col-form-label">Portfolio button Text</label>
                                                    <input type="text" class="form-control" value="{{$portfolio->portfolio_btn_text}}" name="portfolio_btn_text" >
                                                </div>


                                                {{--                        <input id="id" type="number" hidden>--}}

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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

    {{--    Create Portfolio Modal--}}
    <div class="modal fade" id="createPortfolioModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Portfolio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="form" id="createPortfolio" method="post" action="{{route('admin.portfolio.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="Portfolio_type" class="col-form-label">Portfolio Sequence</label>
                            <input type="number" class="form-control"  name="portfolio_sequence">
                        </div>

                        <div class="mb-3">
                            <label for="Name" class="col-form-label">Portfolio Image</label>
                            <input type="file" class="form-control"  name="portfolio_image">
                        </div>

{{--                        <div class="mb-3">--}}
{{--                            <label for="portfolio_short_desc" class="col-form-label">Portfolio Short description</label>--}}
{{--                            <textarea id="portfolio_short_desc" class="form-control"  name="portfolio_short_desc"></textarea>--}}
{{--                        </div>--}}
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Portfolio Title</label>
                            <input type="text" class="form-control"  name="portfolio_title">
                        </div>
                        
                        
                        <div class="mb-3">
                            <label for="phone" class="col-form-label">Portfolio Link</label>
                            <input type="text" class="form-control"  name="portfolio_link">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="col-form-label">Portfolio button Text</label>
                            <input type="text" class="form-control" name="portfolio_btn_text" >
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

  

@endpush