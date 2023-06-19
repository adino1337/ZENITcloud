<?php
    if(isset($_GET['modal'])){        
        $id = $_GET['modal'];  
        $userID = $_SESSION['userID'];
        $update = "UPDATE `users` SET `offerID` = '$id' WHERE `users`.`id` = '$userID';";
        mysqli_query($conn,$update);
        $select = "SELECT nazov, cena FROM offers WHERE id = $id";
        $result = mysqli_query($conn, $select);
        
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                ?>
                    <div class="modal">
                        <div class="fajka"><i class="fa fa-check"></i></div>
                        <h1><?php echo $row['nazov']?></h1>
                        <h3><?php echo $row['cena']?>€</h3>
                        <p>Nastavená ako hlavná ponuka</p>
                        
                        <a href="uvod.php">
                        <div class="buttonOK">OK</div>
                        </a>
                        
                    </div>
                <?php
                            }
        }            
?>