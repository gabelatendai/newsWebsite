<?php
include "sidebar.php";
include '../rb.php';
R::setup('mysql:host=localhost;dbname=newsDb', 'root', ''); //for both mysql or mariaDB

$db = mysqli_connect("localhost", "root", "", "newsDb");
$c = R::count('comments');
$news = R::count('news');
$fb = R::count('feedback');
$nl = R::count('newsletter');
$cat = R::count('categories');
$c = R::count('comments');
$views = (int)R::getCell('SELECT SUM(views) FROM news');

?>
							<div class="card shadow overflow-hidden">
								<div class="">
									<div class="row">
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
													<i class="fas fa-chart-line mr-2"></i>
													All News
												</p>
												<h2 class="text-primary text-xxl"><?php echo $news ?></h2>
												<a href="news.php" class="btn btn-outline-primary btn-pill btn-sm">View All News</a>
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-users mr-2"></i>
												  Feedback
												</p>
												<h2 class="text-yellow text-xxl"><?php echo $fb ?></h2>
												<a href="feedback.php" class="btn btn-outline-yellow btn-pill btn-sm">View Feedback</a>
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-cart-arrow-down mr-2"></i>
												  News Categories
												</p>
												<h2 class="text-warning text-xxl"><?php echo $cat ?></h2>
												<a href="Category.php" class="btn btn-outline-warning btn-pill btn-sm">View Categories</a>
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-signal mr-2"></i>
												 News Comments
												</p>
												<h2 class="text-danger text-xxl"><?php echo $c ?></h2>
												<a href="comments.php" class="btn btn-outline-danger btn-pill btn-sm">View News Comments</a>
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-dollar-sign mr-2"></i>
												 News Letters
												</p>
												<h2 class="text-success text-xxl"><?php echo $nl ?></h2>
												<a href="#" class="btn btn-outline-success btn-pill btn-sm">View News Letters</a>
											</div>
										</div>
										<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
											<div class="text-center">
												<p class="text-light">
												  <i class="fas fa-briefcase mr-2"></i>
												 Views
												</p>
												<h2 class="text-primary text-xxl"><?php echo $views ?></h2>
												<a href="#" class="btn btn-outline-primary btn-pill btn-sm">View</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-3">
									<div class="card shadow overflow-hidden">
										<div class="card-body">
											<div class="widget text-center">
												<div><i class="fas fa-users fa-5x text-yellow"></i></div>
												<h4 class="text-muted mt-2 mb-0">Online Visitors</h4>
												<h2 class="display-2 mb-0"><?php echo $views ?></h2>
												<a href="news.php" class="btn btn-outline-yellow mt-3 btn-sm btn-pill">view all</a>
											</div>
										</div>
										<span class="updating-chart" data-peity='{ "fill": ["#ffa21d"]}'>5,3,9,6,5,9,2,5,3,6,7,8,6</span>
									</div>
								</div>
								<div class="col-xl-3">
									<div class="">
										<div class="">
											<div class="row">
												<div class="col-xl-12 col-lg-12 col-sm-12">
													<div class="card shadow overflow-hidden">
														<div class="card-body pb-0">
															<div class="widget text-center">
																<small class="text-muted">Sales Monthly</small>
																<h2 class="text-xxl mb-0">$ 8,343</h2>
															</div>
														</div>
														<span class="bar" data-peity='{ "fill": ["#00c3ed"]}'>5,4,5,2,8,4,5,6,5,2,4,4,8,4,6,2,3,4</span>
													</div>
													<div class="card shadow overflow-hidden">
														<div class="card-body pb-0">
															<div class="widget text-center">
																<small class="text-muted">Sales Weekly</small>
																<h2 class="text-xxl mb-0">$ 683</h2>
															</div>
														</div>
														<span class="bar" data-peity='{ "fill": ["#18b16f"]}'>5,4,5,2,8,4,5,6,5,2,4,4,8,4,6,2,3,4</span>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="">
										<div class="">
											<div class="row">
												<div class="col-xl-6 col-lg-6 col-sm-6">
													<div class="card shadow">
														<div class="card-body">
															<div class="widget text-center">
																<small class="">Average Revenue per unit</small>
																<h2 class="text-xxl mb-1 text-success">$ 142</h2>
																<p class="mb-0"><span class=""><i class="fas fa-caret-up ml-1 text-success"></i> 4%</span>  last month</p>
															</div>
														</div>
													</div>
													<div class="card shadow">
														<div class="card-body">
															<div class="widget text-center">
																<small class="">Customer Lifetime Value</small>
																<h2 class="text-xxl mb-1 text-yellow">$ 256</h2>
																<p class="mb-0"><span class=""><i class="fas fa-caret-down text-danger ml-1"></i> 5%</span> last month</p>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-sm-6">
													<div class="card shadow">
														<div class="card-body">
															<div class="widget text-center">
																<small class="">Customer Acquisition Cost</small>
																<h2 class="text-xxl text-primary mb-1">$ 329</h2>
																<p class="mb-0"><span class=""><i class="fas fa-caret-up text-success ml-1"></i> 6%</span> last month</p>
															</div>
														</div>
													</div>
													<div class="card shadow">
														<div class="card-body">
															<div class="widget text-center">
																<small class="">Monthly Sales Growth</small>
																<h2 class="text-xxl text-danger mb-1">12%</h2>
																<p class="mb-0"><span class=""><i class="fas fa-caret-down text-danger ml-1"></i> 8%</span> last month</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xl-7">
									<div class="card  shadow overflow-hidden">
										<div class="card-header bg-transparent ">
											<div class="row align-items-center">
												<div class="col">
													<h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
													<h2 class="mb-0">Details Of Revenue and profit</h2>
												</div>

											</div>
										</div>
										<div class="card-body">
											<!-- Chart -->
											<div id="echart" class="chart-dropshadow h-400"></div>
										</div>
									</div>
								</div>
								<div class="col-xl-5">
									<div class="card  shadow overflow-hidden">
										<div class="card-header bg-transparent">
											<div class="row align-items-center">
												<div class="col">
													<h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
													<h2 class="mb-0">Monthly Sales Performance</h2>
												</div>

											</div>
										</div>
										<div class="card-body">
											<!-- Chart -->
											<div id="echart2" class="chart-dropshadow h-400"></div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header bg-transparent">
											<div class="row align-items-center">
												<div class="col">
													<h6 class="text-uppercase text-light ls-1 mb-1">Revenue</h6>
													<h2 class="mb-0">Revenue Generated By Country</h2>
												</div>
											</div>
										</div>
										<div class="">
											<div class="row">
												<div class="col-xl-4">
													<div class="card-body">
														<div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>India</span>
																</div>
																<div class="progress-percentage">
																	<span>70%</span>
																</div>
															</div>
															<div class="progress">
																<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
															</div>
														</div>
														<div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>Singapore</span>
																</div>
																<div class="progress-percentage">
																	<span>45%</span>
																</div>
															</div>
															<div class="progress">
																<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
															</div>
														</div>
														<div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>Bahrain</span>
																</div>
																<div class="progress-percentage">
																	<span>60%</span>
																</div>
															</div>
															<div class="progress">
																<div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
															</div>
														</div>
														<div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>Maldives</span>
																</div>
																<div class="progress-percentage">
																	<span>56%</span>
																</div>
															</div>
															<div class="progress">
																<div class="progress-bar bg-success" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>
															</div>
														</div>
														<div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>Canada</span>
																</div>
																<div class="progress-percentage">
																	<span>30%</span>
																</div>
															</div>
															<div class="progress">
																<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
															</div>
														</div>
														<div class="progress-wrapper pt-2">
															<div class="progress-info">
																<div class="progress-label">
																	<span>Palau</span>
																</div>
																<div class="progress-percentage">
																	<span>42%</span>
																</div>
															</div>
															<div class="progress mb-0">
																<div class="progress-bar bg-default" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%;"></div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-8 worldmap">
													<div class="card-body">
														<div id="world-map-markers" class="worldh h-400" ></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


<?php
                            include "footer.php";
                            ?>