<?php
include "header.php";

if (isset($_POST['submit'])) {
    $newsletter= R::dispense('newsletter');
    $newsletter->email = $_POST['email'];
    $newsletter->date = date('d-m-y');
    R::store($newsletter);

    $msg="comment submitted";
    // print ("<script>window.alert('Successfully added!!!')</script>");
    // print ("<script>window.location.assign('single.php')</script>");
}
if (isset($_POST['send'])) {
    $feedback= R::dispense('feedback');
    $feedback->name = $_POST['name'];
    $feedback->email = $_POST['email'];
    $feedback->date = date('d-m-y');
    $feedback->msg = $_POST['msg'];
    R::store($feedback);

    $msg="feedaback submitted";
    // print ("<script>window.alert('Successfully added!!!')</script>");
    // print ("<script>window.location.assign('single.php')</script>");
}
?>
	<div class="contact">
		<div class="container">
			<div class="map">
				<h3>View on map</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.899142009709!2d23.72354!3d37.979482999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd238977fb45%3A0xbdf5a6106a003293!2sFashion+Workshop+by+Vicky+Kaya!5e0!3m2!1sen!2sin!4v1440569426817" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="contact-grids">
				<div class="col-md-3 contact-grid">
					<div class="call">
						<div class="col-xs-3 contact-grdl">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 contact-grdr">
							<ul>
								<li>+263 772 890 679</li>
								<li>+263 776 890 679</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address">
						<div class="col-xs-3 contact-grdl">
							<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 contact-grdr">
							<ul>
								<li>345 Diamond Street,</li>
								<li>Harare.</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="mail">
						<div class="col-xs-3 contact-grdl">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 contact-grdr">
							<ul>
								<li><a href="mailto:info@example.com">info@example.com</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-5 contact-grid">
					<form method="post" action="" enctype="multipart/form-data">
						<input type="text" name="name" placeholder="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" name="email" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<textarea type="text" name="msg" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" name="send" value="Send" >
					</form>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="newsletter1">
						<h3><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Newsletter</h3>
					</div>
					<form action="" method="post" enctype="multipart/form-data">
						<input type="email" name="email" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="submit" name="submit" value="Subscribe" >
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //contact -->
<?php

include "footer.php";
?>