
<!-- plugins:js -->
<script src="{{asset('vendors/admin/base/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{asset('vendors/admin/chart.js/Chart.min.js')}}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('js/admin/off-canvas.js')}}"></script>
<script src="{{asset('js/admin/hoverable-collapse.js')}}"></script>
<script src="{{asset('js/admin/template.js')}}"></script>
<script src="{{asset('js/admin/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('js/admin/dashboard.js')}}"></script>
<!-- End custom js for this page-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif
    $(document).ready(function () {
        bsCustomFileInput.init()
    })
</script>
