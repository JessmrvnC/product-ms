<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Product</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/vintage.css') }}">
</head>
<body>

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">

<div class="card-header">
<h3>Add New Product</h3>
</div>

<div class="card-body">

@if($errors->any())
<div class="alert alert-danger">
<ul class="mb-0">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST">
@csrf

<div class="mb-3">
<label class="form-label">Product Name</label>
<input type="text" class="form-control" name="name" required>
</div>

<div class="mb-3">
<label class="form-label">Category</label>
<input type="text" class="form-control" name="category" required>
</div>

<div class="mb-3">
<label class="form-label">Price</label>
<input type="number" step="0.01" class="form-control" name="price" required>
</div>

<div class="mb-3">
<label class="form-label">Stock</label>
<input type="number" class="form-control" name="stock" required>
</div>

<div class="d-flex justify-content-between">
<a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
<button type="submit" class="btn btn-primary">Create Product</button>
</div>

</form>

</div>
</div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>