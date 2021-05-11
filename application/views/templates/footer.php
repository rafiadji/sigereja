            <!-- Footer -->
            <footer class="sticky-footer bg-white">
            	<div class="container my-auto">
            		<div class="copyright text-center my-auto">
            			<span>Copyright &copy; SIGREJA <?= date('Y'); ?></span>
            		</div>
            	</div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
            	<i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            	<div class="modal-dialog" role="document">
            		<div class="modal-content">
            			<div class="modal-header">
            				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
            					<span aria-hidden="true">×</span>
            				</button>
            			</div>
            			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            			<div class="modal-footer">
            				<button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
            				<a class="btn btn-primary btn-sm" href="<?= base_url('auth/logout'); ?>">Logout</a>
            			</div>
            		</div>
            	</div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

            <!-- Datepicker -->
            <script src="<?= base_url(); ?>assets/vendor/datapicker/dist/js/bootstrap-datepicker.js"></script>


            <!-- Page level plugins -->
            <script src="<?= base_url('assets/'); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="<?= base_url('assets/'); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>
            <script src="<?= base_url('assets/'); ?>/vendor/datatables/buttons/js/dataTables.buttons.min.js"></script>
            <script src="<?= base_url('assets/'); ?>/vendor/datatables/buttons/js/buttons.bootstrap4.min.js"></script>
            <script src="<?= base_url('assets/'); ?>/vendor/datatables/jszip/jszip.min.js"></script>

            <!--Button-->
            <script src="<?= base_url('assets/'); ?>/vendor/datatables/buttons/js/buttons.html5.min.js"></script>
            <script src="<?= base_url('assets/'); ?>/vendor/datatables/buttons/js/buttons.print.min.js"></script>
            <script src="<?= base_url('assets/'); ?>/vendor/datatables/buttons/js/buttons.colVis.min.js"></script>
            <script src="<?= base_url('assets'); ?>/vendor/datatables/responsive/js/dataTables.responsive.min.js"></script>
            <script src="<?= base_url('assets/'); ?>/vendor/datatables/responsive/js/responsive.bootstrap4.min.js"></script>

            <script src="<?= base_url('assets/'); ?>/vendor/gijgo/js/gijgo.min.js"></script>
            <!-- Page level custom scripts -->
            <script src="<?= base_url('assets/'); ?>/vendor/gijgo/js/gijgo.min.js"></script>

            <!-- CEK EDITOR -->
            <script src="<?= base_url() . 'assets/vendor/ckeditor/ckeditor.js' ?>"></script>

            <!-- JAVASCRIPT SECTION -->

            <script>
            	$('.custom-file-input').on('change', function() {
            		let fileName = $(this).val().split('\\').pop();
            		$(this).next('.custom-file-label').addClass("selected").html(fileName);
            	});

            	$('.form-check-input').on('click', function() {
            		const menuId = $(this).data('menu');
            		const roleId = $(this).data('role');

            		$.ajax({
            			url: "<?= base_url('admin/changeaccess'); ?>",
            			type: 'post',
            			data: {
            				menuId: menuId,
            				roleId: roleId
            			},
            			success: function() {
            				document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            			}
            		});

            	});

            	//dataTable 
            	$(document).ready(function() {
            		var table = $('.dataTable').DataTable({

            			lengthMenu: [
            				[5, 10, 25, 50, 100, -1],
            				[5, 10, 25, 50, 100, "All"]
            			],
            			columnDefs: [{
            				targets: -1,
            				orderable: false,
            				searchable: false
            			}]
            		});
            	});

            	//dataTabel laporan
            	$(document).ready(function() {
            		var table = $('#dataTableLaporan').DataTable({
            			//button dom
            			buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
            			dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
            				"<'row'<'col-md-12'tr>>" +
            				"<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
            			//pagination
            			lengthMenu: [
            				[5, 10, 25, 50, 100, -1],
            				[5, 10, 25, 50, 100, "All"]
            			],
            			columnDefs: [{
            				targets: -1,
            				orderable: false,
            				searchable: false
            			}]
            		});

            	});

            	$('#baptis-list a').on('click', function(e) {
            		e.preventDefault()
            		$(this).tab('show')
            	})

				$('#nikah-list a').on('click', function(e) {
            		e.preventDefault()
            		$(this).tab('show')
            	})


            	$(function() {
            		$("#tanngal_lahir").datepicker({
            			format: 'yyyy-mm-dd',
            			autoclose: true,
            			todayHighlight: true,
            		});
            	});

            	$(function() {
            		$("#tanggal_baptis").datepicker({
            			format: 'yyyy-mm-dd',
            			autoclose: true,
            			todayHighlight: true,
            		});
            	});


            	$(function() {
            		$("#tanggal_pengumuman").datepicker({
            			format: 'yyyy-mm-dd',
            			autoclose: true,
            			todayHighlight: true,
            		});
            	});


            	$(function() {
            		CKEDITOR.replace('isi_pengumuman');
            	});
            </script>

            </body>

            </html>
