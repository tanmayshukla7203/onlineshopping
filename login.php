<html>
<head>
<title>form</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-lg-6">
    <h2>login form</h2>
    <form action="validation.php" method="post">
<div class="form-group">
<label>username</label>
<input type="text" name="user" class="form-control">
</div>
<div class="form-group">
<label>password</label>
<input type="password" name="password" class="form-control">

</div>
<button type="submit" class="btn btn-primary"> Login</button>
</form>
</div>
<div class="col-lg-6">
    <h2>sign-in form</h2>
<form action="registration.php" method="post">
<div class="form-group">
<label>username</label>
<input type="text" name="user" class="form-control">
</div>
<div class="form-group">
<label>password</label>
<input type="password" name="password" class="form-control">

</div>
<button type="submit" class="btn btn-primary"> signin</button>
</form>
</div>


</div>
</div>
</body>
</html>