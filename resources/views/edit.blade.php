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

            @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif


            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
           
            <form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="mb-3 form-control">
                <label for="product_id" class="form-label">Product Id</label>
                <input type="text"  id="product_id" placeholder="product id" name="product_id" class="form-control" value="{{$product->product_id}}" >
                </div>

                <div class="mb-3 form-control">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text"  id="product_name" placeholder="Type Product Name" name="name" class="form-control" value="{{$product->name}}"  >
                </div>
                <div class="mb-3 form-control">
                <label for="product_des" class="form-label">Product Description</label>
                <input type="text"  id="product_des" placeholder="Type Product Description" name="description" class="form-control" value="{{$product->description}}"  >
                </div>
                <div class="mb-3 form-control">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="number"  id="product_price" placeholder="Type Product Description" name="price" class="form-control" value="{{$product->price}}"  >
                </div>

                <div class="mb-3 form-control">
                <label for="product_stock" class="form-label">Product Stock</label>
                <input type="number"  id="product_stock" placeholder="Type Product stock" name="stock" class="form-control" value="{{$product->stock}}"  >
                </div>

                
                

                <div class="mb-3 form-control">
                  <label for="image">Product Image</label>
                  <input type="file" class="form-control-file" id="image" name="image" value="{{$product->image}}" >
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
           

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>