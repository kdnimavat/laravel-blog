<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact KD's - KD's Blog</title>
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <div id="wrapper">
        <!-- sidebar -->
        <div class="sidebar">
            <span class="closeButton">&times;</span>
            <p class="brand-title"><a href="">KD's Blog</a></p>

            <div class="side-links">
                <ul>
                    <li><a class="active" href="welcome">Home</a></li>
                    <li><a href="blog">Blog</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li><a href="profile">Profile</a></li>
                    <li><a href="logout">Logout</a></li>
                </ul>
            </div>
            <!-- sidebar footer -->
            <footer class="sidebar-footer">
                <div>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                </div>

                <small>&copy KD's Blog</small>
            </footer>
        </div>
        <!-- Menu Button -->
        <div class="menuButton">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <!-- main -->
        <main class="container">
            <section id="contact-us">
                <h1>Get in Touch!</h1>

                <!-- contact info -->
                <div class="container">
                    <div class="contact-info">
                        <div class="specific-info">
                            <i class="fas fa-home"></i>
                            <div>
                                <p class="title">4th floor, Hi Center</p>
                                <p class="subtitle">Moi Avenue</p>
                            </div>
                        </div>
                        <div class="specific-info">
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <a href="">+254 720 XXX XXX </a>
                                <br />
                                <a href="">+254 721 XXX XXX</a>

                                <p class="subtitle">Mon to Fri 9am-6pm</p>
                            </div>
                        </div>
                        <div class="specific-info">
                            <i class="fas fa-envelope-open-text"></i>
                            <div>
                                <a href="mailto:info@KD's.co.ke">
                                    <p class="title">info@KD's.co.ke</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                </div>
            </section>
        </main>

        <!-- Main footer -->
        <footer class="main-footer">
            <div>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
            </div>
            <small>&copy KD's Blog</small>
        </footer>
    </div>

    <!-- Click events to menu and close buttons using javaascript-->
    <script>
        document
            .querySelector(".menuButton")
            .addEventListener("click", function() {
                document.querySelector(".sidebar").style.width = "100%";
                document.querySelector(".sidebar").style.zIndex = "5";
            });

        document
            .querySelector(".closeButton")
            .addEventListener("click", function() {
                document.querySelector(".sidebar").style.width = "0";
            });

        // setTimeout(() => {alert('Welcome')}, 500);
    </script>
</body>

</html>
