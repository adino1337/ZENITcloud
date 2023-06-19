<div class="napisaliContainer">
<?php 
    $select = "select * from comments";
    $result = mysqli_query($conn,$select);
    $rows = mysqli_num_rows($result);
    if($rows > 0){
        $temp = 0;
        while($row = mysqli_fetch_assoc($result)){
?>

<div class="napisali passiveSlide <?php if($temp ==0) echo "activeSlide" ?>">
    <p class="blue">Hodnotenie</p>
    <h1>Napísali o nás</h1>
    <div class="quotation" ><i class="fa fa-quote-right"></i></div>
    <p class="textqua">"<?php echo $row['text']?>"</p>
    <h3><?php echo $row['meno']?></h3>
    <p class="blue"><?php echo $row['zamestnanie']?></p>    
</div>

<?php
$temp++;
    }}
?>
<div class="circles">
        <?php 
            for($i = 0; $i < $rows; $i++){
        ?>
        <div class="circle <?php if($i ==0) echo "activeSpan" ?>" data-active-slide="<?php echo $i ?>"></div>
        <?php 
        }
        ?>
</div>
</div>