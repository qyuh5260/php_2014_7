<html>
<head>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
	  $("button").click(function(){
	    $("#name").append("<hr>"+$("#username").val());
	  });
  });
	</script>
</head>
<body>
  	<div class="form-group" style='width : 10%;'>
    <input type="text" class="form-control" id="username" placeholder="Enter username" >
  	</div>
  	<button type="button" class="btn btn-success">Success</button>
  	<div id = "name"></div>
</body>
</html>