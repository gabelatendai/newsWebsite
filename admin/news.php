<?php
include "sidebar.php";



?>
<!-- Data table css -->
<link href="assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />

                            <div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<p class="mb-0">Data Table
                                            <a class="btn btn-success" href="addnews.php" style="color: #FFF; float: right"
                                            >Add News and Updates</a>
                                            </p>
										</div>

										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
													<thead>
														<tr>
															<th class="wd-15p">First name</th>
															<th class="wd-15p">Last name</th>
															<th class="wd-20p">Position</th>
															<th class="wd-15p">Start date</th>
															<th class="wd-10p">Salary</th>
															<th class="wd-25p">E-mail</th>
														</tr>
													</thead>
													<tbody>
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>Tiger Nixon</td>
                                                        <td>Tiger Nixon</td>
                                                        <td>Tiger Nixon</td>
                                                        <td>Tiger Nixon</td>
                                                        <td>Tiger Nixon</td>
                                                    </tr>
                                                    </tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>

<!-- Footer -->
							<footer class="footer">
								<div class="row align-items-center justify-content-xl-between">
									<div class="col-xl-6">
										<div class="copyright text-center text-xl-left text-muted">
											<p class="text-sm font-weight-500">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | News Website</p>
										</div>
									</div>
									<div class="col-xl-6">
										<p class="float-right text-sm font-weight-500"><a href="">Admin Dashboard</a></p>
									</div>
								</div>
							</footer>
							<!-- Footer -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Back to top -->
	<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

	<!-- Ansta Scripts -->
	<!-- Core -->
	<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Optional JS -->
	<script src="assets/plugins/chart.js/dist/Chart.min.js"></script>
	<script src="assets/plugins/chart.js/dist/Chart.extension.js"></script>

	<!-- Data tables -->
	<script src="assets/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>

	<!-- Fullside-menu Js-->
	<script src="assets/plugins/toggle-sidebar/js/sidemenu.js"></script>

	<!-- Custom scroll bar Js-->
	<script src="assets/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js"></script>

	<!-- Ansta JS -->
	<script src="assets/js/custom.js"></script>
	<script>
		$(function(e) {
			$('#example').DataTable();

			var table = $('#example1').DataTable();
			$('button').click( function() {
				var data = table.$('input, select').serialize();
				alert(
					"The following data would have been submitted to the server: \n\n"+
					data.substr( 0, 120 )+'...'
				);
				return false;
			});
			$('#example2').DataTable( {
				"scrollY":        "200px",
				"scrollCollapse": true,
				"paging":         false
			});
		} );

	</script>
</body>


</html>