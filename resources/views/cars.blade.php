<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cars</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>title</th>
        <th>description</th>
        <th>published</th>
        <th>image</th>
        <th>Category Name</th>

        <th>Edit</th>
        <th>SHOW</th>

        <th>Delete</th>

      </tr>
    </thead>
    <tbody>
        @foreach($cars as $car)

      <tr>
        <td>{{$car->carTitle}}</td>      
        <td>{{$car->description}}</td>
        @if( $car->published=== 1)
        <td > Yes👍</td>
        @else
        <td > No 👎</td>

        @endif
</td>
<td>
 <img src="{{ asset ('assets/images/'.$car->image)}}" width ="70px" alt="image">
</td>   
<td>{{$car->category->categoryName}}</td> 
<td><a href="editcar/{{$car->id}}">Edit</a></td>
<td><a href="carDetails/{{ $car->id }}">Show</a></td>

<td><a href="deleteCar/{{$car->id}}">Delete</a></td>

      </tr>
      @endforeach
        </tbody>
  </table>
</div>

</body>
</html>
