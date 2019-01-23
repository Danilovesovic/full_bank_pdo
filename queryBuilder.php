<?php
/**
 *
 */
class QueryBuilder
{
  private $pdo;

  function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function getAll()
  {
    $sql = $this->pdo->prepare('select * from bank');
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_OBJ);
  }
  public function logWorker($username,$password)
  {
    $sql = $this->pdo->prepare("select id from workers where username='$username' AND password='$password'");
    $sql->execute();
    $id = $sql->fetch()['id'];
    session_start();
    $_SESSION['id'] = $id;
    if($id){
      return true;
    }else{
      return false;
    }
  }
  public function isLog()
  {
    session_start();
    if (isset($_SESSION['id'])) {
      return true;
    } else {
      return false;
    }

  }
  public function addAccount($name,$deposit,$cCard,$worker_id)
  {
    $sql = $this->pdo->prepare("insert into bank values(NULL,'$name',$deposit,'$cCard','$worker_id')");
    $sql->execute();
  }
  public function deleteAccount($id)
  {
    $sql = $this->pdo->prepare("delete from bank where id=$id");
    $sql->execute();
  }
  public function getOne($id)
  {
    $sql = $this->pdo->prepare("select * from bank where id=$id");
    $sql->execute();
    return $sql->fetch(PDO::FETCH_OBJ);
  }
  public function editAccount($id,$name,$deposit,$cCard,$worker_id)
  {
    $sql = $this->pdo->prepare("update bank set name='$name',deposit=$deposit,cCard='$cCard',created=$worker_id where id=$id");

    $sql->execute();
    // dd($sql);
  }
}


return $db = new QueryBuilder(Connection::make());
 ?>
