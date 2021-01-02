<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>adminpage/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>adminpage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>adminpage/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>adminpage/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>adminpage/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>adminpage/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url() ?>adminpage/js/demo/chart-pie-demo.js"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js') ?>"></script>
  <script>
            $(function() {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            });
        </script>
</body>

</html>
