<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Place</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add Place</h2>
  <form action="{{ route('placedata') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title"  
      value="{{ old('title') }}">
      @error('title')
      <div class="alert alert-warning">
      {{ $message }}
@enderror
    </div>
    
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" rows="5" name="description"   id="description">{{ old('description') }}</textarea>
        @error('description')
        <div class="alert alert-warning">
        {{ $message }}

@enderror
      </div> 
      <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
            @error('image')
            <div class="alert alert-warning">

                {{ $message }}
            @enderror
        </div>
        


        <div class="form-group">
      <label for="title">Price:</label>
      <form>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" id="from" name="from" placeholder="From"
      value="{{ old('from') }}">
      @error('from')
      <div class="alert alert-warning">
      {{ $message }}
@enderror
    </div>
    <br>
    <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" id="to" name="to" placeholder="To"
      value="{{ old('to') }}">
      @error('to')
      <div class="alert alert-warning">
      {{ $message }}
@enderror
    </div>
</form>
<br>
    <button type="submit" class="btn btn-default">Add</button>
  </form>
</div>

</body>
</html>
