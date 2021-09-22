<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <form action="validate.php" method="POST">
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" id="Username">
        </div>
        <div class="form-group">
            <label>Email Address</label>
            <input type="text" class="form-control" id="Email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>
</div>
</body>
</html>


