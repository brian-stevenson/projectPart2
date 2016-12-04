function notifyUser(){
    var choice = confirm("Would you like to submit this form?");
    if(choice == true){
        return checkComplete();
    }
}

function checkComplete(){
    document.getElementById("formId").innerHTML="Congratulations!\nYour message was submitted successfully.</br></br>";
    return false;
}

$(document).ready(function(){
    $('header').append('<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">');
    $('header').append('<h2>Brian Stevenson</h2>');
    $('header').append('<nav>');
    $('header').append('<ul id="nav">');//<ul id="nav">
    $('header').append('<li class="item"><a href="index.php">About</a></li>');//<li class="item"><a href="index.php">About</a></li>
    $('header').append('<li class="item"><a href="skills.php">Skills</a></li>'); //<li class="item"><a href="skills.php">Skills</a></li>
    $('header').append('<li class="item"><a href="achieve.php">Achievements</a></li>'); //<li class="item"><a href="achieve.php">Achievements</a></li>
    $('header').append('<li class="item"><a href="contact.php">Contact</a></li>');  //<li class="item"><a href="contact.php">Contact</a></li>
    $('header').append('</ul>'); //</ul>
    $('header').append('</nav>');
    $('header').append('<hr width="75%">');

    $('footer').append('<hr width="75%" style="clear:left; margin-top:100px;">');
    $('footer').append('<div id="copyright">');
    $('footer').append('© 2016');
    $('footer').append('</div>');
});