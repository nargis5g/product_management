<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container mt-5">
    

  
        <div class="row">
            <div class="col-md-12">

           
             
           
            <div class="card bg-secondary text-white p-3 m-3">
                <p>product Id : {{$products->product_id}}</p>
            </div>
            <div class="card bg-secondary text-white p-3 m-3">
                <p>product Name : {{$products->name}}</p>
            </div>
            <div class="card bg-secondary text-white p-3 m-3">
                <p>product Description : {{$products->description}}</p>
            </div>
            <div class="card bg-secondary text-white p-3 m-3">
                <p>product Price : {{$products->price}}</p>
            </div>
            <div class="card bg-secondary text-white p-3 m-3">
                <p>product Stock: {{$products->stock}}</p>
            </div>
            <div class="card bg-secondary text-white p-3 m-3">
                <p>product image: <img src="{{$products->image}}" ></p>
            </div>
         
          

          
            </div>

            <p class="mt-3">
             <a class="btn btn-primary " href="{{route('products.index')}}"><span class="glyphicon glyphicon-plus"></span> See All Product</a>
           </p>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>