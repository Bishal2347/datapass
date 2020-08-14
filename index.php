<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Enter Your Data</title>
</head>
<body>
	<div id="container">
		<input type="text" id="name" placeholder="Enter your Full Name">
	</div>

	<div id="result"></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#name').focus();
			$('#name').keypress(function(event) {
				var key = (event.keyCode ? event.keyCode : event.which);
				if (key == 13) {
					var info = $('#name').val();
					$.ajax({
						method: "POST",
						url: "action.php",
						data: {name: info},
						success: function(status) {
							$('#result').append(status);
							$('#name').val('');
						}
					});
				};
			});
		});
	</script>
</body>
</html>
