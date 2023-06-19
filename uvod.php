<?php 
    $nadpisDocument = "Úvod";
    $activeLink = "uvod";
    include 'header.php';
?>
<div class="containerDomena">
<div class="uvodMain">
    <h1>VYHĽADAJTE DOSTUPNÚ DOMÉNOVÚ ADRESU</h1>
    <form method="post" class="domenaForm">
        <div class="searchBar">
        <input type="text" name="domena" placeholder="Sem zadajte doménu ...">
        <button name="domenaBTN">VYHĽADAŤ</button>
        </div>
        <div class="checkboxes">
            <div>
            <input type="checkbox" name="eu" id="">
            <label for="eu">.eu (10€/yr)</label>            
            </div>
            <div>
            <input type="checkbox" name="sk" id="">
            <label for="sk">.sk (12€/yr)</label>            
            </div>
            <div>
            <input type="checkbox" name="com" id="">
            <label for="com">.com (8€/yr)</label>            
            </div>
        </div>
    </form>
</div>
</div>
<div class="container" >
    <div class="sluzby">
        <p style="color: var(--tirkisova); font-weight:500;">Hostingové služby</p>
        <h2>Poskytujeme tie najlepšie služby</h2>
        <p style="color: var(--siva);">V prvom rade sú to dedikované servery, kde ide o prenájom hardvéru, prinášame však aj komplexné riešenie – manažované servery, čo je v praxi prenájom hardvéru + jeho kompletná administrácia. Využívame výhradne kvalitný značkový serverový hardvér od spoločnosti ŠIOV.</p>
        <div class="karty">
            <div class="karta">
                <div class="ikon">
                <i class="fa fa-database"></i>
                </div>
                <h3>Light Cloud</h3>
                <p>Prenechajte starosti s obstaraním a správou servera, administráciou operačného systému, zálohovaním, monitoringom a zabezpečením systému na nás.
</p>
            </div>
            <div class="karta">
                <div class="ikon">
                <i class="fa fa-database"></i>
                </div>
                <h3>Manažovateľný VPS Cloud</h3>
                <p>Server vám pripravíme na mieru a zaistíme všetky okolnosti jeho prevádzky. Na vás zostáva iba zadávanie požiadaviek cez jednoduchú administráciu. V prípade záujmu nás <span style="color: var(--tirkisova);">kontaktujte</span>.
</p>
            </div>
            <div class="karta">
                <div class="ikon">
                <i class="fa fa-database"></i>
                </div>
                <h3>Dedikované Servery
</h3>
                <p>Virtuálny server vám už nestačí alebo nechcete mať dáta umiestnené na serveroch, kde majú dáta aj iní zákazníci? Potom nastal ten správny čas na obstaranie fyzického dedikovaného servera.
</p>
            </div>
        </div>
    </div>    
</div>
<div class="konfiguraciaContainer">
    <div class="configuration">
    <div class="popis">
        <h1>Konfigurácia Cloud Hostingu</h1>
        <p>Vyberte si z našich štandardných konfigurácií alebo nám napíšte o individuálnu ponuku
    </p>
    </div>
    <?php include 'modal.php' ?>
    <div class="cards" id="cards">
        <?php 
        $i = -1;
        $select = "select * from offers where id != 0;";
        $result = mysqli_query($conn,$select);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $i++;
                $sluzby = explode(";",$row['sluzby']);
                ?>
                <div class="card">
            <h3><?php echo $row['nazov']?></h3>
            <div class="cena <?php if($i%2 == 1) echo "fancyBG";?>">
                <h2><?php echo $row['cena']?>€</h2>
                <h5>MESAČNE</h5>
            </div>
            <p class="this"><?php echo $row['popis']?></p>
            <?php 
                foreach($sluzby as $sluzba){?>
                    <div class="sluzbaIcon"><i class="fa fa-check"></i><p><?php echo $sluzba ?></p></div>
                <?php
                }
                $rowID = $row['id']
            ?>            
           <a href="<?php if(!isset($_SESSION['userID'])) echo "login.php"; else echo "uvod.php?modal=$rowID"?>" class="vyber <?php if($i%2 == 0) echo "normal"; else echo "fancy"; ?>">VYBRAŤ CLOUD</a>
        </div>
                <?php
            }
        }
        ?>         
        
    </div>
    </div>
</div>

<?php 
    include 'napisali.php';
    include 'footer.php';
?>