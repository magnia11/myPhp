<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public_html/css/style.css">
</head>

<body>
   <div class="container">
       <header>
           <div class="logo">ToyShop</div>
           
           <div class="clearfix"></div>
       </header>
       
       <main>
           <div class="gallery">
               <?php
               include_once("config.php");
               
               $sql = "SELECT * FROM gallery ORDER BY Count DESC";
               $table = mysqli_query ($connect, $sql);
               
               while ($data = mysqli_fetch_assoc ($table)) : ?>
               <a href='image.php?id=<?= $data['id'] ?>' class='product'>
                   <img class="product_img" height="300" width="300" src='<?= $data['Address_small'] ?>' alt="">
               </a>
               <?php endwhile; ?>
           </div>
       </main>
       
       <footer class="page-footer">
           <p class="page-footer__text">Copyright &copy; 2020. Education Work On Geekbrains</p>
       </footer>
       
   </div>
    
</body>
</html>