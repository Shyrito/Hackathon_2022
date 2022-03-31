<?php ?>
<html>
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

<header>
    <a id="home-button" href="index.html"><img src="../img/black-deloitte.png" alt="Accueil" width="15%" height="100%"></a>

    <nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="nav bar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Change me</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbars02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Change me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Change link</a>
                    </li>
                </ul>
                <form>
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>

</header>

    <body>
        <div id="container">
            <!-- zone de connexion -->

            <form action="mainPage.php" method="POST">
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
