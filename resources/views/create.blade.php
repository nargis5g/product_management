<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container">
        <div class="row">
            <div class="col-md-12">


            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
           
            <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="mb-3 form-control">
                <label for="product_id" class="form-label">Product Id</label>
                <input type="text"  id="product_id" placeholder="product id" name="product_id" class="form-control"  >
                </div>

                <div class="mb-3 form-control">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text"  id="product_name" placeholder="Type Product Name" name="name" class="form-control" >
                </div>
                <div class="mb-3 form-control">
                <label for="product_des" class="form-label">Product Description</label>
                <input type="text"  id="product_des" placeholder="Type Product Description" name="description" class="form-control">
                </div>
                <div class="mb-3 form-control">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="number"  id="product_price" placeholder="Type Product Description" name="price" class="form-control">
                </div>

                <div class="mb-3 form-control">
                <label for="product_stock" class="form-label">Product Stock</label>
                <input type="number"  id="product_stock" placeholder="Type Product stock" name="stock" class="form-control">
                </div>

                
                

                <div class="mb-3 form-control">
                  <label for="image">Product Image</label>
                  <input type="file" class="form-control-file" id="image" name="image">
                </div>
                
                <button type="submit" class="btn btn-primary">Add product</button>
            </form>


            <p class="mt-3">
             <a class="btn btn-primary " href="{{route('products.index')}}"><span class="glyphicon glyphicon-plus"></span> See All Product</a>
           </p>
           

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


<!-- echo "# product_management" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/nargis5g/product_management.git
git push -u origin main -->