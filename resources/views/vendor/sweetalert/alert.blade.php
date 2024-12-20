@if (config('sweetalert.alwaysLoadJS') === true && config('sweetalert.neverLoadJS') === false)
<script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
@endif

@if (Session::has('alert.config'))
@if(config('sweetalert.animation.enable'))
<link rel="stylesheet" href="{{ config('sweetalert.animatecss') }}">
@endif

@if (config('sweetalert.alwaysLoadJS') === false && config('sweetalert.neverLoadJS') === false)
<script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
@endif

<!-- <script>
Swal.fire({
    text: "{{ Session::pull('alert.config') }}"
});
</script> -->

<script>
Swal.fire({
    title: "Berhasil",
    text: "{{ Session::pull('alert.config') }}",
    icon: "success",
    timer: 5000,
    width: "32rem",
    heightAuto: true,
    padding: "1.25rem",
    showConfirmButton: true,
    showCloseButton: false,
});
</script>

@endif