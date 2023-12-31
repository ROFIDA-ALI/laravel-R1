<!DOCTYPE html>
<html lang="en">
<head>
  <title>Posts</title>
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
        <th>content</th>
        <th>author</th>
        <th>published</th>
        <th>Edit</th>
        <th>SHOW</th>

         <th>Delete</th>

      </tr>
    </thead>
    <tbody>      //posts in controller index
        @foreach($posts as $post)  

      <tr>
        <td>{{$post->title}}</td>      
        <td>{{$post->content}}</td>
        <td>{{$post->author}}</td>

        @if( $post->published=== 1)
        <td > Yes👍</td>
        @else
        <td > No 👎</td>

        @endif
</td>
<td><a href="editpost/{{$post->id}}">Edit</a></td>
<td><a href="postDetails/{{ $post->id }}">Show</a></td>

<td><a href="deletePost/{{$post->id}}">Delete</a></td>


      </tr>
      @endforeach
        </tbody>
  </table>
</div>

</body>
</html>
