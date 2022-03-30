<?php
$titre = 'Inscription';
include("inc/headerDeconnecte.inc.php");
use Facetube\Compte;
$compte = new Compte();
?>
<main>
    <h1>Job offer</h1>









    <?php
    if(!isset($_POST['submit'])){
        ?>

        <h2>Start your application</h2>
        <h3>Your data</h3>

        <form  class = "inscription" action="" method="POST">
            <!--  <p> Pour toutes information complémentaires, n'hésitez pas à joindre le propriétaire du site via cette adresse :proprio@gmail.com </p><br> -->
            <label for="firstName">First name (*)</label><input id="firstName" name="firstName" type="text" required  autofocus><br>
            <label for="name">Last name(*)</label><input id="name" name="name" type="text" required  ><br>
            <label for="email">Email adress(*)</label><input id="email" name="email" type="text" required  ><br>
            <label for="phone">Phone number(*)</label><input id="phone" name="phone" type="text" required  ><br>


            <label for="gender">Gender (*)</label>
            <select id="gender" name="raison">
                <option selected>Make your choice</option>
                <option>Female</option>
                <option>Male</option>
                <option>X</option>
                <option>Rather not say</option>
            </select> <br>

            <h3>Experience</h3>
            <label for="education">Education (*)</label>
            <select id="education" name="raison">
                <option selected>Make your choice</option>
                <option>Community college (MBO)</option>
                <option>Bachelor (HBO/WO)</option>
                <option>Master (WO)</option>
                <option>Post-Master</option>
            </select> <br>
            <label for="gradutationDate">(expected) graduation date</label>
            <input type="date" id="gradutationDate" value="2018-07-22" max="2022-04-01" >
            <h3>Upload your documents</h3>
            <p>Upload your files in Word, PDF or pptx format, them maximum size is 10MB</p>
            <label for="resume">Resume</label>
            <input id="resume" type="file" accept=".pdf, .doc, .docx, .pptx"><br>
            <label for="coverletter">Cover letter</label>
            <input id="coverletter" type="file" accept=".pdf, .doc, .docx, .pptx">

            <div>
            <input type="checkbox" id="consent" name="consent">
            <label for="consent">I give Deloitte permission to keep my data for 1 year after completion of my application process. *</label>
            </div>

            <input type="submit" name="submit">

            <p>* You can always request for your personal information to be deleted; read the <a href="https://careersatdeloitte.com/privacy">privacy statement</a> for more information.</p>

        </form>
        <?php
    }else{
        $emailClient = htmlentities($_POST['Emeteur']);
        $sujet = htmlentities($_POST['Sujet']);
        $raison = isset($_POST['raison']) ? htmlentities($_POST['raison']):"Pas de raison spécifiée.(bizzarement)" ;
        $content = htmlentities($_POST['Message']);
        $mail = new Mail();
        $mail->envoyerMailUniversel($emailClient,$sujet,$raison,$content,$m);

        if (strlen($m) > 1) {
            echo "<span class='msgToEcho'>$m</span>";
        }

    }
    ?>
</main>
<?php
include("inc/footer.inc.php");
?>
