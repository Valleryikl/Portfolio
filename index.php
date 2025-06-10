<?php
require_once "./modul/portfolioItem.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/main.css">
    <script src="./src/dist/js/script.js" defer></script>
    <script src="./src/dist/js/slaider.js" defer></script>
    <script src="./src/dist/js/portfolio.js" defer></script>
    <script src="./src/dist/js/menu.js" defer></script>
    <script src="./src/dist/js/transition.js" defer></script>
    <title>Portfolio</title>
</head>

<body>
    <div class="transition"></div>
    <header class="header">
        <nav class="navbar display-flex container">
            <a href="index.php" class="logo">ValleryG</a>
            <img class="menu" src="./src/assets/img/menu-burger.png" alt="">
            <ul class="nav-list display-flex">
                <li><a href="#home" class="nav-link active" data-index="0" id="Home">Home</a></li>
                <li><a href="#about" class="nav-link" data-index="1" id="About">About</a></li>
                <li><a href="#portfolio" class="nav-link" data-index="2" id="Portfolio">Portfolio</a></li>
                <li><a href="#contact" class="nav-link" data-index="3" id="Contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="container-line">
            <section class="section-home" id="Home">
                <div class="home display-flex">
                    <div class="home__info display-flex">
                        <h1>Full-stack Worlds <span class="violet" id="typed"></span></h1>
                        <p>As a developer and designer, my mission is to craft immersive digital worlds out of words, design,
                            and code—worlds that drift effortlessly through the vast galaxy of the Internet, captivating and inspiring their visitors.</p>
                        <button id="link-about">About me</button>
                    </div>
                    <div class="home__foto">
                        <img src="./src/assets/img/Me.png" alt="My foto">
                    </div>
                </div>
            </section>
            <section class="section-about" id="About">
                <div class="about display-flex">
                    <h4>My story</h4>
                    <p>I discovered programming at 14, fascinated by the magic it seemed to hold. Despite early
                        obstacles like coding on an old, faulty laptop and eventually my phone, my passion only grew stronger.
                        Exploring various areas and languages led me to web development, and ultimately to pursuing a career as a
                        Full-stack developer at Epitech's Web@cademie. Now, at 19, my enthusiasm for coding continues to inspire me daily.</p>
                </div>
                <div class="tabs-container">
                    <div class="tabs">
                        <button class="tab active" data-tab="tab1">LEARNING PATH</button>
                        <button class="tab" data-tab="tab2">LANGUAGES</button>
                        <button class="tab" data-tab="tab3">HARD SKILLS</button>
                        <button class="tab" data-tab="tab4">SOFT SKILLS</button>
                        <button class="tab" data-tab="tab5">NEXT SKILLS</button>

                    </div>

                    <div class="tab-content active" id="tab1">
                        <h4 class="title-animation">In progres</h4>
                        <ul>
                            <li> <a class="li-link" href="https://www.webacademie.org/">Web@cademie <b>2024-2026</b></a></li>
                            <li> <a class="li-link" href="https://itgid.info/ru">JavaScript 2 <b>2025</b></a></li>
                        </ul>
                        <h4 class="title-animation">Finish</h4>
                        <ul>
                            <li> <a class="li-link" href="./sql.pdf" download>Sql-academy <b>2025</b></a></li>
                            <li> <a class="li-link" href="./JavaScript24.png" download>JavaScript <b>2024 (1 month)</b></a></li>
                            <li> <a class="li-link" href="./diplom.pdf" download>Profession Front-end developper <b>2023 (3 month)</b></a></li>
                        </ul>
                    </div>
                    <div class="tab-content" id="tab2">
                        <h4 class="title-animation">Native language</h4>
                        <ul>
                            <li class="li-regular">Roumain(Natif)</li>
                        </ul>
                        <h4 class="title-animation">Languages learned</h4>
                        <ul>
                            <li class="li-regular">Russe(Natif)</li>
                            <li class="li-regular">Français(Intermédiaire)</li>
                            <li class="li-regular">Ukrainien(Intermédiaire)</li>
                            <li class="li-regular">Anglais(Niveau technique)</li>
                        </ul>
                    </div>
                    <div class="tab-content" id="tab3">
                        <div class="tab-container">
                            <div class="tab-group">
                                <h4 class="title-animation">Front-end Development</h4>
                                <p><span class="text-actent">HTML, CSS,</span> and <span class="text-actent">JavaScript</span> are my core tools for building adaptive and interactive interfaces.
                                    I also work with technologies like <span class="text-actent">Babel, React Native</span> and <span class="text-actent">SCSS</span> to write clean, modern, and maintainable code.
                                    I’m familiar with frameworks like <span class="text-actent">Bootstrap</span> and <span class="text-actent">Tailwind,</span> and I know how to use them, but they are not
                                    part of my main tech stack — I prefer writing custom styles for greater flexibility and control.</p>
                            </div>
                            <div class="tab-group">
                                <h4 class="title-animation">Back-end Fundamentals</h4>
                                <p>I have a solid understanding of <span class="text-actent">PHP(Laravel), SQL</span> and the basics of <span class="text-actent">REST APIs.</span>
                                    I’m capable of building application logic, handling data, and connecting the back-end with the front-end.</p>
                            </div>
                            <div class="tab-group">
                                <h4 class="title-animation">Debugging & Problem Solving</h4>
                                <p>I’m skilled at identifying and fixing issues. I use the console, browser
                                    <span class="text-actent">DevTools,</span> and efficient search techniques to resolve bugs quickly. I see every bug as a challenge to overcome.
                                </p>
                            </div>
                            <div class="tab-group">
                                <h4 class="title-animation">Version Control</h4>
                                <p><span class="text-actent">Git</span> and <span class="text-actent">GitHub</span> are essential parts of my workflow. I work confidently with branches,
                                    pull requests, and version history to keep my projects clean and organized.</p>
                            </div>
                            <div class="tab-group">
                                <h4 class="title-animation">Responsive & Adaptive Design</h4>
                                <p>I design interfaces that look great on <span class="text-actent">any screen size.</span> From <span class="text-actent">grid systems</span> to the tiniest
                                    spacing — responsiveness is part of my development process from the start.</p>
                            </div>
                            <div class="tab-group">
                                <h4 class="title-animation">UI/UX</h4>
                                <p>I don't just write code — <span class="text-actent">I think about the person using it.</span> I aim to build interfaces that are
                                    intuitive, visually appealing, and pleasant to interact with. I also create my own design mockups,
                                    thoughtfully planning structure, visual style, and user experience before I even start coding.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="tab4">
                        <div class="tab-container">
                            <div class="tab-group">
                                <h4 class="title-animation">Self-discipline & Motivation</h4>
                                <p>I know how to organize my learning and work independently. I don’t wait for instructions
                                    — I set goals and move towards them on my own.</p>
                            </div>
                            <div class="tab-group">
                                <h4 class="title-animation">Curiosity & Fast Learning</h4>
                                <p>I genuinely enjoy exploring new technologies and understanding how things work.
                                    I learn quickly, especially when I’m passionate about the subject — and I usually am.</p>
                            </div>
                            <div class="tab-group">
                                <h4 class="title-animation">Teamwork</h4>
                                <p>Even though I enjoy working independently, I have experience in team projects.
                                    I know how to communicate, consider other perspectives, and work toward shared solutions.</p>
                            </div>
                            <div class="tab-group">
                                <h4 class="title-animation">Focus & Independent Work</h4>
                                <p>I’m comfortable working alone and have no trouble concentrating deeply.
                                    I like being fully in control of the process from start to finish.</p>
                            </div>
                            <div class="tab-group">
                                <h4 class="title-animation">Attention to Detail</h4>
                                <p>I aim to write clean, well-structured code and create thoughtful designs.
                                    I believe small details matter — they shape the quality of the entire project.</p>
                            </div>
                            <div class="tab-group">
                                <h4 class="title-animation">Empathy & User-centered Thinking</h4>
                                <p>I always think about the people who will use what I build. It’s not just about making something that
                                    works — I want it to feel intuitive, pleasant, and meaningful to others.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="tab5">
                        <h4 class="title-animation">In progres</h4>
                        <ul>
                            <li>PHP(Symfony)</li>
                            <li>Java(Spring, Angular)</li>
                            <li>Python(Django)</li>
                            <li>Go</li>
                            <li>Ruby</li>
                            <li>CMS(Wordpress)</li>
                        </ul>
                    </div>
                </div>
                <div id="hobby" class="hobby">
                    <h2>Hobby</h2>
                    <!-- Не забудь поставить тени для шрифта и поменять снимки как у тебя было в том проекте -->
                    <div class="hobby-group">
                        <a
                            class="hobby-item skateboard"
                            href="https://www.instagram.com/vallery.yr"
                            target="_blank"
                            rel="noopener noreferrer">
                            <h3>Skateboard</h3>
                            <p>When the weather is warm, I love skateboarding — it’s really refreshing.</p>
                        </a>
                        <a
                            class="hobby-item manga"
                            href="https://www.instagram.com/vallery.yr"
                            target="_blank"
                            rel="noopener noreferrer">
                            <h3>Manga</h3>
                            <p>I've loved anime, manga, and everything related to that culture since childhood
                                — especially the deep meaning behind such beautiful works.</p>
                        </a>
                    </div>
                    <div class="hobby-group sport">
                        <a
                            class="hobby-item sport"
                            href="https://www.instagram.com/vallery.yr"
                            target="_blank"
                            rel="noopener noreferrer">
                            <h3>Sport</h3>
                            <p>I like working out in my free time when I'm not programming — it helps me relax,
                                and the atmosphere in the gym gives me extra motivation.</p>
                        </a>
                    </div>
                </div>

            </section>
            <section class="section-portfolio" id="Portfolio">
                <h3>My projects</h3>
                <div class="portfolio">
                    <?php
                    portfolioItem(
                        "quizz",
                        "Quizz",
                        "./src/assets/img/quizzT.png",
                        "https://valleryikl.github.io/Quizz/",
                        "HTML/CSS, JavaScript, Json",
                        "Quizz is a playful and dynamic web application that lets users test their tech knowledge.
                                        Built in just a few hours using HTML, CSS, JavaScript and a JSON dataset, it offers a responsive and engaging experience.
                                        This project was my first time working with JSON under a tight deadline. It was a challenging task, but an incredibly valuable learning experience."
                    );

                    portfolioItem(
                        "neon",
                        "Neon Waves",
                        "./src/assets/img/neonT.png",
                        "https://github.com/Valleryikl/neon_waves",
                        "HTML/CSS, SCSS/SAAS, JavaScript",
                        "Neon Waves is a multi-page website built to simulate a real festival landing page.
                                        It was created as part of my application project to join Web@cadémie. This site includes animated UI elements,
                                        a responsive layout, and a strong visual identity using HTML, CSS, SCSS and JavaScript."
                    );

                    portfolioItem(
                        "animeec",
                        "ANImeec.",
                        "./src/assets/img/animeecT.png",
                        "https://github.com/Valleryikl/neon_waves",
                        "HTML/CSS, PHP, SQL",
                        "ANImeec. is a dating site for anime characters. Here, you can register and find your ideal hero based on
                                        your interests and preferences. The entire backend is built with PHP, and SQL is used for the database.
                                        In this project, I built my own database and learned how to use it more effectively and accurately."
                    );

                    portfolioItem(
                        "ac",
                        "AC_ouctoupus",
                        "./src/assets/img/acT.png",
                        "https://github.com/Valleryikl",
                        "HTML/CSS, Scss/Sass, JavaScript, PHP, SQL",
                        "The goal of this project is to create a social network for the students in your class,
                                        with the same features as Twitter. It should resemble the “Twitter” website as closely as possible in terms of functionality.
                                        This was my first large-scale team project. It was challenging to adapt and collaborate with others at first, but it helped me 
                                        develop a deeper understanding of JavaScript modules and the MVC architecture in PHP."
                    );

                    portfolioItem(
                        "cinema",
                        "WEBmovie",
                        "./src/assets/img/cinemaT.png",
                        "https://github.com/Valleryikl",
                        "HTML/CSS, JavaScript, PHP, SQL",
                        "This is a prototype of a movie website where you can find films and their
                                        screening dates. You can also log in as an admin to view other users of the site.
                                        This was my first time using a database and SQL in a project, and I successfully managed to handle it."
                    );

                    portfolioItem(
                        "todo",
                        "MyUtils",
                        "./src/assets/img/todoT.png",
                        "https://github.com/Valleryikl/MyUtils",
                        "HTML/CSS, JavaScript, PHP, SQL",
                        "My_Todo is a small web application developed in 3 hours. It allows users to create, 
                                        delete, save, and reload tasks using a SQL database.
                                        I had problems with this project because it didn’t load the saved data, but I managed to solve it."
                    )
                    ?>
                </div>
            </section>
            <section class="section-contact" id="Contact">
                <h2>Contact</h2>
                <form class="form-contact" action="https://formspree.io/f/mjkyejba" method="POST">
                    <label>Email:<br>
                        <input type="email" name="email" required>
                    </label><br>
                    <label>Message:<br>
                        <textarea name="message" required maxlength="20"></textarea>
                    </label><br>
                    <button type="submit">Send</button>
                </form>
                <div class="link_group">
                    <a class="link" href="https://github.com/Valleryikl" target="_blank" rel="noopener noreferrer">GitHub</a>
                    <a class="link" href="https://www.linkedin.com/in/vallery-girtie/" target="_blank" rel="noopener noreferrer">Linkedin</a>
                </div>
                <a href="./CV_Valeria_GIRTIE.pdf" download>
                    <button>instal CV</button>
                </a>

            </section>
        </div>

    </div>
    <canvas id="lightCanvas"> </canvas>
    <canvas id="dotsCanvas"> </canvas>
</body>

</html>