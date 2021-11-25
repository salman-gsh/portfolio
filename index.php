<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/18b4f8d469.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZTW5SSH0ET"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ZTW5SSH0ET');
    </script>
    <title>Salman Gishiev | IT Student in Bonn</title>
</head>

<body>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Salman<span>Gishiev.</span></a></div>
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#projects">Work</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Salman Gishiev</div>
                <div class="text-3">And I'm an <span>IT student</span></div>
                <a href="#">Contact me</a>
            </div>
        </div>
    </section>

    <!-- work section start -->

    <section class="projects-section" id="projects">
        <div class="max-width">
            <h2 class="projects-section-header">These are some of my projects</h2>
            <div class="wrapper-grid">
                <div class="container">
                    <div class='banner-img'></div>
                    <a href="https://github.com/salman-gsh/simple_calculator" target="_blank"><img src='/Calculator.jpeg' alt='Screenshot' class="profile-img"></a>
                    <button class='btn'><a class="projectLink" href="https://github.com/salman-gsh/simple_calculator" target="_blank">Simple C# Calculator</a></button>
                </div>

                <div class="container">
                    <div class='banner-img'></div>
                    <a href="#"><img src='/iconPlaceholder.png' alt='Screenshot' class="profile-img"></a>
                    <button class='btn'><a class="projectLink" href="google.com" target="_blank">Lorem,
                            ipsum</a></button>
                </div>

                <div class="container">
                    <div class='banner-img'></div>
                    <a href="#"><img src='/iconPlaceholder.png' alt='Screenshot' class="profile-img"></a>
                    <button class='btn'><a class="projectLink" href="google.com" target="_blank">Lorem,
                            ipsum</a></button>
                </div>

                <div class="container">
                    <div class='banner-img'></div>
                    <a href="#"><img src='/iconPlaceholder.png' alt='Screenshot' class="profile-img"></a>
                    <button class='btn'><a class="projectLink" href="google.com" target="_blank">Lorem,
                            ipsum</a></button>
                </div>

            </div>
        </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="contact-section-header">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Salman Gishiev</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Wachtberg, Germany</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">info@salman-gishiev.de</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>

                    <form action="contactform.php" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="emails" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" name="message" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>

</html>