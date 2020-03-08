<?php
include 'sidebar.php';
//if (!isset($_SESSION['auth'])) {
//    header('Location: index');
//}

require '../rb.php';

R::setup('mysql:host=localhost;dbname=newsDb', 'root', ''); //for both mysql or mariaDB
if (isset($_POST['add'])) {

$title =$_POST['title'];


    $slider = R::dispense('categories');
     $slider->title = $title;
    $slider->date = date('d-m-y');
    R::store($slider);

    print ("<script>window.alert('Successfully added!!!')</script>");
    print ("<script>window.location.assign('Category.php')</script>");
}

?>
							<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Default forms</h2>
										</div>
										<div class="card-body">

												<form action="" method="post" enctype="multipart/form-data">
                                                    <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="title" placeholder="Enter Category Title" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <button type="submit" class="form-control btn-block btn-primary text-center" name="add" value="Add News">
                                                            <i class="ion-plus"></i>   Add New Category</button>
                                                    </div>
                                                    </div>
                                                </form>

										</div>
									</div>


                                    <?php
                                    include 'footer.php';
                                    ?>
