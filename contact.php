<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@1,300&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
    <title>Karin-Art Contact</title>

</head>

<body>
    <main>
        <nav class="zone sticky">
            <ul class="main-nav">
                <li><a href="index.html"> Gallery</a></li>
                <li class="center"><a href="index.html">Karin-art</a></li>
                <li class="push"><a href="about.html"> About Me</a></li>
            </ul>
        </nav>
        <div class="contact-title">
            <h1>Say Hello</h1>
            <h2>Please describe the painting that you like!</h2>
        </div>

        <div class="contact-form">
            <form id="contact-form" method="POST" action="contactform.php">
                <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                <br>
                <input name="mail" type="text" class="form-control" placeholder="Your Email" required>
                <br>

                <textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>

                <button name='submit' type="submit" class="form-control submit">SEND MESSAGE</button>

            </form>
        </div>
    </main>
    <footer>Designed & Coded by Naivoe</footer>
</body>

</html>