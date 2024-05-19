<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
    />

    <?php require_once 'connect.php'; ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yulianus Profile</title>
</head>
<body>
    <header>
        <div class="navbar">
                <h1 class="title">My Profile</h1>
                    <nav class="navbar-list">
                         <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                         </ul>
                    </nav>
        </div>
        <section id="home" class="home-page">
            <div class="greet">
                <h2>Hallo, Saya</h2>
                <br>
                <h1>Yulianus Henrij!</h1> 
                <br>
                <br>
                <p>Hello, I'm Yulianus, I study at Sam Ratulangi University, and I'm very passionate about creating 
                    <br>new, fun things.I'm also a person who can work in collaboration with other people to achieve 
                    <br>the same goal!</p>
                    <div>
                        <div class="lingkaran1"></div>
                        <img src="assets/Image/Diri sendiri2.png">
                     </div>
            </div>
        </section>
    </header>

    <main>
        <section id="gallery" class="gallery-page">
            <h1>Gallery</h1>
            <p>~ Please hover to clarify the image ~</p>
                <div class="gambar">
                    <img src="assets/Image/hey.png">
                    <img src="assets/Image/DSC02873.JPG">
                    <img src="assets/Image/IMG-20231109-WA0076.jpg">
                </div>
        </section>

        <section id="blog" class="blog-page">
            <h1>Blog</h1> 
            <div class="articlestyle">
                <?php
                while($article = $result->fetch_assoc()){
                ?>  
                <div class="articel-block">
            <article>
                <h2><?php echo $article['Title']; ?></h2>
                <p><?php echo $article['Desc']; ?></p>
                <a href="<?php echo $article['Link']; ?>">Read More...</a>
            </article>
                </div>
                <?php
                }
                ?>  
            </div>
         </section>

        <section id="contact" class="contact-page">
            <div class="container-me">
            <h1>Contact Me</h1>
            </div>
        <div class="contact-container">
            <div class="container-contact">
            <h2><i class="fa-brands fa-linkedin"></i><br>Yulianus Shefryo Henrij</h2>
            </div>
            <div class="container-contact">
            <h2><i class="fa-brands fa-instagram"></i><br>@yulianus_henrij</h2>
            </div>
            <div class="container-contact">
            <h2><strong><i class="fa-solid fa-envelope"></i>golden31733@gmail.com</strong></h2>
            </div>
        </div>
        </section>
    </main>

    <footer class="footer-container">
        <section class="footer-card">
            <h1>About</h1>
            <p>This profile page is one of my projects web developer using HTML, CSS and JavaScript. This will be presented as a submission for Web Development Assignment.</p>
        </section>

        <section class="footer-card">
            <h1>Links</h1>
            <div class="footer-links">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </section>

        <section class="footer-card">
            <h1>I'm Available Through:</h1>
            <div class="footer-available">
                <div><i class="fa-solid fa-map-location-dot"></i></div>
                <div><p>Kotamobagu, North Sulawesi, Indonesia</p></div>
                <div><i class="fa-regular fa-envelope"></i></div>
                <div><p>golden31733@gmail.com</p></div>
            </div>
        </section>
    </footer>
    <script src="assets/script.js"></script>
</body>
</html>