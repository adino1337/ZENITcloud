<?php 
    $nadpisDocument = "Administrácia";
    include 'header.php';
    if(!isset($_SESSION['admin'])){
        header('location:uvod.php');
    }
    $select = "SELECT users.id, users.login, users.offerID, offers.nazov, users.casPridania 
    FROM users
    JOIN offers on offers.id = users.offerID
    WHERE users.admin = 0  
    ORDER BY `users`.`id`  ASC;
    ";
    $results = mysqli_query($conn, $select);
?>
<div class="loginContainer">
    <h1>Administrácia</h1>
    <p>Úvod / Administrácia</p>
</div>

<div class="table">
    <table>
    <tr>
        <th>ID</th>
        <th>Login</th>
        <th>ID ponuky</th>
        <th>Ponuka</th>
        <th>Čas vytvorenia konta</th>
        <th>Resetovať ponuku</th>
        <th>Odstrániť uživateľa</th>
    </tr>
        <?php 
            if(mysqli_num_rows($results) > 0){
                while($row = mysqli_fetch_assoc($results)){
                    ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>     
                    <td><?php echo $row['login']; ?></td> 
                    <td><?php echo $row['offerID']; ?></td>  
                    <td><?php echo $row['nazov']; ?></td>
                    <td><?php echo $row['casPridania']; ?></td>                 
                    <td class="link"><a href='backend.php?resetid="<?php echo $row['id'] ?>"'>resetovať</a></td>  
                    <td class="link"><a href='backend.php?deleteid="<?php echo $row['id'] ?>"'>odstrániť</a></td>                      
                    </tr>
                <?php
                }
            }
        ?>
    </table>
</div>

<?php
    include 'footer.php';
?>