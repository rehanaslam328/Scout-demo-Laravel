<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PGF</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </head>
  <body>
    <table class="table table-bordered">
      <tr>
        <td>
          {{$post->title}}
        </td>
        <td>
          {{$post->description}}
        </td>
      </tr>
     
    </table>
  </body>
</html>