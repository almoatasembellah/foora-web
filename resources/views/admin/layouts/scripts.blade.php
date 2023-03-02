<!-- Vendor JS Files -->
<script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
        $('#datatable').DataTable();
    } );
</script>



<script src="{{ asset('admin/js/main.js') }}"></script>

<script>
    $(".alert-danger").fadeTo(2000, 500).slideUp(1000, function () {
        $(".alert-danger").slideUp(500);
    });

    $(".alert-success").fadeTo(2000, 500).slideUp(1000, function () {
        $(".alert-success").slideUp(500);
    });
</script>
