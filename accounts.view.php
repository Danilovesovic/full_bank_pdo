<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Accounts </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
  <div class="jumbotron text-center">
    <h2>Bank App</h2>
    <a href="accounts.php" class="btn btn-primary">Accounts</a>
    <a href="add.account.view.php" class="btn btn-info">Add Account</a>
    <a href="editDelete.php" class="btn btn-warning">Edit/Delete</a>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2">
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Deposit</th>
              <th>Credit Card</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($result as $account): ?>
              <tr>
                <td><?php echo $account->name ?></td>
                <td><?php echo $account->deposit ?></td>
                <td><?php echo $account->cCard ?></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
