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
        <h1>Product Create</h1>

        <form action="{{ route('product-store') }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="mb-3" >
                <label for="product_id" class="form-label">Product Id</label>
                <input type="text" class="form-control" name="product_id" placeholder="Enter Product Id">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Product Name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Product Description</label>
                <textarea class="form-control" name="description" placeholder="Enter Product description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Product Price</label>
                <input type="number" class="form-control" name="price" placeholder="Enter Product price">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Product Stock</label>
                <input type="number" class="form-control" name="stock" placeholder="Enter Product stock">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="mb-3">
              <button class="btn btn-primary">Submit</button>
            </div>
        </form>









       </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>