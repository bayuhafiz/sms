<!DOCTYPE html>
<html>
<head>
	<title>CLOUD SERVICE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="bootstrap.css" rel="stylesheet" media="screen">
	
</head>
<body>
	<div class="wrapper">
		<div class="login-box">
			<form action="send-sms.php" method="POST" enctype="multipart/form-data">
				<div class="input-group form-group">
					<span class="input-group-addon">Phone No.</span>
				  	<input type="text" name="phone_no" class="form-control" placeholder="ex: +628123456789" required autocomplete="off">
				</div>
				<div class="input-group form-group">
					<span class="input-group-addon">Message</span>
				  	<input type="text" name="sms_body" class="form-control" placeholder="Text body.." required autocomplete="off">
				</div>
				<div class="btn-group form-group">
		  			<button type="submit" name="log" class="btn btn-default"> Send SMS</button>
		  		</div>
		  	</form>
		</div>
	</div>
</body>
</html>