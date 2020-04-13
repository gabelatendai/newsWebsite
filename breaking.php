<?php
include "header.php";
?>
	<div class="breaking-news">
		<div class="container">
            <h2 class="text-center">Breaking News</h2>
            <br>
			<div class="breaking-news-grids-bottom">
				<div class="banner-bottom-grids">
<?php

$sliders = R::findAll('categories');

foreach ($sliders as $slider) {
    $slug = $slider->slug;

    ?>

					<div class="col-md-3 banner-bottom-grid-left">
						<div class="br-bm-gd-lt">
							<div class="overlay">
								<div class="arrow-left"></div>
								<div class="rectangle"></div>
							</div>
							<div class="health-pos">
								<div class="health">
									<ul>
										<li><a href="news.php<?php echo '?cat=' . $id; ?>"><?php echo $slider->title ?></a></li>
                                        <li><?php echo  date('d-M-Y'); ?></li>
									</ul>
								</div>
								<h3>But I must explain to you how all this mistaken idea.</h3>
								<div class="dummy">
									<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut maiores alias.</p>
								</div>
								<div class="com-heart">
									<ul>
										<li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>120 Comments</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>12,536 Likes</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

    <?php }?>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="video-grids">
					<div class="col-md-8 video-grids-left">
						<div class="video-grids-left1">
							<img src="images/9.jpg" alt=" " class="img-responsive">
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
								<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
								<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
								<!--//pop-up-box -->
								<div id="small-dialog" class="mfp-hide">
									<iframe src="https://player.vimeo.com/video/145787219" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
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
								<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul id="flexiselDemo1" class="nbs-flexisel-ul" style="left: -243px; display: block;">	
									
									
									
								<li class="nbs-flexisel-item" style="width: 243px;">
										<div class="item">
											<img src="images/10.jpg" alt=" " class="img-responsive">
											<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
													<i> </i>
											</a>
											<div id="small-dialog" class="mfp-hide">
												<iframe src="https://player.vimeo.com/video/145787219" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
											</div>
											<div class="floods-text">
												<h3>The fed and inequality <span>Politics <label>|</label> <i>Adom Smith</i></span></h3>
												<p>5:56</p>
											</div>
										</div>
									</li><li class="nbs-flexisel-item" style="width: 243px;">
										<div class="item">
											<img src="images/11.jpg" alt=" " class="img-responsive">
											<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
													<i> </i>
											</a>
											<div id="small-dialog" class="mfp-hide">
												<iframe src="https://player.vimeo.com/video/145787219" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
											</div>
											<div class="floods-text">
												<h3>The fastest insect in the world <span>Politics <label>|</label> <i>Adom Smith</i></span></h3>
												<p>5:56</p>
											</div>
										</div>
									</li><li class="nbs-flexisel-item" style="width: 243px;">
										<div class="item">
											<img src="images/12.jpg" alt=" " class="img-responsive">
											<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
													<i> </i>
											</a>
											<div id="small-dialog" class="mfp-hide">
												<iframe src="https://player.vimeo.com/video/145787219" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
											</div>
											<div class="floods-text">
												<h3>Billionaires versus Millionaires<span>Politics <label>|</label> <i>Adom Smith</i></span></h3>
												<p>5:56</p>
											</div>
										</div>
									</li><li class="nbs-flexisel-item" style="width: 243px;">
										<div class="item">
											<img src="images/10.jpg" alt=" " class="img-responsive">
											<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
													<i> </i>
											</a>
											<div id="small-dialog" class="mfp-hide">
												<iframe src="https://player.vimeo.com/video/145787219" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
											</div>
											<div class="floods-text">
												<h3>The fed and inequality <span>Politics <label>|</label> <i>Adom Smith</i></span></h3>
												<p>5:56</p>
											</div>
										</div>
									</li><li class="nbs-flexisel-item" style="width: 243px;">
										<div class="item">
											<img src="images/11.jpg" alt=" " class="img-responsive">
											<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
													<i> </i>
											</a>
											<div id="small-dialog" class="mfp-hide">
												<iframe src="https://player.vimeo.com/video/145787219" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
											</div>
											<div class="floods-text">
												<h3>The fastest insect in the world <span>Politics <label>|</label> <i>Adom Smith</i></span></h3>
												<p>5:56</p>
											</div>
										</div>
									</li><li class="nbs-flexisel-item" style="width: 243px;">
										<div class="item">
											<img src="images/12.jpg" alt=" " class="img-responsive">
											<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
													<i> </i>
											</a>
											<div id="small-dialog" class="mfp-hide">
												<iframe src="https://player.vimeo.com/video/145787219" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
											</div>
											<div class="floods-text">
												<h3>Billionaires versus Millionaires<span>Politics <label>|</label> <i>Adom Smith</i></span></h3>
												<p>5:56</p>
											</div>
										</div>
									</li></ul><div class="nbs-flexisel-nav-left" style="top: 91px;"></div><div class="nbs-flexisel-nav-right" style="top: 91px;"></div></div></div>
							</div>
											<!-- pop-up-box -->
												<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
												<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
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
									<li class="resp-tab-item grid1 resp-tab-active" aria-controls="tab_item-0" role="tab"><span>most shared</span></li>
									<li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>most read</span></li>
									<div class="clear"></div>
								</ul>				  	 
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="tab_list">
												<img src="images/10.jpg" alt=" " class="img-responsive">
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#">Politics</a> <label>|</label></li>
													<li>31.12.2015</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="images/11.jpg" alt=" " class="img-responsive">
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="green">international</a> <label>|</label></li>
													<li>31.12.2015</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="images/12.jpg" alt=" " class="img-responsive">
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="orange">general</a> <label>|</label></li>
													<li>31.12.2015</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
										  <div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="images/10.jpg" alt=" " class="img-responsive">
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="orange1">business</a> <label>|</label></li>
													<li>31.12.2015</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
										  <div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="images/12.jpg" alt=" " class="img-responsive">
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="orange2">world</a> <label>|</label></li>
													<li>31.12.2015</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
										  <div class="clearfix"> </div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="tab_list">
												<img src="images/12.jpg" alt=" " class="img-responsive">
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#">Politics</a> <label>|</label></li>
													<li>31.12.2015</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="images/11.jpg" alt=" " class="img-responsive">
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="orange1">business</a> <label>|</label></li>
													<li>31.12.2015</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="images/10.jpg" alt=" " class="img-responsive">
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="orange2">world</a> <label>|</label></li>
													<li>31.12.2015</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
										  <div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="images/12.jpg" alt=" " class="img-responsive">
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="green">international</a> <label>|</label></li>
													<li>31.12.2015</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
										  <div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="images/11.jpg" alt=" " class="img-responsive">
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="orange">general</a> <label>|</label></li>
													<li>31.12.2015</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
										  <div class="clearfix"> </div>
										</div>
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
		</div>
	</div>
<!-- //breaking-news -->
<?php
include "footer.php";
?>