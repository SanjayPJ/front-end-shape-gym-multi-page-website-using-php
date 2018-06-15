<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'assets/php-files/css.php';?>

    <link rel="stylesheet" href="assets/css/home-styles.css">

    <title>Shape - Take Care Of Your Body</title>
</head>

<body>

    <?php include 'assets/php-files/navbar.php';?>

    <!--    carousel starts here-->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide w-100" src="assets/img/1.jpeg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1 class="text-uppercase">Example headline</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-danger" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide w-100" src="assets/img/2.jpeg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1 class="text-uppercase">Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-danger" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide w-100" src="assets/img/3.jpeg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1 class="text-uppercase">One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-danger" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    <!--      carousel ends here-->

    <!--    card section starts here-->


    <section class="red py-5 text-white">
        <div class="container">
            <h2 class="text-center mb-3">BEST OFFER @ SHAPE</h2>
            <p class="text-center mb-5 opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</p>
            <?php include 'assets/php-files/card.php';?>

        </div>
    </section>
    <!--    card section ends here-->

    <!--    services section starts here-->

    
    <section class="dark-grey py-5 text-white">
        <div class="container">
            <h2 class="text-center mb-3">WHAT OUR SERVICES</h2>
            <p class="text-center mb-5 opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</p>

                <?php include 'assets/php-files/service.php';?>

        </div>

    </section>
    <!--    services ends here -->


    <!--    feature section starts here-->

    <section class="grey py-5 text-white">
        <div class="container">
            <h2 class="text-center mb-3">OUR FITNESS STUDIO</h2>
            <p class="text-center mb-5 opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</p>
            <div class="row">
                <div class="col-md-6 pt-2">
                    <p class="opacity mb-3" style="font-size: 90%;">Grids is a responsive Multipurpose Template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                    <div class="py-1 mt-4">
                        <i class="fas fa-helicopter text-red mr-2"></i>
                        <span class="opacity" style="font-size: 80%;">Lorem ipsum dolor sit amet.</span>
                    </div>
                    <div class="py-1">
                        <i class="fas fa-helicopter text-red mr-2"></i>
                        <span class="opacity" style="font-size: 80%;"> consectetur adipiscing elit
</span>
                    </div>
                    <div class="py-1">
                        <i class="fas fa-helicopter text-red mr-2"></i>
                        <span class="opacity" style="font-size: 80%;">  Curabitur aliquet quam id dui
</span>
                    </div>
                    <div class="py-1">
                        <i class="fas fa-helicopter text-red mr-2"></i>
                        <span class="opacity" style="font-size: 80%;">  Donec sollicitudin molestie malesuada.

</span>
                    </div>
                    <div class="mt-5 mb-2">
                        <a class="btn btn-danger" href="#" role="button">Sign up today</a>
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="assets/img/7.jpeg" class="img-fluid" alt="Responsive image">

                </div>
            </div>

        </div>

    </section>


    <?php include 'assets/php-files/footer.php';?>

    <!--    footer section ends here-->

    <?php include 'assets/php-files/scripts.php';?>


</body>

</html>
