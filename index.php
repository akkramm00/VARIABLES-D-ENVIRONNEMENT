<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
$dbhost = $_ENV['DB_HOST'] ='localhost';
$dbname = $_ENV['DB_NAME'] ='env';
$dbuser = $_ENV['DB_USER'] ='admin';
$dbpassword = $_ENV['DB_PASSWORD'] ='admin';

try{
  $pdo = new PDO("mysql:$dbhost; dbname:$dbname" , $dbuser, $dbpassword );
  echo "<br>";
  echo "Vonnexion à la base de données" ;
}
  catch (PDOException $e) {

    echo "Erreur de connexion à la base de données" . $e -> getMessage();
  }
?> 


  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>