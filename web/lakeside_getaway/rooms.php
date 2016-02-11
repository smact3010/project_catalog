<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="UTF-8">
<title>Lakeside Getaway | Rooms Page | Lake Palestine, Texas</title>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->

<!-- lightbox -->
<script src="lightbox/js/jquery-1.10.2.min.js"></script>
<script src="lightbox/js/lightbox-2.6.min.js"></script>
<link href="lightbox/css/lightbox.css" rel="stylesheet" />
<!-- end lightbox -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
jQuery(function ($) {
    $(".more").hide();
    $('.button-read-more').click(function () {
        $(this).closest('.less').addClass('active');
        $(this).closest(".less").next().stop(true).slideDown("1000");
    });
    $('.button-read-less').click(function () {
        $(this).closest('.less').removeClass('active');
        $(this).closest(".less").next().stop(true).slideUp("1000");
    });
});
</script>

<link rel="stylesheet" type="text/css" href="/css/master.css" media="screen" />

<link rel="stylesheet" type="text/css" href="/css/style_new.css" media="screen" />

<link rel="stylesheet" type="text/css" href="/css/calendar.css" media="screen" />

</head>

<body>

<?php
    include ('includes/header.php');
?>

<div id="wrapper">

    <?php
        include ('includes/nav.php');
    ?>

    <?php
        include ('includes/rooms.php')
    ?>

	<section class="textCenter">
        <p>*including children</p>
        <p>Check-in times (with reservation only):</p>
        <p>Summer season - Between 3pm and 8pm</p>
        <p>Winter season - Between 3pm and 7pm</p>
	</section>

	<?php
	    include ('includes/nav.php');
	?>

</div>

<?php
    include ('includes/footer.php')
?>

</body>

</html> 