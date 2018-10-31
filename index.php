<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/sanatize.css">
    <link rel="stylesheet" href="styles/base.css">
    <link rel="stylesheet" href="styles/animations.css">
    <link rel="stylesheet" href="styles/top-nav-landing.css">
    <link rel="stylesheet" href="styles/overlay-nav.css">
    <link rel="stylesheet" href="styles/social-links-landing.css">
    <link rel="stylesheet" href="styles/landing-page.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,700" rel="stylesheet">
    <title>Luke Fredrickson &#124; Aspiring Developer</title>
</head>

<body>
    <?php include "overlay-nav.html"; ?>
    <section id='main' class='main main--gradient'>
        <?php include "top-nav.php"; ?>
        <section class='hero__text'>
            <h1 class='hero__title hero__title--animated'><span class='hero__text--regular'>Hi, I'm </span>Luke
                Fredrickson</h1>
            <h2 class='hero__subtitle hero__subtitle--animated'>An aspiring software developer studying CS at UVM.</h2>
        </section>
        <footer>
            <?php include "social-links.html" ?>
        </footer>
    </section>

    <script src="scripts/toggle-overlay-nav.js"></script>

</body>

</html>