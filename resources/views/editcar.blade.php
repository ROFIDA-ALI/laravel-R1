<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Car</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update Car</h2>
  <form action="{{route('updateCar',$car->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="carTitle" placeholder="Enter title" name="carTitle"  
      value="{{ $car->carTitle }}">
      @error('carTitle')
      <div class="alert alert-warning">
      {{ $message }}
@enderror
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" rows="5" name="description"   id="description">{{ $car->description}}</textarea>
        @error('description')
        <div class="alert alert-warning">
        {{ $message }}

@enderror
      </div> 
   
      <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" >
            <img src="{{ asset ('assets/images/'.$car->image)}}" width ="70px" alt="image">

            @error('image')
            <div class="alert alert-warning">

                {{ $message }}
            @enderror
        </div>

    <div class="checkbox">
      <label><input type="checkbox"  name="published" @checked($car->published)> Published</label>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>
