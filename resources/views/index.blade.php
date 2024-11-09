<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Management Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container mt-5">
      <div class="row">

      @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

      <div class="col-md-4 mb-3">
       
        <strong>Sort By:</strong>
        <a href="{{ route('products.index', ['sort_by' => 'name', 'sort_order' => (request('sort_by') == 'name' && request('sort_order') == 'asc') ? 'desc' : 'asc']) }}" class="btn btn-success">
            Sort by Name ({{ request('sort_by') == 'name' && request('sort_order') == 'asc' ? 'Descending' : 'Ascending' }})
        </a>
       
      </div>

      <div class="col-md-4 mb-3">
      
        <a href="{{ route('products.index', ['sort_by' => 'price', 'sort_order' => (request('sort_by') == 'price' && request('sort_order') == 'asc') ? 'desc' : 'asc']) }}" class="btn btn-success">
            Sort by Price ({{ request('sort_by') == 'price' && request('sort_order') == 'asc' ? 'Descending' : 'Ascending' }})
        </a>

    
      </div>
      
        

  
    
     <div class="col-md-4 mb-3">
        @include('search_form')

        </div>
</div>

<div class="row">
<div class="col-md-3">     <p>
    <a class="btn btn-primary mb-3" href="{{route('products.index')}}"><span class="glyphicon glyphicon-plus"></span> All Product</a>
     </p>  </div>
    
     <p>
    <a class="btn btn-success " href="{{route('products.create')}}"><span class="glyphicon glyphicon-plus"></span> Add Product</a>
     </p> 
       
</div>
  
        <div class="row">
            <div class="col-md-12">

           
             
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">SN</th>
                    <th scope="col">product id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Image</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Details</th>
                    
                    </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                   <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td >{{$product->product_id}}</td>
                    <td >{{$product->name}}</td>
                    <td >{{$product->description}}</td>
                    <td >{{$product->price}}</td>
                    <td >{{$product->stock}}</td>
                    <td ><img src="{{ $product->image }}" /> </td>
                    <td ><a href="{{route('products.edit',$product->id)}}">Edit</a></td>
                    <td ><a href="{{route('products.delete',$product->id)}}">Delete</a></td>
                    
                    <td ><a href="{{route('products.details',$product->id)}}">Details</a></td>
                    
                    </tr>

                    @empty
                    <td colspan="9" class="text-center text-danger">this product is not valid</td>
                    
                   @endforelse
                    
                    
                    
                </tbody>
            </table>

            {{$products->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>








 




 README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/nargis5g/laravel_product.git
git push -u origin main