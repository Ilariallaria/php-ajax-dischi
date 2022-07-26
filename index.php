<?php require __DIR__.'/database.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>

    <header>
            <div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="">
            </div>
    </header>
    <main>
        <div class="container">
            <div class="card-wrapper">
                <?php foreach ($discs as $disk) {?>
                    <div class="single-card">
                    
                        <div>
                            <img src="<?php echo $disk ['poster']?>" alt="">
                            
                        </div>

                        <div class="info">
                            <div class="title"><?php echo $disk ['title']?></div>
                            <div class="author"><?php echo $disk['author']?></div>
                            <div class="year"><?php echo $disk['year']?></div>

                        </div>
                    </div>
                <?php } ?>  
            </div>

        </div>

    </main>

</body>
</html>
