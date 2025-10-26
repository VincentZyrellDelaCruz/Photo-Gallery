<?php
    $gallery_imgs = [
        'm1' => 'dragon-ball.jpg', 
        'm2' => 'gintama.jpg', 
        'm3' => 'slam-dunk.jpg', 
        'm4' => 'assassination-classroom.jpg', 
        'm5' => 'naruto.jpg', 
        'm6' => 'one-piece.jpg',
        'm7' => 'assassins-creed.jpg',
        'm8' => 'Persona-5.jpg', 
        'm9' => 'call-of-duty.jpg', 
        'm10' => 'gta-5.jpg',
        'm11' => 'yakuza.jpg',];

    $img_names = ['Dragon Ball', 'Gintama', 'Slam Dunk', 'Assassination Classroom', 'Naruto', 'One Piece', 'Assassins Creed', 'Persona 5', 'Call of Duty', 'Grand Theft Auto 5', 'Yakuza'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>

    <!-- Bootstrap 5 implemented -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
        <div class="container-fluid w-auto bg-dark mb-5">
            <div class="container w-75">
                <div id="gallery-carousel" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#gallery-carousel" data-bs-slide-to="0" class="active"></li>
                        <?php for($i = 1; $i < count($gallery_imgs);): ?>
                            <li data-bs-target="#gallery-carousel" data-bs-slide-to="<?= $i++ ?>"></li>
                        <?php endfor; ?>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="photos/<?= $gallery_imgs['m1'] ?>" class="d-block w-100" alt="anime image">
                        </div>
                        
                        <?php foreach($gallery_imgs as $id => $img_src): ?>
                            <?php if($id === 'm1') continue; ?>
                            <div class="carousel-item">
                                <img src="photos/<?= $img_src ?>" class="d-block w-100" alt="anime image">
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <a class="carousel-control-prev" href="#gallery-carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark shadow-lg rounded-circle p-2 p-sm-4" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#gallery-carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark shadow-lg rounded-circle p-2 p-sm-4" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
        
        <?php $i = 0 ?>
        <?php foreach($gallery_imgs as $id => $img_src): ?>
            <div class="modal fade in" id="<?= $id ?>">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center">
                            <h3><?= $img_names[$i++] ?></h3>
                        </div>
                        <div class="modal-body">
                            <img src="photos/<?= $img_src ?>" alt="anime photo" class="img-thumbnail">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary px-5" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="container mb-5 bg-light bg-gradient p-3 shadow-lg rounded-5">
            <h3 class="fw-bold fs-1 text-center mb-3">Photo Gallery</h3>

            <div class="row g-3">
                <?php foreach($gallery_imgs as $id => $img_src): ?>
                    <div class="col-md-4 col-sm-6">
                        <a href="#<?= $id ?>" data-bs-toggle="modal">
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