<script src=" {{asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
<script src=" {{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src=" {{asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src=" {{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src=" {{asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>
<script src=" {{asset('backend/assets/libs/feather-icons/feather.min.js')}}"></script>

<!-- pace js -->
<script src=" {{asset('backend/assets/libs/pace-js/pace.min.js')}}"></script>

<script src=" {{asset('backend/assets/js/app.js')}}"></script>

{{--Tostr js--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"--}}
{{--        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="--}}
{{--        crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}

{{--toastr.js--}}
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@stack('backendJs')

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>