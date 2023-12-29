<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Car</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div>
    <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
    <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">Arabic</a>
</div>
  <h2>{{ __('messages.Add Car') }}</h2>
  <form action="{{ route('cardata') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">{{ __('messages.Title') }}:</label>
      <input type="text" class="form-control" id="carTitle" placeholder="{{ __('messages.Enter title') }}" name="carTitle"  
      value="{{ old('carTitle') }}">
      @error('carTitle')
      <div class="alert alert-warning">
      {{ $message }}
@enderror
    </div>
    
    <div class="form-group">
        <label for="description">{{ __('messages.Description') }}:</label>
        <textarea class="form-control" rows="5" name="description"   id="description">{{ old('description') }}</textarea>
        @error('description')
        <div class="alert alert-warning">
        {{ $message }}

@enderror
      </div> 
      <div class="form-group">
            <label for="image">{{ __('messages.Image') }}:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
            @error('image')
            <div class="alert alert-warning">

                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
          <label for="shortDescription">{{ __('messages.Category') }}:</label>
          <select name="category_id" id="">
              <option value=>{{ __('messages.Select Category') }}</option>
@foreach ($categories as $category )
<option value="{{$category->id}}">{{$category->categoryName}}</option>
  
@endforeach
</select>
</div>

    <div class="checkbox">
      <label><input type="checkbox" name="published">{{ __('messages.Published') }} </label>
    </div>
    <button type="submit" class="btn btn-default">{{ __('messages.Add') }}</button>
  </form>
</div>

</body>
</html>
