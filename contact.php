<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="./js/project2.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/project2.css">
    </head>
    <header>
    </header>
    <body>
        <div id="contact">
            <h3>Contact</h3>
            Contact me through one of the following means, or using the form below.<br>
            <a name="d"></a>
            Email: <a href="mailto:brs128@pitt.edu">brs128@pitt.edu</a><br>
            Cell: (412)-200-8714</br>
            <a href="https://github.com/brian-stevenson">GitHub Profile</a>
            <footer>
                <h4>Send me a message!</h4>
                <form action="formprocess.php" method=POST onsubmit="return notifyUser()">
                    <label for="firstname"></label>
                    <input id="firstname" type="text" name="firstName" placeholder="First Name"><br>
                    <label for="lastname"></label>
                    <input id="lastname" type="text" name="lastName" placeholder="Last Name"><br>
                    <label for="email"></label>
                    <input id="email" type="text" name="email" placeholder="Email Address"><br>
                    <label for="message"></label>
                    <input id="message" type="text" name="message" placeholder="Message goes here..."><br>
                    <input type="submit" value="Submit" onsubmit="return false" style="background-color: #e0e0eb;">
                </form>
            </footer>
        </div>
    </body>
</html>