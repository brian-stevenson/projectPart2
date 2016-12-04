<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="./js/project2.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/project2.css">
    </head>
    <header></header>
    <body>
        <div id="achieve">
            <a name="c"></a>
            <h3>Notable Achievements</h3>
            <img src="./img/present.jpg" alt="Enginerring Conference" align=right style="width:300px;height:200px;">

            <?php
            $classes = array("","Finalist in the annual Cultural Communications Alliance International Marketing Competition in 2012","Best computer engineering research paper at the 2013 Swanson School of Engineering Freshman Engineering Conference", "Knows how to play the piano, guitar, saxophone, trumpet, ocarina and accordion");
            echo'<ul style="float:left; width:60%"">';
            echo'<li style="display:inline;">';
            echo '</li>' . implode('</li><li>', $classes) . '</li>';
            echo'</ul>';
            ?>
        </div>
        </div>
    </body>
    <footer></footer>
</html>