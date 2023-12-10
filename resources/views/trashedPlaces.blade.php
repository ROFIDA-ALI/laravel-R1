<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trashed Places</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Trashed Places</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>title</th>
        <th>created_at</th>
        <th>Restore</th>

        <th>Delete</th>

      </tr>
    </thead>
    <tbody>
        @foreach($places as $place)

      <tr>
        <td>{{$place->title}}</td>      
        <td>{{$place->created_at}}</td>
        
<td><a href="restorePlace/{{ $place->id }}">Restore</a></td>

<td><a href="ForseDelete/{{$place->id}}">Forse Delete</a></td>   //forse

      </tr>
      @endforeach
        </tbody>
  </table>
</div>

</body>
</html>
