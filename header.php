<div class="container-fluid site-title">
    <!-- <div class=""> -->
    <div class="container">
        <div class="row">
            <h3>L2-team05</h3>
        </div>
    </div>
</div>

<div id="cdc-meganav-wrapper">
    <div class="container" id="cdc-meganav-bar">
        <nav class="navbar navbar-expand-xl yamm">
            <ul class="nav navbar-nav nav-justified w-100">
                
                <?php
                    $page = array (
                        array("Home",'home.php'),
                        array("Pfizer-BioNTech",'pfizer.php'),
                        array("Sinovac",'sinovac.php'),
                        array("AstraZeneca",'astrazeneca.php'),
                        array("Register",'register.php')
                    );
                    $actual = basename($_SERVER['PHP_SELF']);
                    foreach ($page as $x) {
                        echo "<li class=\"nav-item\" id=\"menu_home\">";
                        if ($x[1] == $actual) {
                            echo"<a class=\"nav-link active\" href=\"$x[1]\">$x[0]</a>";
                        } else {
                            echo"<a class=\"nav-link\" href=\"$x[1]\">$x[0]</a>";
                        }
                        echo"</li>";
                    }
                    ?>

            </ul>
        </nav>
    </div>
</div>

           

