<?php 
if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $emailto = 'fantine.nyirandikubwimana@gmail.com';
  $toname = 'Fantine  Nyirandikubwimana';
  $emailfrom = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
  $phoneNumber = $_POST['pNumber'];
  $fromname = filter_var($_POST['fName']." ".$_POST['lName'],FILTER_SANITIZE_STRING);
  $subject = 'Email from Fantania Website';
  $messagebody = $_POST['msg'].PHP_EOL."My Phone number is: ".$_POST['pNumber'];
$headers = 
	'Return-Path: ' . $emailfrom . "\r\n" . 
	'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
	'X-Priority: 3' . "\r\n" . 
	'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
	'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
	'MIME-Version: 1.0' . "\r\n" . 
	'Content-Transfer-Encoding: 8bit' . "\r\n" . 
	'Content-Type: text/plain; charset=UTF-8' . "\r\n";
$params = '-f ' . $emailfrom;
$test = mail($emailto, $subject, $messagebody, $headers, $params);
// $test should be TRUE if the mail function is called correctly
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />

    <!-- Add icon library -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link id="favicon" rel="icon" type="image/x-icon" href="img/favicon.png" />
    <link rel="stylesheet" href="css/style.css" />
    <style  rel="stylesheet" type="text/css">
      .fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: #3b5998;
  color: white;
}

/* Twitter */
.fa-twitter {
  background: #55acee;
  color: white;
}

/* LinkedIn */
.fa-linkedin {
  background: #007bb5;
  color: white;
}

/* YouTube */
.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa {
  padding: 20px;
  font-size: 30px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}

#main-footer {
        background: #2bbbad;
        color: #fff;
      }

      .fas,
      .fab {
        color: #2bbbad;
      }

      #home-icons h3 {
        color: #2bbbad;
      }

      .border-3 {
        border-style: solid;
        border-width: 5px !important;
      }

      #about .row {
        color: #333333;
      }

      .navbar-default {
        background-color: #2bbbad;
      }
      .navbar-default a {
        color: #fff;
      }
    </style>
    <title>Fantania Website</title>
  </head>
 
  <body>
    <nav class="navbar navbar-default navbar-expand-sm fixed-top">
      <div class="container">
      <a href="index.html" class="navbar-brand">
          <img src="img/logo1.png" width="90" height="90" alt="" />
        </a>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
        <span class="navbar-toggler-icon">
            <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.html" class="nav-link">About Me</a>
            </li>
            <li class="nav-item">
              <a href="services.html" class="nav-link">Projects</a>
            </li>
            <li class="nav-item">
              <a href="blog.html" class="nav-link">APIs</a>
            </li>
            <li class="nav-item active">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- PAGE HEADER -->
    <header id="page-header">
      <div class="container mt-3">
        <div class="row">
          <div class="col-md-6 m-auto text-center">
            <h1>Contact Me</h1>
            <h3>
              You can contact me via the following form, or social medias
            </h3>
          </div>
        </div>
      </div>
    </header>

    <!-- CONTACT SECTION -->
    <form method="post" id="contact_form"
action="">
    <section id="contact" class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card p-4">
              <div class="card-body">
                <h4>Get In Touch</h4>
                <h4>Email</h4>
                <p>fantine.nyirandikubwimana@gmail.com</p>
                <h4>Phone</h4>
                <p>(724) 553-2691</p>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card p-4">
              <div class="card-body">
                <h3 class="text-center">
                  Please fill out this form to contact me
                </h3>
                <hr />
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="First Name"
                        name="fName"
                        id = "fName"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Last Name"
                        name="lName"
                        id="lName"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        placeholder="Email"
                        name="email"
                        id="email"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Phone Number"
                        name="pNumber"
                        id="pNumber"
                      />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea
                        class="form-control"
                        placeholder="Message"
                        name="msg"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input
                        type="submit"
                        value="Submit"
                        class="btn btn-outline-info btn-block"
                      />
                    </div>
                  </div>
                </div>
 
              </div>
            </div>
          </div>
        
        </div>
      </div>
    </section>
    </form>

    <!-- STAFF -->
    <section id="staff" class="py-5 text-center bg-dark text-white">
      <div class="container">
        <h1>My social Medias</h1>
        <hr />
        <div class="row">
          <div class="col-md-3">
            <!-- Add font awesome icons -->
            <a href="#" class="fa fa-linkedin"></a>
            <h4>LinkedIn</h4>
          </div>
          <div class="col-md-3">
            <!-- Add font awesome icons -->
            <a href="#" class="fa fa-youtube"></a>
            <h4>YouTube</h4>
          </div>
          <div class="col-md-3">
            <!-- Add font awesome icons -->
            <a href="#" class="fa fa-facebook"></a>
            <h4>Facebook</h4>
          </div>
          <div class="col-md-3">
            <a href="#" class="fa fa-twitter"></a>
            <h4>Twitter</h4>
          </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer id="main-footer" class="text-center p-4">
      <div class="container">
        <div class="row">
          <div class="col">
            <p>Copyright &copy; <span id="year"></span> Fantania</p>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
      integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"
    ></script>
  
    <script>
      // Get the current year for the copyright
      $("#year").text(new Date().getFullYear());
    </script>
    <script src="script.js"></script>
  </body>
</html>
