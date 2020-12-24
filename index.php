<?php include 'assets/.connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loïc Etienne</title>
    <link rel="stylesheet" href="assets/styles.css">
    <script src="particles/particles.js"></script>
</head>
<body>
    <header>
        <section>
            <h1>Loïc Etienne</h1>
            <h2>Hi, welcome to my webpage !</h2>
            <p class="changing">I am <span>a student</span>.</p>
            <a href="#contact" class="mainButton">Contact me</a>
            <a href="" class="mainButton myCV">My CV</a>
        </section>
        <div></div>
        <div></div>
        <div></div>
    </header>
    <main>
        <div class="description">
            <article>
                <h1>Hi,</h1>
                <p>my name is Loïc Etienne, I'm 19 years old. I enjoy conciliating code and creativity through my web development workflow. Currently in the first year of my university-level technical degree about multimedia and internet, I aim to provide to everyone creative and modern websites that fit their needs.</p>
                <br>
                <p>Alongside to my studies, I enjoy playing video games, learning new things, investing and chilling with my friends !</p>
                <a href="" class="mainButton">My portfolio</a>
            </article>
        </div>
        <div id="particles-js"></div>
    </main>
    <main class="journey">
        <span class="timeLine"></span>
        <section>
            <div>
                <h3>2019 : <b>A-Level</b> Technologies of industry and sustainability</h3>
                <p>Françoise Cabrini High School (Noisy-le-Grand, FR)</p>
                <ul>
                    <li>With highest honour</li>
                    <li>Information Systems and Digital Option</li>
                </ul>
            </div>
            <div>
                <h3>July 2019 : <b>Back office technician</b>, credits department</h3>
                <p>BRED BP Headquarters (Paris, FR)</p>
                <ul>
                    <li>Drafting official documents</li>
                    <li>Management, study, archiving of loan files</li>
                    <li>Contact with notary offices</li>
                </ul>
            </div>
            <div>
                <h3>2019 - 2021 : <b>DipHE</b> Multimedia & Internet</h3>
                <p>Gustave Eiffel University (Champs-sur-Marne, FR)</p>
                <ul>
                    <li>Web development</li>
                    <li>Algorithmic</li>
                    <li>Video production</li>
                </ul>
            </div>
        </section>
    </main>
    <main class="skills">
        <section>
            <div>
                <h3>Front-end development</h3>
                <p>I used to code in HTML since I'm 12, on forums. My first year of DipHE allowed me to learn new front-end languages such as CSS and JavaScript, and to explore all the possibilites related to those languages. I also learned how to use JQuery during that year, and I aim to learn and master libraries such as ReactJS or AngularJS to enhance my Front-end development knowledge.</p>
                <span class="images">
                    <img src="images/html.png" alt="">
                    <img src="images/css.png" alt="">
                    <img src="images/javascript.png" alt="">
                    <img src="images/jquery.png" alt="">
                </span>
            </div>
            <div>
                <h3>Back-end development</h3>
                <p>Once I've learned front-end development basis, I've enjoyed to see how many possibilities were available when both Front-end & Back-end languages are used in a perfect synergy. During my first year of DipHE, I've got the chance to learn and use PHP language to send and receive data from databases, that are manageable through SQL language.</p>
                <span class="images">
                    <img src="images/php.png" alt="">
                    <img src="images/mysql.png" alt="">
                </span>
            </div>
            <div>
                <h3>Programming</h3>
                <p>I've been using Python since a long time in order to solve issued that I could have in my working environment. Everytime I wanted to automatize something, to make a process faster and easier, or to remove some frictions related to my computer environment, I use Python.</p>
                <span class="images">
                    <img src="images/python.png" alt="">
                </span>
            </div>
            <div>
                <h3>Video editing & compositing</h3>
                <p>I seriously enjoy gaming. Sometimes, I enjoy making some videos about my games, adding VFX to them and sharing them with my friends. Alongside with that, I used to put into practice my video editing & compositing skills during my first year of DipHE, where I realised a short movie with my classmates.</p>
                <span class="images video">
                    <img src="images/hitfilm.png" alt="">
                    <img src="images/finalcutprox.png" alt="">
                    <img src="images/premiere.png" alt="">
                    <img src="images/aftereffects.png" alt="">
                </span>
            </div>
            <div>
                <h3>Finance and invsestment</h3>
                <p>Alongside to my studies, I enjoy reading news about financial markets, and buying stocks and financial products in order to make my money grow and work for me. I'm usually buying shares of companies I believe in.</p>
                <span class="images">
                    <img src="images/euronext.png" alt="">
                </span>
            </div>
        </section>
    </main>
    <main class="contact" id="contact">
        <div class="vertical-line"></div>
        <div class="contactme">
            <h1>Contact<br>me&nbsp;!</h1>
        </div>
        <form action="thanks.php" method="post">
            <input name ="mail" type="email" placeholder="my.email@something.dot"><br>
            <textarea name="message" cols="30" rows="10" placeholder="Tell me something great !"></textarea>
            <button type="submit" name="submit" class="mainButton">Send</button>
        </form>
    </main>
<script src="assets/app.js"></script>
</body>
</html>