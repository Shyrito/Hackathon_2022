<?php
include ('../inc/db_MEETING_SLOT.inc.php');

use Meeting_slot\Meeting_slotdb;

?>
<html>
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link href="../css/css.css" rel="stylesheet">
</head>
<body>
<?php include('../inc/header.inc.php'); ?>
<div id="container">
    <!-- zone de connexion -->


    <?php
    if(!isset($_POST['submit'])){
    ?>
        <form id="middle" class = "inscription" action="" method="POST">
        <h1>CONNECTION</h1>

        <label>Date</label>
        <input id="date" name='date' type="date" value="2022-04-01"><br>


        <label>Time start</label><input id="start" name="start" type="time" ><br>
            <label for="phone">Time end</label><input id="stop" name="stop" type="time" ><br>


        <input type="submit" name="submit" value="Add">



    </form>
        <?php
    }else{

        // $mail = new Mail();
        // $m = "";
        // $mail::envoyerMail($emailToSend,$sujet,$content,$m);
        // if(strlen($m)>1){
        //     echo $m;
        // }else{
        //     echo "le message a bien été envoyé";
        // }

        $date=$_POST['date'];
        $start=$_POST['start'];
        $stop=$_POST['stop'];



        $dateStart = $date. " ". $start.':00';
        $dateStop = $date. " ". $stop.':00';


        $test = Meeting_slotdb::insertMeeting($dateStart,$dateStop);

    }
    ?>
</div>
</body>
</html>
