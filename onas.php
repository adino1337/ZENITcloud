<?php 
    $nadpisDocument = "O nás";
    $activeLink = "onas";
    include 'header.php';?>
<div class="loginContainer">
    <h1>O nás</h1>
    <p>Úvod / O nás</p>
</div>
<div class="aboutContainer">
    <div class="img">
        <img src="images/our-team.jpg" alt="ourTeam">
    </div>
    <div class="text">
        <div>
        <h5>O nás</h5>
        <h1>O našej spoločnosti</h1>
        <p>Na trhu pôsobíme od roku 1985. Začali sme ako nadšenci a neskôr sme vybudovali obrovskú značku, ktorá disponuje spoľahlivou infraštruktúrou zahŕňajúcou tri veľké dátové centrá rozdelené na viaceré lokácie a tímom administrátorv, ktorí na všetko dohliadajú.</p>
        </div>
        <div class="line"></div>
        <div>
            <div style="display: flex; gap: 30px;">
            <h4 id="historyBTN" class="activeH4">Naša história v skratke</h4>
            <h4 id="futureBTN">Čo bude ďalej?</h4>
            </div>
            <div id="history" class="aboutPassive aboutActive">
                <p>1985: Náš prvý server v Piešťanoch – SPŠE</p>
                <p>1988: Druhý server v Nižnej – SOUE</p>
                <p>1992: Tretí server v Prešove – SPŠE</p>
                <p>od 1996: poriadne sme sa do toho opreli a každý rok pribúda nový server (Stará Turá, Košice, Liptovský Hrádok, Banská Bystrica, Bratislava, Martin, Komárno, ...)</p>
                <p>2022: Vo februári 2023 plánujeme spustiť najnovší server v Bratislave – SOŠT</p>
            </div>
            <div id="future" class="aboutPassive">
                <p>Veríme, že naša nová služba urobí revolúciu v poskytovaní webhostingu. To že nie ste obmedzení počtom domén, databáz a emailov vám dáva slobodu, ktorú nemá žiaden poskytovateľ webhostingu na svete.</p>
                <p>V spojení s dobrou cenou a profesionálnou podporou Vám poskytneme Najlepší webhosting na trhu!</p>
            </div>
        </div>

    </div>
</div>
<?php 
    include 'napisali.php';
    include 'footer.php';
?>