<?php
    $nadpisDocument = "Registrácia";
    include 'header.php';
?>
<div class="loginContainer">
    <h1>Registrácia nového uživateľa</h1>
    <p>Úvod / Registrácia</p>
</div>
<?php include 'errors.php' ?>
<div class="loginForm">
        <form method="POST">
                <input type="text" name="usernameR" placeholder="Vaša prihlasovacie meno/email" required>
                <input type="password" name="passwordR" placeholder="Vaše prihlasovacie heslo" required>
                <input type="password" name="passwordR2" placeholder="Zopakujte heslo" required>
                <button class="prihlasitBTN" name="submitR">REGISTOVAŤ</button>
        </form>
    </div> 


    

<?php 
    include 'napisali.php';
    include 'footer.php';
?>