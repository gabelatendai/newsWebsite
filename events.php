<?php
include "header.php";
?>
	<div class="news-and-events">
		<div class="container">
            <div class="news">
                <div class="news-grids">
                    <div class="col-md-8 news-grid-left">
                        <h3>Current latest events</h3>
                        <ul>
                            <?php

                            $sliders = R::findAll('news','category=?',['events']);

                            foreach ($sliders as $slider) {
                                $slug = $slider->slug;

                                ?>
                                <li>
                                    <div class="news-grid-left1">
                                        <img src="<?php echo  $slider->image ?>" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="news-grid-right1">
                                        <h4><a href="single.php<?php echo '?id=' . $slug; ?>"><?php echo  $slider->title ?></a></h4>
                                        <h5>By <a href="#">Admin</a> <label>|</label> <i><?php echo  $slider->date ?></i></h5>
                                        <p><?php
                                            $string= $slider->description;
                                            $string = substr($string,0,100);
                                            echo $string ; ?>
                                        </p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-md-4 news-grid-right">
                        <div class="news-grid-rght1">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a class="high" href="#home" aria-controls="home" role="tab" data-toggle="tab">weather in London</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">edit location</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active london" id="home">
                                    <ul>
                                        <li>
                                            <h4>Wednesday</h4>
                                            <span></span>
                                            <p>21<sup>°</sup></p>
                                        </li>
                                        <li>
                                            <h4>Thursday</h4>
                                            <span class="moon"></span>
                                            <p>25<sup>°</sup></p>
                                        </li>
                                        <li>
                                            <h4>Friday</h4>
                                            <span class="sun"></span>
                                            <p>31<sup>°</sup></p>
                                        </li>
                                        <div class="clearfix"> </div>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359652.109742895!2d-113.72446020222534!3d36.24602872499641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1450786850582" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="news-grid-rght2">
                            <h3>subscribe to our newsletter</h3>
                            <p>Get the latest news and updates by signing up to our daily newsletter.We won't sell your email or spam you !</p>
                            <form method="post" action="" enctype="multipart/form-data">
                                <input type="email" placeholder="enter your Email address" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your Email address';}">
                                <br>
                                <br>
                                <input type="submit" name="submit" value="Submit">
                            </form>
                        </div>
                        <div class="news-grid-rght3">
                            <img src="images/18.jpg" alt=" " class="img-responsive" />
                            <div class="story">
                                <p>story of the week</p>
                                <h3><a href="single.php">US hails west Africa Ebola progress</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
		</div>
	</div>
<!-- //news-and-events -->
<?php

include "footer.php";
?>