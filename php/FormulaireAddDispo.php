<?php ?>
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

    <form action="verification.php" method="POST">
        <h1>CONNECTION</h1>

        <label>Date</label>
        <input id="date" type="date" value="2022-04-01">


        <label></label>Time</label>
        <input type="time" id="appt" name="appt" required>

        <input type="submit" id='submit' value='LOGIN' >

        <?php
        if(isset($_GET['erreur'])){
            $err = $_GET['erreur'];
            if($err==1 || $err==2)
                echo "<p style='color:red'>Incorrect user or password</p>";
        }
        ?>
    </form>
</div>
</body>
</html>
