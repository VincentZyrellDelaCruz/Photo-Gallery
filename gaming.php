<?php
    $gaming_imgs = [
        'm1' => 'assassins-creed.jpg',
        'm2' => 'Persona-5.jpg', 
        'm3' => 'call-of-duty.jpg', 
        'm4' => 'gta-5.jpg',
        'm5' => 'yakuza.jpg',];

    $gaming_names = ['Assassins Creed', 'Persona 5', 'Call of Duty', 'Grand Theft Auto 5', 'Yakuza'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Photo Gallery</title>
    
    <link rel="stylesheet" href="css/lightbox.css">

    <!-- Bootstrap 5 implemented -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="js/jquery.js"></script>
    <script src="js/lightbox.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark bg-gradient shadow sticky-top">
        <div class="container">
            <a href="#" class="navbar-brand fw-bold">VZ Pic Gallery</a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navCollapse" aria-expanded="false" aria-controls="navCollapse" aria-label="toggle-nav"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navCollapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="anime.php" class="nav-link">Anime</a>
                    </li>
                    <li class="nav-item">
                        <a href="gaming.php" class="nav-link">Gaming</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <div class="container mt-3 mb-5 bg-light bg-gradient p-3 shadow-lg rounded-5">
            <h3 class="fw-bold fs-1 text-center mb-3">Gaming Photo Gallery</h3>
        
            <?php $i = 0 ?>
            <div class="row g-3">
                <?php foreach($gaming_imgs as $id => $img_src): ?>
                    <div class="col-md-4 col-sm-6">
                        <a href="photos/<?=  $img_src ?>"  data-lightbox="anime-gallery" data-title="<?= $gaming_names[$i++] ?>">
                            <img src="photos/<?=  $img_src ?>" alt="" class="img-thumbnail p-3 bg-light rounded-5 shadow">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
    </main>

    <footer class="navbar navbar-dark bg-dark bg-gradient fixed-bottom">
        <div class="container d-flex justify-content-center">
            <p class=" text-light fw-bold fs-5 mb-0">Created by Dela Cruz, Vincent Zyrell (3BSIT-2)</p>
        </div>
    </footer>
    
</body>
</html>