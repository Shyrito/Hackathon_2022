<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/css.css" rel="stylesheet">
    <title>Deloitte</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.jpg">
</head>
<body>
<main id="offre">
    <h1>Job offer</h1>
    <?
    // include("Mail.php") ;
    // use Hackathon\Mail;
    // ?>
    <?php

    include('../inc/db_CANDIDATE.inc.php');


    include('../inc/db_JOB_OFFER.inc.php');

    include('../inc/db_APPLICATION.inc.php');


    use Application\Applicationdb;


    use Job\Jobbb;
    use Candidate\Candidatedb;

    $id = 2;
    $job=Jobbb::getAllJobWithId($id);
    foreach ($job as $key) {
        echo "<h2>$key->title</h2>";

        echo "<article>";
        echo "<p>$key->job_start</p>";
        echo "</article>";
        echo "<article>";
        echo "<p>Challenges</p>";
        echo "<p>$key->challenges</p>";
        echo "</article>";
        echo "<article>";
        echo "<p>Description</p>";
        echo "<p>$key->description</p>";
        echo "</article>";
        echo "<article>";
        echo "<p>Contract type</p>";
        echo "<p>$key->contract_type</p>";
        echo "</article>";

    }
    ?>
    <h2>Name</h2>

    <?php
    if(!isset($_POST['submit'])){
        ?>
        <h2>Validate the candidates</h2>

        <form action="offerValidate.php" method="POST">
            <fieldset>
                <legend>Gender</legend>
                <ul class="filter">
                    <li>
                        <input type="radio" name="choiceGender" value="m"/>
                        <label for="reponse-1">Male</label>
                    </li>
                    <li>
                        <input type="radio" name="choiceGender" value="f" />
                        <label for="reponse-2">Women</label>
                    </li>

                    <li>
                        <input type="radio" name="choiceGender" value="x" />
                        <label for="reponse-3">Other</label>
                    </li>

                </ul>
            </fieldset>

            <fieldset>
                <legend>Grade</legend>
                <ul class="filter">
                    <li>
                        <input type="radio" name="choiceGrade" value="Bachelor" />
                        <label for="reponse-4">Bachelor</label>
                    </li>
                    <li>
                        <input type="radio" name="choiceGrade" value="Master" />
                        <label for="reponse-5">Master</label>
                    </li>

                    <li>
                        <input type="radio" name="choiceGrade" value="Post-Master"/>
                        <label for="reponse-6">Post-Master</label>
                    </li>

                    <li>
                        <input type="radio" name="choiceGrade" value="Doctorate" />
                        <label for="reponse-7">Doctorate</label>
                    </li>

                    <li>
                        <input type="radio" name="choiceGrade" value="Other" />
                        <label for="reponse-8">Other</label>
                    </li>



                </ul>
            </fieldset>
            <input type="submit" id="valider" name="valider" value="Filter" >
        </form>


        <?php
        $id = 2;
        $choiceGender = null;
        $choiceGrade = null;
        if(isset($_POST['valider'])) {

            if(isset($_POST['choiceGender'])){
                $choiceGender = $_POST['choiceGender'];

            }
            if(isset($_POST['choiceGrade'])){
                $choiceGrade = $_POST['choiceGrade'];


            }

            $set = Applicationdb::getAllApplicationWithUserIdFilter($id,$choiceGender,$choiceGrade);

        } else {

            $set = Applicationdb::getAllApplicationWithUserId($id);
        }



        echo "<form class = \"inscription\" action=\"\" method=\"POST\">";
        foreach ($set as $key ){
            echo "<div id='validateApp'>";
            echo "<p>$key->firstname $key->lastname</p>";
            echo "<p>Motivation : $key->motivation</p>";

            echo "<input type=\"submit\" id='submit' value='Ask $key->firstname $key->lastname for an appointment' >";
            echo "<input type=\"submit\" id='submit'  value='Delete and thanks $key->firstname $key->lastname' >";
            echo "<a href=\"../img/CV_Gilles_Kerstenne_Avec_stage_Final.pdf\">Voir son CV</a>";
            echo "</div>";
        }
        echo "</form>";
        ?>



        <?php
    }else{
        $emailToSend = htmlentities($_POST['email']);
        $sujet = "Offre Deloitte";// htmlentities($_POST['Sujet']);
        $content ="Vous avez postulé pour une offre";
        // $mail = new Mail();
        // $m = "";
        // $mail::envoyerMail($emailToSend,$sujet,$content,$m);
        // if(strlen($m)>1){
        //     echo $m;
        // }else{
        //     echo "le message a bien été envoyé";
        // }
        echo "le message a bien été envoyé";
        $email=htmlentities($_POST['email']);
        $firstname=htmlentities($_POST['firstName']);
        $lastname=htmlentities($_POST['name']);
        $phone_number=htmlentities($_POST['phone']);

        $cvpath='test';

        $test = Candidatedb::insertCandidate($email,$firstname,$lastname,$phone_number,$cvpath);

    }
    ?>
</main>
</body>
</html>
