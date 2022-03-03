<?php
    require_once "./class/Conexion.php";
    require_once "./class/Metodos.php";
    include "./header.php";
    include "./menu.php";

    // Insertar datos
    $Metodos = new Metodos();
    $ip =  $_SERVER["REMOTE_ADDR"];
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    function getBrowser($user_agent){
        if(strpos($user_agent, 'MSIE') !== FALSE){
            return 'Internet explorer';
        }else if(strpos($user_agent, 'Edge') !== FALSE){ //Microsoft Edge
            return 'Microsoft Edge';
        }else if(strpos($user_agent, 'Trident') !== FALSE){ //IE 11
            return 'Internet explorer';
        }else if(strpos($user_agent, 'Opera Mini') !== FALSE){
            return "Opera Mini";
        }else if(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE){
            return "Opera";
        }else if(strpos($user_agent, 'Firefox') !== FALSE){
            return 'Mozilla Firefox';
        }else if(strpos($user_agent, 'Chrome') !== FALSE){
            return 'Google Chrome';
        }else if(strpos($user_agent, 'Safari') !== FALSE){
            return "Safari";
        }else{
            return 'No hemos podido detectar su navegador';
        }
    }
    $navegador = getBrowser($user_agent);
    $Metodos->insertarDatos($ip, $navegador);
?>

<header>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
                <div class="carousel-caption">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
                <div class="carousel-caption">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
                <div class="carousel-caption">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</header>

<!-- Page Content -->
<section class="py-5">
    <div class="container">
        <h1 class="fw-light">Full Page Image Slider</h1>
        <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The images in this snippet are from <a href="https://unsplash.com">Unsplash</a>, taken by <a href="https://unsplash.com/@joannakosinska">Joanna Kosinska</a>!</p>
    </div>
</section>

<?php
    include "./footer.php";
?>