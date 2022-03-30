<?php ?>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->

            <form action="verification.php" method="POST">
                <h1>CONNECTION</h1>

                <label>Email</label>
                <input type="text" placeholder="Enter user email" name="username" required>

                <label></label>Password</label>
                <input type="password" placeholder="Enter the password" name="password" required>

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
