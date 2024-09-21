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
                <h4 class="mb-sm-0 font-size-18">Sliders</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Sliders</li>
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
                        <h4 class="card-title">Banner List</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createBannerModal">
                            Add Banner
                        </button>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0  nowrap w-100 dataTable no-footer dtr-inline" id="bannerTable">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Title 1</th>
                                <th>Banner Type</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>


                            <tr>
                                <td>SL</td>
                                <td>Image</td>
                                <td>Title 1</td>
                                <td>Banner Type</td>
                                <td>Status</td>
                                <td>Actions</td>
                            </tr>
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

    {{--    Create Slider Modal--}}
    <div class="modal fade" id="createBannerModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="form" id="createBanner">
                        @csrf

                        <div class="mb-3">
                            <label for="banner_type" class="col-form-label">Banner Type</label>
                            <select class="form-control" name="banner_type" required>


                                <option value="small">Small</option>
                                <option value="medium">Medium</option>
                                <option value="large">Large</option>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="Name" class="col-form-label">Banner Image</label>
                            <input type="file" class="form-control"  name="banner_img">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Banner Title 1</label>
                            <input type="text" class="form-control"  name="banner_title_1">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="col-form-label">Banner Title 2</label>
                            <input type="text" class="form-control"  name="banner_title_2">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="col-form-label">Banner Title 3</label>
                            <input type="text" class="form-control" name="banner_title_3" >
                        </div>
                        <div class="mb-3">
                            <label for="type" class="col-form-label">Banner Link</label>
                            <input type="text" class="form-control" name="banner_link" >
                        </div>


                        <div class="mb-3">
                            <label for="type" class="col-form-label">Banner Button Name</label>
                            <input type="text" class="form-control" name="banner_btn_name" >
                        </div>

                        <div class="mb-3">
                            <label for="type" class="col-form-label">Banner Button Link</label>
                            <input type="text" class="form-control" name="banner_btn_link" >
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

    {{--    Edit Slider Modal--}}
    <div class="modal fade" id="editBannerModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="form2" id="editBanner">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="banner_type" class="col-form-label">Banner Type</label>
                            <select class="form-control" name="banner_type" id="bannerType" required>

                                <option value="small">Small</option>
                                <option value="medium">Medium</option>
                                <option value="large">Large</option>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="Name" class="col-form-label">Banner Image</label>
                            <input type="file" class="form-control" id="banner_img"  name="banner_img">
                            <img class="mt-2" src="" id="bannerImage" width="100%" height="200px">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Banner Title 1</label>
                            <input type="text" class="form-control" id="banner_title_1"  name="banner_title_1">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="col-form-label">Banner Title 2</label>
                            <input type="text" class="form-control" id="banner_title_2" name="banner_title_2">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="col-form-label">Banner Title 3</label>
                            <input type="text" class="form-control" id="banner_title_3" name="banner_title_3" >
                        </div>
                        <div class="mb-3">
                            <label for="type" class="col-form-label">Banner Link</label>
                            <input type="text" class="form-control" id="banner_link" name="banner_link" >
                        </div>


                        <div class="mb-3">
                            <label for="type" class="col-form-label">Banner Button Name</label>
                            <input type="text" class="form-control" id="banner_btn_name" name="banner_btn_name" >
                        </div>

                        <div class="mb-3">
                            <label for="type" class="col-form-label">Banner Button Link</label>
                            <input type="text" class="form-control" id="banner_btn_link" name="banner_btn_link" >
                        </div>

                        <input id="id" type="number" hidden>

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
@endsection

