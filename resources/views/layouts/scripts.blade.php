<script src="{{ asset('/storage/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/storage/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/storage/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('/storage/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/storage/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/storage/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/storage/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <script>
        $(function () {

          $('#example2').DataTable({
            pageLength: 15,
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>
@stack('scripts')
