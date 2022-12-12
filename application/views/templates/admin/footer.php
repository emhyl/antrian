
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?= base_url() ?>assets/admin/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url() ?>assets/admin/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?= base_url() ?>assets/admin/js/metisMenu.min.js"></script>

        <?php if(!isset($footer)): ?>
        <!-- Morris Charts JavaScript -->
        <script src="<?= base_url() ?>assets/admin/js/raphael.min.js"></script>
        <script src="<?= base_url() ?>assets/admin/js/morris.min.js"></script>
        <script src="<?= base_url() ?>assets/admin/js/morris-data.js"></script>
        <?php endif; ?>
        <!-- DataTables JavaScript -->
        <script src="<?= base_url('assets/admin/') ?>js/dataTables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('assets/admin/') ?>js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url() ?>assets/admin/js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
