<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="./js/project2.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/project2.css">
    </head>
    <header></header>
    <body>
        <div id="skillz">
            <a name="b"></a>
            <h3>Skillset</h3>
            <h3>See my work in action on <a href="https://github.com/brian-stevenson">GitHub</a>!</h3>
            <?php
            $programming = array("","Java", "C/C++", "MIPS/x86", "VHDL/FPGA Design", "HTML/CSS", "Javascript", "PHP");
            echo'<ul style="float:left; width:27%">';
            echo '<li style="display:inline;">';
            echo'<h3>Technical Skills</h3>';
            echo '</li>' . implode('</li><li>', $programming) . '</li>';
            echo'</ul>';
            echo"<img src=\"./img/swanson.jpg\" alt=\"Enginerring Conference\" align=right style=\"width:300px;height:200px;\">";
            $classes = array("","Data Structures/Algorithms", "Digital Design", "Operating Systems", "Computer Architecture", "Web Design", "Linear Algebra", "Calculus I/II/III");
            echo'<ul style="float:left; width:27%"">';
            echo'<li style="display:inline;">';
            echo'<h3 style="">Relevant Classes</h3>';
            echo '</li>' . implode('</li><li>', $classes) . '</li>';
            echo'</ul>';
            ?>
        </div>
    </body>
    <footer></footer>
</html>