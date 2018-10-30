<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/sanatize.css">
    <link rel="stylesheet" href="styles/base.css">
    <link rel="stylesheet" href="styles/animations.css">
    <link rel="stylesheet" href="styles/top-nav-primary.css">
    <link rel="stylesheet" href="styles/overlay-nav.css">
    <link rel="stylesheet" href="styles/social-links-primary.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/about-me.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,700" rel="stylesheet">
    <title>About Me</title>
</head>

<body>
    <?php include "overlay-nav.html"; ?>
    <?php include "top-nav.php"; ?>
    <section id='main' class='main'>
        <section class="bio">
            <section class="bio__content">
                <h1 class="bio__header">A little about myself...</h1>
                <p class="bio__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis porro aliquam,
                    similique reprehenderit saepe facilis necessitatibus placeat quod perspiciatis dicta illum
                    consequatur ratione, delectus expedita sit velit. Molestias quos perferendis distinctio eaque
                    voluptas. Iure animi nam dolores aut quia deserunt id, nulla adipisci maxime debitis delectus
                    incidunt sed repellendus inventore commodi magnam sunt architecto numquam nostrum, reprehenderit
                    libero cumque illum doloremque. Ea repudiandae inventore veniam consequuntur dolorum accusantium
                    voluptate pariatur, repellendus id consequatur harum sint soluta illum eaque incidunt, saepe
                    maiores commodi porro explicabo, quidem voluptates veritatis ullam iusto! Quidem deserunt obcaecati
                    ducimus ratione tempore, similique autem repudiandae saepe exercitationem!</p>
            </section>
            <div class="bio__separator">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="0,0 50,100 100,0" />
                </svg>
            </div>
        </section>
        <section class="skills">
            <header class="skills__header">
                <h1>My Skills</h1>
            </header>
            <section class="skills__cards">
                <section class="skills__languages skill-card">
                    <header class="skill-card__header">
                        <h2 class="skill-card__title">Programming Languages</h2>
                    </header>
                    <section class="skill-card__content">
                        <section class="skill-card__proficient">
                            <h4 class="skill-card__subtitle">Proficient</h4>
                            <ul class="skill-card__list">
                                <li class="skill-card__list-item">Java</li>
                                <li class="skill-card__list-item">HTML</li>
                                <li class="skill-card__list-item">CSS</li>
                                <li class="skill-card__list-item">JavaScript</li>
                            </ul>
                        </section>
                        <section class="skill-card__familiar">
                            <h4 class="skill-card__subtitle">Familiar</h4>
                            <ul class="skill-card__list">
                                <li class="skill-card__list-item">PHP</li>
                                <li class="skill-card__list-item">Python</li>
                                <li class="skill-card__list-item">SQL</li>
                            </ul>
                        </section>
                    </section>
                </section>
                <section class="skills__tools skill-card">
                    <section class="skill-card__header">
                        <h2 class="skill-card__title">Development Tools</h2>
                    </section>
                    <section class="skill-card__content">
                        <section class="skill-card__section">
                            <h4 class="skill-card__subtitle">Libraries &#38; Frameworks</h4>
                            <ul class="skill-card__list">
                                <li class="skill-card__list-item">JavaFX</li>
                                <li class="skill-card__list-item">RegEx</li>
                            </ul>
                        </section>
                        <section class="skill-card__section">
                            <h4 class="skill-card__subtitle">Tools</h4>
                            <ul class="skill-card__list">
                                <li class="skill-card__list-item">Git</li>
                                <li class="skill-card__list-item">Agile &#38; Scrum</li>
                            </ul>
                        </section>
                    </section>
                </section>
                <section class="skills__other skill-card">
                    <section class="skill-card__header">
                        <h2 class="skill-card__title">Other Software</h2>
                    </section>
                    <section class="skill-card__content">
                        <section class="skill-card__section">
                            <h4 class="skill-card__subtitle">Development</h4>
                            <ul class="skill-card__list">
                                <li class="skill-card__list-item">Visual Studio Code</li>
                                <li class="skill-card__list-item">Unreal Engine</li>
                                <li class="skill-card__list-item">Eclipse IDE</li>
                            </ul>
                        </section>
                        <section class="skill-card__section">
                            <h4 class="skill-card__subtitle">Design</h4>
                            <ul class="skill-card__list">
                                <li class="skill-card__list-item">Adobe Photoshop</li>
                                <li class="skill-card__list-item">Adobe Illustrator</li>
                                <li class="skill-card__list-item">Adobe InDesign</li>
                                <li class="skill-card__list-item">Adobe Lightroom</li>
                            </ul>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
    <?php include "footer.php"; ?>

    <script src="scripts/toggle-overlay-nav.js"></script>

</body>

</html>