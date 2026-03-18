<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product Details</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/vintage.css') }}">
</head>

<body>
<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-8">

<div class="card">

<div class="card-header">
<h3>Product Details</h3>
</div>

<div class="card-body">

<table class="table table-bordered">

<tr>
<th width="200">Product Name</th>
<td>{{ $product->name }}</td>
</tr>

<tr>
<th>Category</th>
<td>{{ $product->category }}</td>
</tr>

<tr>
<th>Price</th>
<td>{{ $product->price }}</td>
</tr>

<tr>
<th>Stock</th>
<td>{{ $product->stock }}</td>
</tr>

<tr>
<th>Created At</th>
<td>{{ $product->created_at->format('M d, Y h:i A') }}</td>
</tr>

<tr>
<th>Updated At</th>
<td>{{ $product->updated_at->format('M d, Y h:i A') }}</td>
</tr>

</table>

<div class="d-flex justify-content-between mt-3">

<a href="{{ route('products.index') }}" class="btn btn-secondary">
Back to List
</a>

<div>

<a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">
Edit
</a>

<form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
@csrf
@method('DELETE')

<button type="submit" class="btn btn-danger"
onclick="return confirm('Are you sure you want to delete this product?')">
Delete
</button>

</form>

</div>
</div>

</div>
</div>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>