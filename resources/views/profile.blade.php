<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <h2 class="header-title">User Profile</h2>

    <!-- main -->
    <main class="container">
        <section id="user-profile">
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="" method="">
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <!-- First Name -->
                    <label for="first_name"><span>Name</span></label>
                    <input type="text" name="name" value="{{ $user->name }}" />

                    <!-- Email -->
                    <label for="email"><span>Email</span></label>
                    <input type="text" id="email" name="email" value="{{ $user->email }}" />

                    <!-- Subject -->
                    <label for="password"><span>Password</span></label>
                    <input type="password" id="password" name="password" value="{{ $user->password }}" />

                    <h4 style="text-align:right; padding-top:10px">Update Profile <a href="editProfile"
                            style="color: white">Click
                            Here!!!</a>
                    </h4>
                </form>
            </div>
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
