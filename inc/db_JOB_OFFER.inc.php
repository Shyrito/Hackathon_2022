<?php


namespace Job;

require_once '../inc/db_link.inc.php';

use DB\DBLink;
use http\Exception;
use PDO;


setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
class Job
{

}
class Jobbb{

  const TABLE_NAME = 'JOB_OFFER';




    public function getAllJob()
    {
      $result = array();

      $bdd = null;
      try {
          $bdd = DBLink::connect2db(MYDB, $message);
          $result = $bdd->query("SELECT * FROM " . self::TABLE_NAME . "", PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Job\Job");
      } catch (Exception $e) {
          $message .= $e->getMessage() . '<br>';
      }
      DBLink::disconnect($bdd);
      return $result;
    }

    public function getAllJobWithId($id)
    {
      $result = array();

      $bdd = null;
      try {
          $bdd = DBLink::connect2db(MYDB, $message);
          $result = $bdd->query("SELECT * FROM " . self::TABLE_NAME . "where id_job_offer = '$id' ", PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "USERS\USERS");
      } catch (Exception $e) {
          $message .= $e->getMessage() . '<br>';
      }
      DBLink::disconnect($bdd);
      return $result;
    }





}

?>
