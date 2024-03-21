<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bana Gallery</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .mySlides {display: none;}
        .w3-left, .w3-right, .w3-badge {cursor: pointer;}
        .w3-badge {height: 13px; width: 13px; padding: 0;}

        /* Adjust top margin of .w3-content to provide space above the slider */
        .w3-content {
            max-width: 1500px;
            margin-top: 20px; /* Adjust this value as needed */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-danger-subtle bg-primary-subtle">
    <div class="container">
        <a class="navbar-brand" href="index.php">Bana Gallery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto">
                <!-- Navigation links can go here -->
            </div>
            <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
            <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
        </div>
    </div>
</nav>

<div class="w3-content w3-display-container">
    <img class="mySlides" src="landscape3.png" style="width:100%">
    <img class="mySlides" src="landscape4.png" style="width:100%">
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    </div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light">
    <p>&copy; UKK RPL 2024 | M. Irhamsyah Bana</p>
</footer>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " w3-white";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
