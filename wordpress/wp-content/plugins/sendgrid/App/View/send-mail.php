<?php
if( ! defined('ABSPATH') ) exit();
?>
	<form id="form">
	<div class="container">
			<h3>Send Mail Using Send Grid</h3>
			<div class="form-group col-sm-6">
				<label for="tomail">To Mail *</label>
				<input type="email" class="form-control form-control-sm" id="tomail" name="tomail" required />
			</div>
			<div class="form-group col-sm-6">
				<label for="subject">Subject *</label>
				<input type="text" class="form-control form-control-sm" id="subject" name="subject" required />
			</div>
			<div class="form-group col-sm-6">
				<label>Message *</label>
				<textarea cols="3" rows="10" name="message" id="message" class="form-control" ></textarea>
			</div>
			<div class="col-sm-6">
				<button type="button" class="btn btn-primary float-right" name="sendmail" id="submitBtn">Send</button>
			</div>
	</div>
	</form>