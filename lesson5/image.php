<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <link rel="stylesheet" href="public_html/css/style.css">
</head>


<body>
    
    <div class="container">
       
       <header>
           <div class="logo">WatchShop</div>
           
           <div class="clearfix"></div>
       </header>
        
        <main>
            <div class="image_big">
                <a class="back" href="index.php">< Вернуться в галерею</a>
                
                <?php
                include_once("config.php");
                
                $idImage = $_GET['id'];
                $sqlImg = "SELECT * FROM gallery WHERE id='$idImage'";
                $image = mysqli_fetch_assoc(mysqli_query($connect, $sqlImg));
                $update = "UPDATE gallery SET Count=Count+1 WHERE id=$idImage";
                mysqli_query($connect, $update);
                
                ?>
                
                <img src="<?= $image['Address_big'] ?>" width="700" height="700" alt="image<?= $idImage ?>">
                
                <h2 class="count">Количество просмотров: <?= ++$image['Count'] ?></h2>
            </div>
        </main>
        
        <footer class="page-footer">
            <p class="page-footer__text">Copyright &copy; 2020. Education Work On Geekbrains</p>
        </footer>
    </div>
</body>