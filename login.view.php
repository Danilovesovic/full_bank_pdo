<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron text-center">
  <h2>Enter your credentials</h2>
</div>
<div class="container">
  <div class="row">
    <div class="col-6 offset-3">
      <form action="login.php" method="post">
        <input type="text" name="username" class="form-control" placeholder="username"><br>
        <input type="password" name="password" class="form-control" placeholder="password"><br>
        <button type="submit" name="sub" class="form-control btn btn-primary">Login</button>
      </form> 
    </div>
  </div>
</div>
</body>
</html>
