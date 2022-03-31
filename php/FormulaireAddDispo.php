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
        <input type="time" id="start" name="appt" required>
        <input type="time" id="stop" name="appt" required>

        <input type="submit" id='submit' value='Add' >


    </form>
</div>
</body>
</html>