@push('backendJs')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('public/backend')}}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/backend')}}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <script>

        $(document).ready(function () {


            var token = $("input[name='_token']").val();

            //Show Data through Datatable 
            let bannerTable = $('#bannerTable').DataTable({
                order: [
                    [0, 'asc']
                ],
                processing: true,
                serverSide: true,
                ajax: "",
                // pageLength: 30,

                columns: [
                    {
                        data: 'id',


                    },
                    {
                        data: 'bannerImage',

                    },
                    {
                        data: 'banner_title_1',

                    },
                    {
                        data: 'banner_type',
                        render: function (data) {

                            return      '<span class="badge badge-lg bg-primary rounded"> ' + data.toUpperCase() + ' </span>';
                        }

                    },
                    {
                        data: 'status',
                        name: 'Status',
                        orderable: false,
                        searchable: false,
                    },

                    {
                        data: 'action',
                        name: 'Actions',
                        orderable: false,
                        searchable: false
                    },

                ]
            });


            // Create Slider
            $('#createBanner').submit(function (e) {
                e.preventDefault();

                let formData = new FormData(this);

                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('admin.banner.store') }}",
                    data: formData,
                    processData: false,  // Prevent jQuery from processing the data
                    contentType: false,  // Prevent jQuery from setting contentType
                    success: function (res) {
                        if (res.message === 'success') {
                            $('#createBannerModal').modal('hide');
                            $('#createBanner')[0].reset();
                            bannerTable.ajax.reload()
                            swal.fire({
                                title: "Success",
                                text: "Banner Created !",
                                icon: "success"
                            })


                        }
                    },
                    error: function (err) {
                        console.error('Error:', err);
                        swal.fire({
                            title: "Failed",
                            text: "Something Went Wrong !",
                            icon: "error"
                        })
                        // Optionally, handle error behavior like showing an error message
                    }
                });
            });

            // Read Slider Data
            $(document).on('click', '.editButton', function () {
                let id = $(this).data('id');
                $('#id').val(id);

                $.ajax(
                    {
                        type: "GET",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ url('admin/banners') }}/" + id + "/edit",
                        data: {
                            id: id
                        },

                        processData: false,  // Prevent jQuery from processing the data
                        contentType: false,  // Prevent jQuery from setting contentType
                        success: function (res) {



                            $('#bannerImage').attr('src','{{ asset('') }}'+ res.data.banner_img);
                            $('#banner_title_1').val(res.data.banner_title_1);
                            $('#banner_title_2').val(res.data.banner_title_2);
                            $('#banner_title_3').val(res.data.banner_title_3);
                            $('#banner_link').val(res.data.banner_link);
                            $('#banner_btn_name').val(res.data.banner_btn_name);
                            $('#banner_btn_link').val(res.data.banner_btn_link)
                            $('#bannerType').val(res.data.banner_type)

                        },
                        error: function (err) {
                            console.log('failed')
                        }
                    }
                )
            })

            // Update Slider Data
            $('#editBanner').submit(function (e) {
                e.preventDefault();
                let id = $('#id').val();
                let formData = new FormData(this);

                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ url('admin/banners') }}/" + id,
                    data: formData,
                    processData: false,  // Prevent jQuery from processing the data
                    contentType: false,  // Prevent jQuery from setting contentType
                    success: function (res) {
                        if (res.message === 'success') {
                            $('#editBannerModal').modal('hide');
                            $('#editBanner')[0].reset();
                            bannerTable.ajax.reload()
                            swal.fire({
                                title: "Success",
                                text: "Banner Updated !",
                                icon: "success"
                            })


                        }
                    },
                    error: function (err) {
                        console.error('Error:', err);
                        swal.fire({
                            title: "Failed",
                            text: "Something Went Wrong !",
                            icon: "error"
                        })
                        // Optionally, handle error behavior like showing an error message
                    }
                });
            });


            // Delete Slider
            $(document).on('click', '#deleteBannerBtn', function () {
                let id = $(this).data('id');

                swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this !",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Yes, delete it!"
                })
                    .then((result) => {
                        if (result.isConfirmed) {


                            $.ajax({
                                type: 'DELETE',

                                url: "{{ url('admin/banners') }}/" + id,
                                data: {
                                    '_token': token
                                },
                                success: function (res) {
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: "Banner has been deleted.",
                                        icon: "success"
                                    });

                                    bannerTable.ajax.reload();
                                },
                                error: function (err) {
                                    console.log('error')
                                }
                            })


                        } else {
                            swal.fire('Your Data is Safe');
                        }

                    })


            })

            // Change Slider Status
            $(document).on('click', '#adminStatus', function () {
                let id = $(this).data('id');
                let status = $(this).data('status')

                $.ajax(
                    {
                        type: 'post',
                        url: "",
                        data: {
                            '_token': token,
                            id: id,
                            status: status

                        },
                        success: function (res) {
                            bannerTable.ajax.reload();

                            if (res.status == 1) {

                                swal.fire(
                                    {
                                        title: 'Status Changed to Active',
                                        icon: 'success'
                                    })
                            } else {
                                swal.fire(
                                    {
                                        title: 'Status Changed to Inactive',
                                        icon: 'success'
                                    })

                            }
                        },
                        error: function (err) {
                            console.log(err)
                        }
                    }
                )
            })
        });
    </script>

@endpush