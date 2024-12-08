<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Teerarak 66222420013</h1>  
    <div class="container">
   

    <div class="row">
        <div class="col-lg-4">
        <a href="gallery/ant" > <img class="img-thumbnail" src= {{ $ant }} /> </a>
        </div>

        <div class="col-lg-4">
        <a href="gallery/bird" > <img class="img-thumbnail" src={{ $bird }} /> </a>
        </div>

        <div class="col-lg-4">
        <a href="gallery/cat" > <img class="img-thumbnail" src={{ $cat }} /> </a>
        </div>

        <div class="col-lg-4">
        <a href="gallery/god" > <img class="img-thumbnail" src={{ $god }} /> </a>
        </div>

        <div class="col-lg-4">
        <a href="gallery/spider" > <img class="img-thumbnail" src={{ $spider }} /> </a>
        </div>

    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>