<?php

if (isset($_GET['step'])) {
    $step = filter_var($_GET['step'], FILTER_SANITIZE_NUMBER_INT);
} else {
    $step = 1;
}

        // Checks to see if the step file exists before routing them to a page that doesn't exist.
        $default_page = 'steps/step1.php';
        $step_page = 'steps/step'. $step . '.php';

        $previous_step = ($step - 1);
        $next_step = ($step + 1);
        if ($previous_step <= 0) {
            $previous_step = 1;
        }

        $previous_step_link = $_SERVER['PHP_SELF'] . '?step=' . $previous_step;
        $future_step_link = $_SERVER['PHP_SELF'] . '?step=' . $next_step;
        
        // If there are no new steps, we stop them from continuing.
        $previous_step_page = 'steps/step'. $previous_step . '.php';
        $future_step_page = 'steps/step'. $next_step . '.php';
        if (!is_file($future_step_page)) {
            $future_step_link = "#";
        }

$ads_enabled = true;

?>
<!DOCTYPE html>
<html>
    
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ironman.css">
	<title>Oziris Ironman Guide 2.0</title>
</head> 
<body>
    <!-- NAV -->
    <br><br>
    <div class="ironman-nav">
        <a class="ironman-nav__option" href="toc.php">Table of Contents</a>
    </div>
    <!-- END OF NAV -->
    <h1>Oziris Ironman Guide 2.0</h1>
    <h4>Modified by Nightleaf</h4>
    <!-- STEP NAVIGATION ONLY -->
    <center>
        <div class="ironman-nav">
            <?php 
            if (is_file($previous_step_page) or $step != $previous_step) {
            ?>
            <a class="ironman-nav__option" href="<?php echo $previous_step_link; ?>"><?php echo '<b><</b>' ?></a>
            <?php
            }
            ?>
            <span class="ironman-nav__option ironman-nav__option--current"><?php echo $step . ' / 33'; ?></span>
            <?php
            if (is_file($future_step_page)) { 
            ?>
            <a class="ironman-nav__option" href="<?php echo $future_step_link; ?>"><?php echo '<b>></b>' ?></a>
            <?php
            }
            ?>
        </div>
    </center>
    <!-- END OF STEP NAV -->
    <br>
    <?php
    
    if ($ads_enabled) {
    ?>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-6645260056809594",
              enable_page_level_ads: true
         });
    </script>
    <?php
    }
    ?>
    <section class="content step">
    <?php  
        if (is_file($step_page))
        {
            require_once($step_page);
        } else {
            require_once($default_page);
        }
        echo '<center><a href="' . $future_step_link . '">Click here to continue</a></center>';
    ?>
    </section>
    <br>
    <!-- STEP NAVIGATION ONLY -->
    <center>
        <div class="ironman-nav">
            <?php 
            if (is_file($previous_step_page) or $step != $previous_step) {
            ?>
            <a class="ironman-nav__option" href="<?php echo $previous_step_link; ?>"><?php echo '<b><</b>' ?></a>
            <?php
            }
            ?>
            <span class="ironman-nav__option ironman-nav__option--current"><?php echo $step . ' / 33'; ?></span>
            <?php
            if (is_file($future_step_page)) { 
            ?>
            <a class="ironman-nav__option" href="<?php echo $future_step_link; ?>"><?php echo '<b>></b>' ?></a>
            <?php
            }
            ?>
        </div>
    </center>
    <!-- END OF STEP NAV -->
</body>
<br>
    <?php
    if ($ads_enabled) {
    ?>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-6645260056809594",
              enable_page_level_ads: true
         });
    </script>
    <?php
    }
    ?>    
<br>
<?php include ('footer.php'); ?>
    
</html>
