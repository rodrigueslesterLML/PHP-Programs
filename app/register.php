<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>REGISTER</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
      </div>

      <div class="col">
        <form action="insert.php" method="POST">
          <h2>Please Register</h2>
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="Username">
          </div>
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="Email">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="Password">
          </div>
          <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
        </form>
      </div>

      <div class="col">
      </div>
    </div>
  </div>
</body>
</html>