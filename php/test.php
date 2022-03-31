


<?php



include('../inc/db_JOB_OFFER.inc.php');

use Job\Jobbb;
$id = 2;
$test=Jobbb::getAllJobWithId($id);
foreach ($test as $key) {
echo "<p>$key->title</p>";
}

?>

<?php

include('../inc/db_CANDIDATE.inc.php');

use Candidate\Candidatedb;


?>
