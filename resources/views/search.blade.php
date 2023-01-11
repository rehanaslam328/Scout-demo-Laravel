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
	<!-- <div class="container">
		<form action="{{ url('/post/save') }}" method="post">
			@csrf
  <div class="form-group">
    <label for="email">Title:</label> -->
<!--     <input type="text" class="form-control" name="title" placeholder="Search here">
 -->  <!-- </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
		
	</div> -->


  <div class="container">
        <h1>Laravel Scout Search</h1>
      <form method="GET" action="{{ url('search') }}">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="search" class="form-control" placeholder="Search">
                </div>
                <div class="col-md-6">
                    <button class="btn btn-info">Search</button>
                </div>
            </div>
        </form>
   <br/>
      <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Tile</th>
                <th>Description</th>
            </tr>
            @if(count($posts) > 0)
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="3" class="text-danger">Result not found.</td>
            </tr>
            @endif
        </table>
   </div>
</body>
</html>