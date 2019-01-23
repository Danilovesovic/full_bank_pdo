<?php session_start(); ?>
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
      <h2>Edit account</h2>
    <a href="accounts.php" class="btn btn-primary">Accounts</a>
    <a href="add.account.view.php" class="btn btn-info">Add Account</a>
    <a href="editDelete.php" class="btn btn-warning">Edit/Delete</a>
  </div>

<div class="container">
  <div class="row">
    <div class="col-6 offset-3">
      <form action="editAccountDb.php" method="post">
        <input type="text" name="name" class="form-control" value="<?php echo $account->name ?>"><br>
        <input type="text" name="deposit" class="form-control" value="<?php echo $account->deposit ?>" ><br>
        <input type="text" name="cCard" class="form-control"  value="<?php echo $account->cCard ?>"><br>
        <input type="hidden" name="worker_id" value="<?php echo $_SESSION['id'] ?>" ><br>
        <input type="hidden" name="id" value="<?php echo $account->id ?>" ><br>
        <button type="submit" name="sub" class="form-control btn btn-success">Edit</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
