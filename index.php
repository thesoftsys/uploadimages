<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upload Images</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm-3 "></div>
		<div class="col-sm-6 ">
			<h2>Upload Image</h2>
			  <form action="code.php?flag=1" method="POST" enctype="multipart/form-data">
			    <div class="form-group">
			      <label for="email">Choose Images:</label>
			      <input type="file" class="form-control"  name="img" autocomplete="off" required="required">
			    </div>
			    <div class="form-group">
			      <label for="pwd">Choose Language:</label>
			      <select class="form-control" name="language">
			      	<option>Hindi</option>
			      	<option>English</option>
			      	<option>Urdu</option>
			      </select>
			    </div>
			    
			    <button class="btn btn-primary">Submit</button>
			  </form>
		</div>
		<div class="col-sm-3 "></div>
  </div>
</div>

</body>
</html>
