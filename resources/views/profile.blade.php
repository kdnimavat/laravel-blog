<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Profile</title>
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
          <li><a class="active" href="">Home</a></li>
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
    <h2 class="header-title">User Profile</h2>
    <!-- main -->
    <main class="container">
      <section id="user-profile">
        <!-- Contact Form -->
        <div class="contact-form">
          <form action="" method="">
            <!-- <input type="hidden" name="id" value="{{ $data->id }}"> -->
            <!-- First Name -->
            <label for="first_name"><span>First Name</span></label>
            <input type="text" id="first_name" name="first_name" value="{{ $data->first_name }}" />

            <!-- Last Name -->
            <label for="last_name"><span>Last Name</span></label>
            <input type="text" id="last_name" name="last_name" value="{{ $data->last_name }}" />

            <!-- Email -->
            <label for="email"><span>Email</span></label>
            <input type="text" id="email" name="email" value="{{ $data->email }}" />

            {{-- <!-- Subject -->
                        <label for="password"><span>Password</span></label>
                        <input type="text" id="password" name="password" value="{{ $data['first_name'] }}" /> --}}

            {{-- <!-- Message -->
                            <label for="uploadImage"><span>Upload Image</span></label>
                            <input type="file" name="uploadImage" id="uploadImage"> --}}
            {{-- @endforeach --}}
            <!-- Button -->
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