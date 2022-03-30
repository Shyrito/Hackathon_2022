<?php


namespace USERS;

require_once '../inc/db_link.inc.php';

use DB\DBLink;
use http\Exception;
use PDO;


setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
class USERS
{

}
class Candidate{

  const TABLE_NAME = 'USERS';




    public function getAllMail($email)
    {
      $result = array();

      $bdd = null;
      try {
          $bdd = DBLink::connect2db(MYDB, $message);
          $result = $bdd->query("SELECT * FROM " . self::TABLE_NAME . " WHERE email = '$email' ", PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "USERS\USERS");
      } catch (Exception $e) {
          $message .= $e->getMessage() . '<br>';
      }
      DBLink::disconnect($bdd);
      return $result;
    }





}

?>
