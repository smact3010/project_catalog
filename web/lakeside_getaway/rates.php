<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="UTF-8">
<title>Lakeside Getaway | Rates Page | Lake Palestine, Texas</title>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->

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

  <section class="inline-block-center">

    <div class="inline-block-center">

      <p>Rates are seasonal. See the calendar below for the current season.</p>
          
        <div class="div_table boxShadow blue">
            <p>Offseason</p>  
            <div class="div_table column">
                <p class="heading">Room Type</p>
                <p>Regular</p>
                <p class="alt">View</p>
                <p>Shack</p>
                <p class="alt">Cabin</p>
                <p>Kitchen</p>
            </div>

            <div class="div_table column">
              <p class="heading">Rate</p>
              <p>$55</p>
              <p class="alt">$70</p>
              <p>$70</p>
              <p class="alt">$70</p>
              <p>$100</p>
            </div>
            
            <div class="div_table column">
              <p class="heading">Limit</p>
              <p>(1-2 persons)*</p>
              <p class="alt">(1-2 persons)*</p>
              <p>(1-2 persons)*</p>
              <p class="alt">(1-2 persons)*</p>
              <p>(1-4 persons)*</p>
            </div>
        </div>

        <div class="div_table boxShadow yellow">
            <p>Midseason</p>
            <div class="div_table column">
                <p class="heading">Room Type</p>
                <p>Regular</p>
                <p class="alt">View</p>
                <p>Shack</p>
                <p class="alt">Cabin</p>
                <p>Kitchen</p>
            </div>

            <div class="div_table column">
              <p class="heading">Rate</p>
              <p>$70</p>
              <p class="alt">$90</p>
              <p>$80</p>
              <p class="alt">$90</p>
              <p>$120</p>
            </div>
            
            <div class="div_table column">
              <p class="heading">Limit</p>
              <p>(1-2 persons)*</p>
              <p class="alt">(1-2 persons)*</p>
              <p>(1-2 persons)*</p>
              <p class="alt">(1-2 persons)*</p>
              <p>(1-4 persons)*</p>
            </div>
        </div>
          
        <div class="div_table boxShadow red">
            <p>Summer/Weekend</p>
            <div class="div_table column">
                <p class="heading">Room Type</p>
                <p>Regular</p>
                <p class="alt">View</p>
                <p>Shack</p>
                <p class="alt">Cabin</p>
                <p>Kitchen</p>
            </div>

            <div class="div_table column">
              <p class="heading">Rate</p>
              <p>$90</p>
              <p class="alt">$110</p>
              <p>$100</p>
              <p class="alt">$110</p>
              <p>$170</p>
            </div>
            
            <div class="div_table column">
              <p class="heading">Limit</p>
              <p>(1-4 persons)*</p>
              <p class="alt">(1-4 persons)*</p>
              <p>(1-2 persons)*</p>
              <p class="alt">(1-3 persons)*</p>
              <p>(1-6 persons)*</p>
            </div>

        </div>

    </div>

            <p>*$5 for each additional guest up to the room limit.</p>

  </section>

	<section class="inline-block-center">

        <?php

        include ('includes/calendar.php');

        generateYear(date("Y"));
        
        ?>

        <p> Holidays - Thanksgiving (Thurs. and Fri.); Dec. 24, 25, 31; and Jan. 1 are <span class="red">red rates.</span></p>

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