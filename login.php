<?php 
    $nadpisDocument = "Prihlásenie";
    include 'header.php';
?>
<div class="loginContainer">
    <h1>Prihlásenie uživateľa</h1>
    <p>Úvod / Prihlásenie</p>
</div>
<?php include 'errors.php' ?>

    <div class="loginForm">
        <form method="POST">
                <input type="text" name="usernameL" placeholder="Vaša prihlasovacie meno/email" required>
                <input type="password" name="passwordL" placeholder="Vaše prihlasovacie heslo" required>
                <button class="prihlasitBTN" name="submitL">Login</button>
        </form>
    </div>        
    

<?php 
    include 'napisali.php';
    include 'footer.php';
?>