<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMART BRAIN</title>
  <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <?php
  include("header.php ")
  ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner">
          <div class="item active" data-bs-interval="100">
            <img src="https://media.discordapp.net/attachments/395913722960281600/1004950922738290798/unknown.png?width=1178&height=662" style="width:1586px" height="615px">
          </div>
    
          <div class="item" data-bs-interval="100">
            <img src="https://media.discordapp.net/attachments/395913722960281600/1004952270724681818/unknown.png?width=1178&height=662" style="width:1586px" height="615px">
          </div>
        
          <div class="item" data-bs-interval="100">
            <img src="https://media.discordapp.net/attachments/395913722960281600/1004952393076719687/unknown.png?width=1178&height=662" style="width:1586px" height="615px">
          </div>
        </div>
  
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  <?php
  include("footer.php ")
  ?>



</body>
</html>