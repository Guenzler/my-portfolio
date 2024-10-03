<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <title>Kontakt</title>
    <link rel="stylesheet" href="css/styles.production.css">
    <link rel="stylesheet" href="css/styles-casestudy.css">
    <link rel="stylesheet" href="css/kontakt.css">
    <script>
        function validateForm() {
            let errorOutput = document.getElementById("error");
            errorOutput.innerText = "";
            // Name Validierung
            var name = document.getElementById("name").value;
            if (name.length < 3) {
                //alert("Der Name muss mindestens 3 Zeichen lang sein.");
                errorOutput.innerText = "Name must be at least 3 characters long";
                return false; // Formular nicht absenden
            }

            // E-Mail Validierung (obwohl HTML5 bereits die E-Mail-Validierung prüft)
            var email = document.getElementById("email").value;
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email)) {
                //alert("Bitte eine gültige E-Mail-Adresse eingeben.");
                errorOutput.innerText = "Please enter a valid email adress.";
                return false; // Formular nicht absenden
            }

            // Nachricht Validierung
            var message = document.getElementById("message").value;
            if (message.length < 10) {
                //alert("Die Nachricht muss mindestens 10 Zeichen lang sein.");
                errorOutput.innerText = "Your message must be at least 10 characters long.";
                return false; // Formular nicht absenden
            }

            return true;
        }
    </script>
</head>

<body>
    <header>
        <nav>
            <ul role="homebutton" class="cs-nav-links">
                <li role="presentation">
                    <a role="menuitem" href="index-eng.html">Eva Günzler</a>
                </li>
            </ul>
            <ul role="menubar" class="cs-nav-links">
                <li role="presentation"><a role="menuitem" href="index-eng.html">Back</a></li>
            </ul>
        </nav>
    </header>
    <section id="contact-me">
        <div class="content-container">
            <h1>Contact me</h1>
            
            <?php
                if (isset($_GET['success'])) {
                if ($_GET['success'] == '1') {
                     echo '<p style="color: green;">Message was sent successfully.</p>';
                 } else {
                    echo '<p style="color: red;">There was an error sending the message.</p>';
                    }
                }
             ?>
             
            <div class="flex-container">
                <div class="form-intro-text">
                    <p>Get in touch!<br>I look forward to hearing from you.</p>
                </div>
                <div class="contact-form">

                    <form action="https://www.guenzler.net/send_email.php" method="POST"
                        onsubmit="return validateForm()">
                        <ul>
                            <li role="presentation">
                                <label class="standard-label" for="name">Name*:</label>
                                <input type="text" id="name" name="name" required>
                            </li>
                            <li role="presentation">
                                <label class="standard-label" for="email">Email*:</label>
                                <input type="email" id="email" name="email" required>
                            </li>
                            <li role="presentation">
                                <label class="standard-label" for="message">Message*:</label>
                                <textarea id="message" name="message" maxlength="500" required></textarea>
                            </li>
                            <li role="presentation">
                                <p id="error"></p>
                                <button type="submit">Send message</button>
                            </li>
                        </ul>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <section id="impressum">


        <div class="social-media">
            <!-- Github logo -->
            <a href="https://github.com/Guenzler" target="_blank" class="social-link"><img
                    src="img/github-mark-white.svg" alt="GitHub" class="github"></a>
            <!-- LinkedIn logo -->
            <a href="https://www.linkedin.com/in/eva-guenzler" target="_blank" class="social-link"><img
                    src="img/In-White-34.png" alt="LinkedIn" class="linkedin"></a>
        </div>

    </section>
</body>

</html>