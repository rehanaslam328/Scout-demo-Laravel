<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Algolia</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form action="{{ url('/post/save') }}" method="post">
			@csrf
  <div class="form-group">
    <label for="email">Title:</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label for="pwd">Description:</label>
    <input type="text" class="form-control"  name="description" >
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
		
	</div>
</body>
</html>