<<<<<<< HEAD
<<<<<<< HEAD
<?php 
    // Development Connection
    // $host = '127.0.0.1';
    // $db = 'attendance_db';
    // $user = 'root';
    // $pass = '';
    // $charset = 'utf8mb4';


  // Remote Database Connection
    $host = 'remotemysql.com';
    $db = 'BwU31vnPCr';
    $user = 'BwU31vnPCr';
    $pass = 'OM6Cljygzr';
    $charset = 'utf8mb4';

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

  try{
      $pdo = new PDO($dsn, $user, $pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {
      throw new PDOException($e->getMessage());
  }

  require_once 'crud.php';
  require_once 'user.php';
  $crud = new crud($pdo);
  $user = new user($pdo);
 
  $user->insertUser("admin","password");

<?php 
    // Development Connection
   //  $host = '127.0.0.1';
   //  $db = 'attendance_db';
   //  $user = 'root';
  //   $pass = '';
   //  $charset = 'utf8mb4';


   //Remote Database Connection
    $host = 'remotemysql.com';
    $db = 'BwU31vnPCr';
    $user = 'BwU31vnPCr';
    $pass = 'OM6Cljygzr';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
   // require_once 'user.php';
    $crud = new crud($pdo);
  //  $user = new user($pdo);
   
  //  $user->insertUser("admin","password");
?>
>>>>>>> 6839bf1c78d62daf7aae03c63f2a8a27650c3a44
=======
<?php 
    // Development Connection
    // $host = '127.0.0.1';
    // $db = 'attendance_db';
    // $user = 'root';
    // $pass = '';
    // $charset = 'utf8mb4';


  // Remote Database Connection
    $host = 'remotemysql.com';
    $db = 'BwU31vnPCr';
    $user = 'BwU31vnPCr';
    $pass = 'OM6Cljygzr';
    $charset = 'utf8mb4';

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

  try{
      $pdo = new PDO($dsn, $user, $pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {
      throw new PDOException($e->getMessage());
  }

  require_once 'crud.php';
  require_once 'user.php';
  $crud = new crud($pdo);
  $user = new user($pdo);
 
  $user->insertUser("admin","password");
>>>>>>> a5b0d482684611b45a36c4e8c6f5f830d92405bd
