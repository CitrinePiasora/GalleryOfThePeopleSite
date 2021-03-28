<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Gallery of the People</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: skyblue;">
        <a class="navbar-brand" href="#">Gallery of the People</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Galleries
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="z-index: 1;">
                        <a class="dropdown-item" href="redirectGallery.php?category=paintings">Paintings</a>
                        <a class="dropdown-item" href="redirectGallery.php?category=sculptures">Sculptures</a>
                        <a class="dropdown-item" href="redirectGallery.php?category=photography">Photographs</a>
                        <a class="dropdown-item" href="redirectGallery.php?category=digital">Digital Art</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="responsive">
        <div class= "gallery">
            <a href="redirectGallery.php?category=paintings" target="_self"><img src="painting.jpg" width="250" height="200"></a>
            <div class= "desc"> Paintings </div>
        </div>
    </div>
    <div class="responsive">
        <div class= "gallery">
            <a href="redirectGallery.php?category=sculptures" target="_self"><img src="sculpture.jpg" width="250" height="200"></a>
            <div class= "desc"> Sculptures </div>
        </div>
    </div>
    <div class="responsive">
        <div class= "gallery">
            <a href="redirectGallery.php?category=photography" target="_self"><img src="photography.jpg" width="250" height="200"></a>
            <div class= "desc"> Photography </div>
        </div>
    </div>
    <div class="responsive">
        <div class= "gallery">
            <a href="digitalLink" target="_blank"><img src="digital.jpg" width="250" height="200"></a>
            <div class= "desc"> Digital Art </div>
        </div>
    </div>
</body>
</html>