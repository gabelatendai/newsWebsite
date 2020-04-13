<?php
include 'sidebar.php';
//if (!isset($_SESSION['auth'])) {
//    header('Location: index');
//}

require '../rb.php';

R::setup('mysql:host=localhost;dbname=newsDb', 'root', ''); //for both mysql or mariaDB
if (isset($_POST['add'])) {

$title =$_POST['title'];
    $filetmp = $_FILES['image']['tmp_name'];
    $filename = $_FILES['image']['name'];
    $filetype = $_FILES['image']['tmp_name'];
    $filepath = "Uploads/" . $filename;
    move_uploaded_file($filetmp, $filepath);


    $slider = R::dispense('news');
    $slider->category = $_POST['category'];
    $slider->title = $title;
    $slider->date = date('d-m-y');
    $slider->image = $filepath;
    $slider->description = $_POST['description'];
    $slider->slug  = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
    R::store($slider);

    print ("<script>window.alert('Successfully added!!!')</script>");
    print ("<script>window.location.assign('news.php')</script>");
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
                                                            <input type="text" class="form-control" name="title" placeholder="Enter News Title" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <select type="text" class="form-control" name="category" required >
                                                                <option value="">Select Category</option>
                                                                <?php
                                                                $sliders = R::findAll('categories');

                                                                foreach ($sliders as $slider) {
                                                                    $id = $slider->id;
                                                                    ?>
                                                                    <option value="<?php echo $id ?>"><?php echo $id = $slider->title; ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <a class="btn btn-primary" href="addcategory.php" style="float: right"
                                                            ><i class="ion-plus"></i>Add Category</a>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="file" class="form-control" name="image" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Write a large text here ..."></textarea>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <div class="col-md-10">
                                                        <button type="submit" class="form-control btn-block btn-primary text-center" name="add" value="Add News">
                                                            <i class="ion-plus"></i>Add News</button>
                                                    </div>
                                                    </div>
                                                </form>

										</div>
									</div>


                                    <?php
                                    include 'footer.php';
                                    ?>
