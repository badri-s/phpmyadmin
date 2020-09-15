<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container  card">
		<form method="POST" action="check_login.php">
		  <div class="form-group">
		    <label for="exampleInputEmail1">id</label>
		    <input type="text" class="form-control" id="exampleInputId" aria-describedby="emailHelp" placeholder="Enter id" name="id">
		    
		  </div>
		  <div class="form-group">
		    <label for="exampleInputProductName">product_name</label>
		    <input type="text" class="form-control" id="exampleInputProductName" placeholder="product_name" name="product_name">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputDescription">description</label>
		    <input type="text" class="form-control" id="exampleInputDescription" placeholder="description" name="description">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputCreatedAt">created_at</label>
		    <input type="text" class="form-control" id="exampleInputCreatedAt" placeholder="created_at" name="created_at">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>