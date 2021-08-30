<!DOCTYPE html>
<html>
<head>
	<title>FS CODE</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/fs/assets/js/app.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<select id="plugin-list" class="form-control">
					<option>--- Select ---</option>
					<?php foreach(plugins() as $pluginName): ?>
						<option><?= $pluginName; ?></option>
					<?php endforeach; ?>
				</select>
			</div>

			<div class="col-6" id="form-section"></div>

			<div class="col-12" id="response-section"></div>
		</div>
	</div>
</body>
</html>