<!DOCTYPE html>
<html lang="en">
<head>
  <title>Post Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Post Details</h2>
  
  <div class="alert alert-success">
  Post title: {{  $post->title }}
    
  </div>
 
   <div class="alert alert-success">
   Description: {{  $post->content }}

  </div>

  <div class="alert alert-success">
    Author : {{$post->author}}

  </div>
    
  </div>

</body>
</html>