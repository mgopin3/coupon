
<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>Send Grid</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>

	<form action="#" method="POST" id="form">
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

	</body>
	</html>