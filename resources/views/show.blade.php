<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <h1>Product Details</h1>
       
            <div class="mb-3" >
                <label for="product_id" class="form-label">Product Id</label>
                <p class="border border-secondary-subtle p-2" >{{ $showProduct->product_id }}</p>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <p class="border border-secondary-subtle p-2" > {{ $showProduct->name }} </p>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Product Description</label>
               <div class="border border-secondary-subtle p-2" >{!! $showProduct->description !!}</div>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Product Price</label>
                <p class="border border-secondary-subtle p-2" >{{ $showProduct->price }}</p>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Product Stock</label>
                <p class="border border-secondary-subtle p-2" >{{ $showProduct->stock }}</p>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label><br>
                @if ($showProduct->image)
                    <img src="{{ asset('storage/' . $showProduct->image) }}" alt="Product Image" width="100">
                @else
                    <span>No image</span>
                @endif
            </div>
            <div class="mb-3">
              <a href="{{ url('/products') }}" class="btn btn-dark">Back</a>
            </div>
        









       </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>