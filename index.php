<?php
include "header.php";


if (isset($_POST['submit'])) {
    $newsletter= R::dispense('newsletter');
   // $comments->news_id = $id;
    //$comments->name = $_POST['name'];
    $newsletter->email = $_POST['email'];
    $newsletter->date = date('d-m-y');
   // $comments->comment = $_POST['comment'];
    R::store($newsletter);

    $msg="comment submitted";
    // print ("<script>window.alert('Successfully added!!!')</script>");
    // print ("<script>window.location.assign('single.php')</script>");
}
?>
<!-- banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="move-text">
				<div class="breaking_news">
					<h2>Breaking News</h2>
				</div>

				<div class="marquee">
<?php

$sliders = R::findAll('news','ORDER BY id DESC limit 2' );

foreach ($sliders as $slider) {
    $slug = $slider->slug;
    // $cat_id = $slider->category;
    //  $cat = R::findOne('categories', 'id=?', [$cat_id]);

    ?>

    <div class="marquee1">
        <a class="breaking" href="single.php<?php echo '?id=' . $slug; ?>">
            <?php $string = $slider->description;
            $string = substr($string, 0, 150);
            echo $string; ?> </a></div>
    <?php
}
?>
                    <div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="js/jquery.marquee.js"></script>
				<script>
				  $('.marquee').marquee({ pauseOnHover: true });
				  //@ sourceURL=pen.js
				</script>
			</div>
			<!-- video-grids -->
				<div class="video-grids">
					<div class="col-md-8 video-grids-left">
						<div class="video-grids-left1">
							<img src="images/9.jpg" alt=" " class="img-responsive" />
							<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
									<span> </span>
							</a>
							<div class="video-grid-pos">
								<h3><span>Hurricanes</span> produce storm surges, tornadoes, and often the most deadly of all -inland flooding.</h3>
								<ul>
									<li>9:32 <label>|</label></li>
									<li><i>Adom Smith</i> <label>|</label></li>
									<li><span>Politics</span></li>
								</ul>
							</div>

								<!-- pop-up-box -->
								<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
								<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
								<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
								<!--//pop-up-box -->
								<div id="small-dialog" class="mfp-hide">
									<iframe src="https://player.vimeo.com/video/145787219" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								</div>

								<script>
									$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
									});
																									
									});
								</script>
						</div>
						<div class="video-grids-left2">
							<div class="course_demo1">
								<ul id="flexiselDemo1">
                                    <?php

                                    $sliders = R::findAll('news','ORDER BY views ASC limit 5' );

                                    foreach ($sliders as $slider) {
                                        $slug = $slider->slug;
                                        $cat_id = $slider->category;
                                        $cat = R::findOne('categories', 'id=?', [$cat_id]);

                                        ?>
                                        <li>
                                            <div class="item">
                                                <img src="<?php echo $slider->image; ?>" alt=" " class="img-responsive"/>
                                                <a class="play-icon popup-with-zoom-anim" href="#small-dialog">
                                                    <i> </i>
                                                </a>
                                                <div id="small-dialog" class="mfp-hide">
                                                    <iframe src="https://player.vimeo.com/video/145787219" width="500"
                                                            height="281" frameborder="0" webkitallowfullscreen
                                                            mozallowfullscreen allowfullscreen></iframe>
                                                </div>
                                                <div class="floods-text">
                                                    <h3><?php echo $slider->title; ?> <span><?php echo $cat->title; ?> <label>|</label> <i>By Admin</i></span>
                                                    </h3>
                                                    <p><?php echo $slider->date; ?></p>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                    ?>
								</ul>
							</div>
											<!-- pop-up-box -->
												<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
												<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
												<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
											<!--//pop-up-box -->
											<script>
												$(document).ready(function() {
												$('.popup-with-zoom-anim').magnificPopup({
													type: 'inline',
													fixedContentPos: false,
													fixedBgPos: true,
													overflowY: 'auto',
													closeBtnInside: true,
													preloader: false,
													midClick: true,
													removalDelay: 300,
													mainClass: 'my-mfp-zoom-in'
												});
																												
												});
											</script>
									<!-- requried-jsfiles-for owl -->
										<script type="text/javascript">
							 $(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							  </script>
							 <script type="text/javascript" src="js/jquery.flexisel.js"></script>
						</div>
					</div>
					<div class="col-md-4 video-grids-right">
						<div class="sap_tabs">	
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<ul class="resp-tabs-list">
									<li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>most shared</span></li>
									<li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>most read</span></li>
									<div class="clear"></div>
								</ul>				  	 
								<div class="resp-tabs-container">
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">

                                        <?php

                                        $sliders = R::findAll('news','ORDER BY views ASC limit 5' );

                                        foreach ($sliders as $slider) {
                                        $slug = $slider->slug;
                                        $cat_id = $slider->category;
                                        $cat = R::findOne('categories','id=?',[$cat_id]);

                                        ?>
                                        <div class="facts">
                                            <div class="tab_list">
                                                <img src="<?php echo $slider->image; ?>" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="tab_list1">
                                                <ul>
                                                    <li><a href="#"><?php echo $cat->title; ?></a> <label>|</label></li>
                                                    <li><?php echo $slider->date; ?></li>
                                                </ul>
                                                <p style="font-size: 15px"><a href="single.php<?php echo '?id=' . $slug; ?>">
                                                        <?php $string= $slider->description;
                                                        $string = substr($string,0,60);
                                                        echo $string ;?></a></p>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                        <?php

                                        $sliders = R::findAll('news','ORDER BY views DESC limit 5' );

                                        foreach ($sliders as $slider) {
                                            $slug = $slider->slug;
                                            $cat_id = $slider->category;
                                            $cat = R::findOne('categories','id=?',[$cat_id]);

                                            ?>
                                            <div class="facts">
                                                <div class="tab_list">
                                                    <img src="<?php echo $slider->image; ?>" alt=" " class="img-responsive" />
                                                </div>
                                                <div class="tab_list1">
                                                    <ul>
                                                        <li><a href="#"><?php echo $cat->title; ?></a> <label>|</label></li>
                                                        <li><?php echo $slider->date; ?></li>
                                                    </ul>
                                                    <p style="font-size: 15px"><a href="single.php<?php echo '?id=' . $slug; ?>"><?php $string= $slider->description;
                                                            $string = substr($string,0,60);
                                                            echo $string ;?></a></p>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        <?php } ?>
                                    </div>
								</div>
								<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
								<script type="text/javascript">
									$(document).ready(function () {
										$('#horizontalTab').easyResponsiveTabs({
											type: 'default', //Types: default, vertical, accordion           
											width: 'auto', //auto or any width like 600px
											fit: true   // 100% fit in a container
										});
									});
								</script>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			<!-- //video-grids -->
			<!-- news-and-events -->
				<div class="news">
					<div class="news-grids">
						<div class="col-md-8 news-grid-left">
							<h3>latest news & events</h3>
							<ul>
                                <?php

                                $sliders = R::findAll('news','ORDER BY id DESC limit 5');

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
			<!-- //news-and-events -->
		</div>
	</div>
<!-- //banner-bottom -->
<?php

include "footer.php";