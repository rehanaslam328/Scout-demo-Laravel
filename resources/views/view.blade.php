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


   <br/>
      <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Tile</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
 <td><a href="{{url('view-pdf/'.$post->id)}}" class="btn btn-success">PDF download</a></td>                </tr>
                @endforeach
        
        </table>
    </body>
</html>