 <?php
	session_start();
	require 'config.php';
$stmt2 = $conn->prepare('DELETE FROM cart');
	  $stmt2->execute();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final</title>


    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="checkout.css">
</head>
<body>
    <div class="container">
    <div class="row justify-content-center"></div>
        <div class="col-lg-6 px-4 pb-4">
            <h4 class="text-center text-info p-2">Verify your Order</h4>
 <form action="phpmailer/index.php" method="post">
<h6>Enter the mail which has been ordered</h6>
<label for="email"><i class="fa fa-envelope"></i> Email</label>
                      <input type="text" id="email" name="email" placeholder="your Email" value="" required>
 <div class="form-group">
            <input type="submit" name="submit" value="Verify" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>