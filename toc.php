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
	<title>Table of Contents - OzirisOSRS Ironman Guide</title>
</head> 
<body>
    <!-- NAV -->
    <br><br>
    <div class="ironman-nav">
        <a class="ironman-nav__option" href="http://nightleaf.org/">Guide</a>
    </div>
    <!-- END OF NAV -->
    <h1>TABLE OF CONTENTS</h1>

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
    <!-- TABLE OF CONTENTS -->
        <ul>
            <li><big><a href="index.php?step=1" target="_blank">1.0 - Complete Walkthrough to Barrows Gloves</a></big></li>
            <ul>
                <!-- Subsections of 1.0 -->
                <li><a href="index.php?step=2" target="_blank">1.1 - Initial quests in Lumbridge</a></li>
                <li><a href="index.php?step=3" target="_blank">1.2 - Starting quests in members areas & thieving</a></li>
                <li><a href="index.php?step=4" target="_blank">1.3 - Starting Barcrawl & Waterfall</a></li>
                <li><a href="index.php?step=5" target="_blank">1.4 - Barcrawl Grand Tree & Gathering more supplies</a></li>
                <li><a href="index.php?step=6" target="_blank">1.5 - Wintertodt & Gertrude's Cat</a></li>
                <li><a href="index.php?step=7" target="_blank">1.6 - Shield of Arrav & Continuing Barcrawl</a></li>
                <li><a href="index.php?step=8" target="_blank">1.7 - Raising Cats</a></li>
                <li><a href="index.php?step=9" target="_blank">1.8 - Taverly Quests & Redberry Pie</a></li>
                <li><a href="index.php?step=10" target="_blank">1.9 - Trip to Mage Bank</a></li>
                <li><a href="index.php?step=11" target="_blank">1.10 - Gathering crafting supplies</a></li>
                <li><a href="index.php?step=12" target="_blank">1.11 - Training magic & finishing Waterfall Quest</a></li>
                <li><a href="index.php?step=13" target="_blank">1.12 - Training thieving & Starting Recipe for Disaster</a></li>
                <li><a href="index.php?step=14" target="_blank">1.13 - Working on Draynor section of quests</a></li>
                <li><a href="index.php?step=15" target="_blank">1.14 - Finishing Demon Slayer</a></li>
                <li><a href="index.php?step=16" target="_blank">1.15 - Starting Biohazard & More Barcrawl</a></li>
                <li><a href="index.php?step=17" target="_blank">1.16 - Recruitment Drive, Black Knight's Fortress, Merlin's Crystal</a></li>
                <li><a href="index.php?step=18" target="_blank">1.17 - Finishing The Restless Ghost</a></li>
                <li><a href="index.php?step=19" target="_blank">1.18 - Getting Ardougne Cloak 1</a></li>
                <li><a href="index.php?step=20" target="_blank">1.19 - Boots of Lightness</a></li>
            </ul>
            <li><big><a href="index.php?step=21" target="_blank">2.0 - Thieving, fishing and mining</a></big></li>
            <ul>
                <!-- Subsections of 2.0 -->
                <li><a href="index.php?step=22" target="_blank">2.1 - Getting 70 Agility & Rogues Outfit</a></li>
                <li><a href="index.php?step=23" target="_blank">2.2 - Elemental Workshop II & Continuing Dragon Slayer</a></li>
            </ul>
            <li><big><a href="index.php?step=24" target="_blank">3.0 - Fairy rings, 43 prayer, kingdom and first 99</a></big></li>
            <ul>
                <!-- Subsections of 3.0 -->
                <li><a href="index.php?step=25" target="_blank">3.1 - Starting Lost City & Fairytale I</a></li>
                <li><a href="index.php?step=26" target="_blank">3.2 - Starting Lost City & Fairytale I</a></li>
                <li><a href="index.php?step=27" target="_blank">3.3 - Underground Pass & Evil Dave Subquest for RFD</a></li>
                <li><a href="index.php?step=28" target="_blank">3.4 - Throne of Miscellania & 99 Thieving</a></li>
            </ul>
            <li><big><a href="index.php?step=29" target="_blank">4.0 - Skilling, lots of it</a></big></li>
            <ul>
                <!-- Subsections of 4.0 -->
                <li><a href="index.php?step=30" target="_blank">4.1 - Hosidius Favour & Puro Puro</a></li>
                <li><a href="index.php?step=31" target="_blank">4.2 - Regicide & Fletching</a></li>
            </ul>
            <li><big><a href="index.php?step=32" target="_blank">5.0 - Diaries and finishing RFD</a></big></li>
            <li><big><a href="index.php?step=33" target="_blank">6.0 - Goals after Barrows gloves</a></big></li>
        </ul>
    <!-- END OF CONTENTS -->
    </section>
    <br>
</body>
<br>
<?php include ('footer.php'); ?>
    
</html>