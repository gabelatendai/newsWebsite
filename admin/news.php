<?php
include "sidebar.php";

require '../rb.php';

R::setup('mysql:host=localhost;dbname=newsDb', 'root', ''); //for both mysql or mariaDB

?>
<!-- Data table css -->
<link href="assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />

                            <div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<p class="mb-0">Data Table
                                            <a class="btn btn-primary" href="addnews.php" style="color: #FFF; float: right"
                                            >Add News</a>
                                            </p>
										</div>

										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
													<thead>
														<tr>
															<th class="wd-15p">Image</th>
															<th class="wd-15p">Title</th>
															<th class="wd-15p">Category</th>
															<th class="wd-25p">Delete</th>
														</tr>
													</thead>
                                                    <tbody>
                                                    <?php
                                                    $sliders = R::findAll('news');

                                                    foreach ($sliders as $slider) {
                                                        $id = $slider->id;
                                                        ?>

                                                        <tr>
                                                            <td><img src="<?php echo $slider->image ?>" height="70px"
                                                                     width="100px"></td>
                                                            <td><?php echo $slider->title ?></td>
                                                            <td><?php echo $slider->category ?></td>
                                                            <td><a class="pull-right" href="#delete<?php echo $id; ?>"
                                                                   data-toggle="modal"
                                                                   data-target="#delete<?php echo $id; ?>">
                                                                    <b><p>Delete</p></b></a>


                                                                <!-- delete modal user -->
                                                                <div class="modal fade" id="delete<?php echo $id; ?>"
                                                                     tabindex="-1" role="dialog"
                                                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title"
                                                                                    id="myModalLabel"><i
                                                                                            class="glyphicon glyphicon-user"></i>
                                                                                    Article</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="alert alert-danger">
                                                                                    Are you sure you want to delete?
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button class="btn btn-inverse"
                                                                                            data-dismiss="modal"
                                                                                            aria-hidden="true"><i
                                                                                                class="glyphicon glyphicon-remove icon-white"></i>
                                                                                        No
                                                                                    </button>
                                                                                    <a href="delete-article.php<?php echo '?id=' . $id; ?>"
                                                                                       style="margin-bottom:5px;"
                                                                                       class="btn btn-primary"><i
                                                                                                class="glyphicon glyphicon-ok icon-white"></i>
                                                                                        Yes</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
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