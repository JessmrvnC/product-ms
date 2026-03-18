<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product List</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/vintage.css') }}">
</head>

<body>
<div class="container mt-5">

<div class="row mb-4">
<div class="col">
<h1>Product List</h1>
</div>

<div class="col text-end">
<a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>
</div>
</div>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show">
{{ session('success') }}
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

<div class="card">
<div class="card-body">

<table class="table table-striped table-hover">

<thead>
<tr>
<th>Name</th>
<th>Category</th>
<th>Price</th>
<th>Stock</th>
<th>Actions</th>
</tr>
</thead>

<tbody>
@forelse($products as $product)
<tr>
<td>{{ $product->name }}</td>
<td>{{ $product->category }}</td>
<td>{{ $product->price }}</td>
<td>{{ $product->stock }}</td>

<td>
<a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info">View</a>

<a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>

<form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
@csrf
@method('DELETE')

<button type="submit" class="btn btn-sm btn-danger"
onclick="return confirm('Are you sure?')">
Delete
</button>
</form>
</td>

</tr>
@empty
<tr>
<td colspan="5" class="text-center">No products found.</td>
</tr>
@endforelse
</tbody>

</table>

<div class="d-flex justify-content-center mt-3">
{{ $products->links('pagination::bootstrap-5') }}
</div>

</div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>