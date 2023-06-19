<?php 
    $nadpisDocument = "Kontakt";
    $activeLink = "kontakt";
    include 'header.php';?>
<div class="loginContainer">
    <h1>Kontaktujte Nás</h1>
    <p>Úvod / Kontakt</p>
</div>
<div class="aboutContainer">
    <div class="contactForm">
        <form method="post">
            <input type="text" name="name" placeholder="Vaše celé meno">
            <input type="email" name="email" placeholder="Vaša emailová adresa">
            <input type="text" name="predmet" placeholder="Predmet správy">
            <textarea name="sprava"  cols="30" rows="10" placeholder="Vaša správa"></textarea>
            <button name="contactSubmit">ODOSLAŤ SPRÁVU</button>
        </form>
    </div>
    <div class="text">
        <div>
        <h5>Kontaktujte Nás</h5>
        <h1>Zostaňme v kontakte</h1>
        <p>Neviete sa rozhodnúť, niečo Vám nefunguje, alebo len potrebujete poradiť? Neváhajte a kontaktujete nás.</p>
        </div>
        <div class="line"></div>
        <div class="contactIcons">
            <div>
            <div class="ikon"><i class="fa fa-phone"></i></div>
            <span>0900-111-222</span>
            </div>
            <div>
            <div class="ikon"><i class="fa fa-envelope"></i></div>
            <span>andrejado40@gmail.com</span>
            </div>
            <div>
            <div class="ikon"><i class="fa fa-life-ring"></i></div>
            <span>support@zcloud.eu</span>
            </div>
            <div>
            <div class="ikon"><i class="fa fa-globe"></i></div>
            <span>https://spst4d.com/</span>
            </div>            
        </div>
    </div>
</div>
<?php 
    include 'napisali.php';
    include 'footer.php';
?>