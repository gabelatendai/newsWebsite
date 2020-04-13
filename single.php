<?php
include "header.php";
//require 'rb.php';

//R::setup('mysql:host=localhost;dbname=newsDb', 'root', ''); //for both mysql or mariaDB

$slug=$_GET['id'];
$sliders = R::findOne('news','slug=?',[$slug]);


$db = mysqli_connect("localhost", "root", "", "newsDb");

if (isset($_GET['id'])) {
    $views=$sliders->views + 1;

// mysqli_query($db,"UPDATE `lyrics` SET `name`='$nam',`type`='$typ',`lyrics`='$lyric' WHERE `id`='$id'");
    mysqli_query($db, "UPDATE `news` SET  `views`='$views' WHERE `slug`='$slug'");
}

$id = $sliders->id;
if (isset($_POST['submit'])) {
    $comments = R::dispense('comments');
    $comments->news_id = $id;
    $comments->name = $_POST['name'];
    $comments->email = $_POST['email'];
    $comments->date = date('d-m-y');
    $comments->comment = $_POST['comment'];
    R::store($comments);

    $msg="comment submitted";
    // print ("<script>window.alert('Successfully added!!!')</script>");
    // print ("<script>window.location.assign('single.php')</script>");
}
$count = R::count('comments','news_id=?',[$id]);
?>
<!-- single -->
<div class="single">
    <div class="container">
        <div class="single-grid">
            <div class="col-md-8 blog-left">
                <div class="blog-left-grid">
                    <div class="blog-leftl">
                        <h4>April <span>11</span></h4>
                        <a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i>20</a>
                    </div>
                    <div class="blog-leftr">
                        <img src="<?php   echo  $sliders->image;?>" alt=" " class="img-responsive" />
                        <p class="noselect"><?php  echo  nl2br($sliders->description);?></p>
                        <ul>
                            <li><a href="#"><i class="glyphicon glyphicon-user" aria-hidden="true"></i>User Name</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i>0 Tages</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-comment" aria-hidden="true"></i><?php echo $count ?> Comment(s)</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
<!--                    <div class="admin-text">-->
<!--                        <h5>Written By Admin Name</h5>-->
<!--                        <div class="admin-text-left">-->
<!--                            <a href="#"><img src="images/icon1.png" alt=""/></a>-->
<!--                        </div>-->
<!--                        <div class="admin-text-right">-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,-->
<!--                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
<!--                            <span>View all posts by:<a href="#"> Admin </a></span>-->
<!--                        </div>-->
<!--                        <div class="clearfix"> </div>-->
<!--                    </div>-->
                    <div class="response">
                        <h4>Comments  </h4>
                        <?php

                        $news = R::findAll('comments','news_id=?',[$id]);


                        if ($count>0){
                            foreach ($news as $new) { ?>
                                <div class="media response-info">
                                    <div class="media-left response-text-left">
                                        <a href="#">
                                            <img class="media-object" src="images/icon1.png" alt=""/>
                                        </a>
                                        <h5><a href="#"><?php echo $new->name ?></a></h5>
                                    </div>
                                    <div class="media-body response-text-right">
                                        <p>  <?php echo nl2br($new->comment) ?></p>
                                        <ul>
                                            <li><?php echo $new->date ?></li>
<!--                                            <li><a href="single.html">Reply</a></li>-->
                                        </ul>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            <?php }

                        } else{
                            echo "<h3>No Comments to show </h3>";
                        } ?>
                    </div>
                    <div class="coment-form">
                        <h4>Leave your comment</h4>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="text" placeholder="your name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                            <input type="email" name="email" placeholder="Email (will not be published)*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">

                            <textarea type="text" name="comment"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
                            <?php echo @$msg ?>
                            <input type="submit" name="submit" value="Submit Comment" >
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 blog-right">
                <h3>Categories</h3>
                <ul>
                    <?php

                    $caty = R::findAll('categories');

                    foreach ($caty as $cat) {
                        //   $slug = $slider->slug;

                        ?>
                        <li><a href="#"><?php echo $cat->title;?></a></li>
                    <?php }?>
                </ul>
                <div class="recent">
                    <h3>Recent Comments</h3>
                    <div class="recent-grids">
                        <?php

                        $count2 = R::count('comments','news_id=?',[$id]);
                        $news = R::findAll('comments','news_id=?',[$id]);


                        if ($count2>0){
                        foreach ($news as $new) { ?>
                            <div class="recent-grid">
                                <div class="wom">
                                    <a href="#"><img src="images/6.jpg" alt=" " class="img-responsive"/></a>
                                </div>
                                <div class="wom-right">
                                    <h4><a href="#">Integer rutrum ante eu</a></h4>
                                    <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo.
                                        Ut tellus dolor, dapibus eget.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <?php
                        }
                        }
                        else {
                            echo "No Comments to Show";
                        }
                        ?>
                    </div>
                </div>
<!--                <div class="footer-top-grid1">-->
<!--                    <h3>Recent Tags</h3>-->
<!--                    <ul class="tag2">-->
<!--                        <li><a href="#">awesome</a></li>-->
<!--                        <li><a href="#">strategy</a></li>-->
<!--                        <li><a href="#">development</a></li>-->
<!--                    </ul>-->
<!--                    <ul class="tag2">-->
<!--                        <li><a href="#">css</a></li>-->
<!--                        <li><a href="#">photoshop</a></li>-->
<!--                        <li><a href="#">photography</a></li>-->
<!--                        <li><a href="#">html</a></li>-->
<!--                    </ul>-->
<!--                    <ul class="tag2">-->
<!--                        <li><a href="#">awesome</a></li>-->
<!--                        <li><a href="#">strategy</a></li>-->
<!--                        <li><a href="#">development</a></li>-->
<!--                    </ul>-->
<!--                    <ul class="tag2">-->
<!--                        <li><a href="#">css</a></li>-->
<!--                        <li><a href="#">photoshop</a></li>-->
<!--                        <li><a href="#">photography</a></li>-->
<!--                        <li><a href="#">html</a></li>-->
<!--                    </ul>-->
<!--                    <ul class="tag2">-->
<!--                        <li><a href="#">awesome</a></li>-->
<!--                        <li><a href="#">strategy</a></li>-->
<!--                        <li><a href="#">development</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
                <div class="poll">
                    <h3>Poll</h3>
                    <div class="progress p">
                        <div class="progress-bar bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div>
                    <div class="progress p">
                        <div class="progress-bar bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                            80%
                        </div>
                    </div>
                    <div class="progress p">
                        <div class="progress-bar bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            90%
                        </div>
                    </div>
                    <div class="progress p">
                        <div class="progress-bar bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            40%
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //single -->
    <script>
        $('body').bind('copy paste cut drag drop', function (e) {
            e.preventDefault();
        });
    </script>
<?php
include "footer.php";

?>