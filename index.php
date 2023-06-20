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


  // COMPOSER: 
  //Composer est un gestionnaire de dépendances qui permet de déclarer des bibliothèques ou packages PHP en configurant les dépendances des packages automatiques. Très utilisé et pratique dans l'univers PHP, dans notre cas nous avons fait appel à dotenv, un package qui facilite la gestion des variables d'environnement. Il accède et charge les informations des variables contenues dans un fichier .env, placé à la racine de notre projet.


  // Cet exemple de code définit les variables d'environnement stockés dans fichier .env.

DB_HOST=localhost//
DB_NAME=nom_de _la_base_de_données;
DB_USER=nom_d_utilisateur ;
DB_PASSWORD=mot_de _passe;

// COMPOSER ET REQUIRE :
// Pour utiliser le package dotenv, il est n"cessaire d'avoir recours à la ligne de code 'require'vendor\autoload.php' qui charge automatiquement les classes et les fichiers des packages installées via Composer. Cela évite d'avoir à inclure chaque class du package dans nos pages php.

//    EXEMPLE:
// => la variable $dorenv instancie la classe Dotenv\Dotven
// => La méthode 'createImmutable() prend en paramétre l'emplacement du répértoire ou est situé le fichier .env et renvoie ine instance de cette classe qui sera utilisée pour charger les variables d'environnement avec la fonction load.

require 'vendor\autoload.php' ;
$dotenv = Dotenv::createImmutable(__DIR__.'/');
$dotenv->load();





  
?> 

   


  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>