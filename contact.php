<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'assets/php-files/css.php';?>

    <link rel="stylesheet" href="assets/css/contact-styles.css">



    <title>Shape - Take Care Of Your Body</title>
</head>

<body>

    <?php include 'assets/php-files/navbar.php';?>

    <section class="red py-4 text-white">
        <h3 class="text-center">CONTACT US</h3>

    </section>


    <section class="dark-grey py-5 text-white">
        <div class="container">
            <h3 class="mt-5">Get<span class="text-red"> in Touch</span></h3>
            <p class="pt-4 opacity">Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
            <p class="pt-1 pb-5 opacity">Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
           <div class="row">
                <div class="col-md-6">
                <div class="form-area">
                    <form role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                            <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                        </div>

                        <button type="button" id="submit" name="submit" class="btn btn-danger pull-right">Submit Form</button>
                    </form>
                </div>
            </div>
           </div>

        </div>


    </section>



    <?php include 'assets/php-files/footer.php';?>

    <!--    footer section ends here-->

    <?php include 'assets/php-files/scripts.php';?>
    
    <script>
    
    $(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});

    </script>
</body>

</html>
