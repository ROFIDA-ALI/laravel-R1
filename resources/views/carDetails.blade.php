<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Car Details</h2>
  
  <div class="alert alert-success">
  Car title: {{  $car->carTitle }}
    
  </div>
 
   <div class="alert alert-success">
   Car Description: {{  $car->description }}

  </div>
  <div class="alert alert-success">
    Car Category: {{  $car->category->categoryName }} 
 </div>
  <div class="alert alert-success">
  Car image:             <img src="{{ asset ('assets/images/'.$car->image)}}" width ="70px" alt="image">

    
  </div>
 
  </div>

</body>
</html>
//category is the method in Car model belong
