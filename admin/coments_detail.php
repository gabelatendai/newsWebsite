<?php
include "sidebar.php";

require '../rb.php';

R::setup('mysql:host=localhost;dbname=newsDb', 'root', ''); //for both mysql or mariaDB
$id= $_GET['id'];

$sliders = R::findOne('comments','id=?',[$id]);
$news_id= $sliders->news_id;

$new= R::findOne('news','id=?',[$news_id]);

?>
<!-- Data table css -->
<link href="assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />

                            <div class="row">
								<div class="col-md-12">
									<div class="card shadow">
                                        <div class="card shadow ">
                                            <div class="card-body pb-0">
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                                        <h2>Commented  about::  <i> <?php echo $new->title ?></i> </h2>
                                                        <p class="description">
                                                            <?php echo $sliders->comment ?>
                                                        </p>
                                                        <div class="table-responsive border ">
                                                            <table class="table row table-borderless w-100 m-0 ">
                                                                <tbody class="col-lg-6 p-0">
                                                                <tr>
                                                                    <td><strong>Full Name :</strong> <?php echo $sliders->name ?></td>
                                                                </tr>
                                                                </tbody>
                                                                <tbody class="col-lg-6 p-0">
                                                                <tr>
                                                                    <td><strong>Email :</strong> <?php echo $sliders->email ?></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
<!--                                                        <div class="media-heading mt-3">-->
<!--                                                            <h3><strong>Biography</strong></h3>-->
<!--                                                        </div>-->
<!--                                                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus</p>-->
<!--                                                        <p class="mb-4">because it is pleasure, but because those who do not know how to pursue pleasure-->
<!--                                                            rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or-->
<!--                                                            pursues or desires to obtain pain of itself, because it is pain, but because occasionally-->
<!--                                                            circumstances occur in which toil and pain can procure him some great pleasure.</p>-->
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>

<!-- Footer -->
<?php
include "footer.php";
?>