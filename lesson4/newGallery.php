
<?php 

$dir1 = "gallery_images/small";
$dir2 = "gallery_images/big";

$files1 = array_slice (scandir ($dir1), 2);
$files2 = array_slice (scandir ($dir2), 2);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <link rel="stylesheet" href="/lesson4/style.css">
    <script type="text/javascript" src="scripts/jquery.js"></script>
</head>

<body>
   <div id="main">
       <div class="post_title"><h2>Галерея/Урок-4</h2></div>
       <div class="gallery">  
       <?php 
       for ($i = 0; $i < count ($files1); $i++) { ?>
       <a class="photo" href="<?=$dir2."/".$files2[$i]?>" target="_blank"><img height="230" width="330" src="<?=$dir1."/".$files1[$i]?>" alt="" /></a>
       <?php } ?>
       
       </div>
   </div>

    
</body>
</html>
