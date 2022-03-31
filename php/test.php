


<?php



include('../inc/db_JOB_OFFER.inc.php');

use Job\Jobbb;
$id = 2;
$test=Jobbb::getAllJobCount();
echo "<p>$test</p>";


?>

<?php

include('../inc/db_CANDIDATE.inc.php');

use Candidate\Candidatedb;
?>
