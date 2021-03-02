<!DOCTYPE html>
<html lang="en">

<head>
  <title>Index</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="popup/sweetalert.js"></script>

<style>

.header {
            height: 100vh;
            width: 100%;
            /* background: url("bms1.jpg"); */
            /* no-repeat; */
            background-size: cover;
            background-position: center;

        }

        .main111 {
            width: 65%;
            height: 50%;
            background: rgba(0, 0, 0, 0.4);
            color: #ffffff;
            text-align: center;
            font-size: 25px;
            padding: 50px;
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);

        }
        .modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 118%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
  
  }

  
  .modal-content1 {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 71.5%; /* Could be more or less, depending on screen size */
    height: 65%;
  }
</style>

</head>

<body>

  <!-- 
    <script>
     alert("Successful");
     swal("Hello world!");</script> -->

  <div id="navbar">
    <div id="logo">
      <img src="bmsce.png" alt="bmsce">
    </div>
    <div class="main1">BMS College Of Engineering</div>
    <div class="main">Proctor Management System</div>

    <div class="nav">
      <!-- <a href="about.php">About</a> -->
      <a onclick="document.getElementById('aaa').style.display='block'">About</a>
      <div id="aaa" class="modal1">

        <form class="modal-content1 animate" action="#" method="post">
          

          <!-- <div class="container"> -->
            <div class="header">
              <div class="main111">
              <div class="imgcontainer">
            <span onclick="document.getElementById('aaa').style.display='none'" class="close" title="Close Modal">&times;</span>

          </div>
                <h2>PROCTOR MANAGEMENT SYSTEM</h2>
                <p style="color:black;">
                  <br>The Proctor Management System is a highly specialised and professional task. This online proctoring system helps lectures and students to communicate and maintain a detail record of the student for a long duration.
                  All these activities can be automated using proctor management tool.
                  Proctor management portal is web based application which is used by Faculty and students to record student detail activities using a world wide web.
               
        
                </p>
            
              </div>
            </div>
          <!-- </div> -->
        </form>
      </div>



      <a onclick="document.getElementById('adminlogin').style.display='block'"> Admin</a>
      <div id="adminlogin" class="modal">

        <form class="modal-content animate" action="alogin.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('adminlogin').style.display='none'" class="close" title="Close Modal">&times;</span>

          </div>

          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" name="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>

          <!-- <div class="container" style="background-color:#f1f1f1">
                     <button type="button" onclick="document.getElementById('adminlogin').style.display='none'" class="cancelbtn">Cancel</button>
                     <span class="psw">Forgot <a href="#">password?</a></span>
                   </div> -->
        </form>
      </div>

      <script>
        // Get the modal
        var modal = document.getElementById('adminlogin');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
      </script>
      <div class="dropdown">
        <div class="dropbtn">
          Faculty
          <i class="fa fa-caret-down"></i>
        </div>
        <div class="dropdown-content">
          <a onclick="document.getElementById('flogin').style.display='block'"> Login</a>
          <div id="flogin" class="modal">

            <form class="modal-content animate" action="alogin.php" method="post">
              <div class="imgcontainer">
                <span onclick="document.getElementById('flogin').style.display='none'" class="close" title="Close Modal">&times;</span>

              </div>

              <div class="container">
                <label for="fname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="fname" required>

                <label for="fpsw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="fpsw" required>

                <button type="submit" name="fsubmit">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>

              <!-- <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('flogin').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="#">password?</a></span>
                </div> -->
            </form>
          </div>

          <script>
            // Get the modal
            var modal = document.getElementById('flogin');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
          </script>
          <a onclick="document.getElementById('freg').style.display='block'"> Register</a>
          <div id="freg" class="modal">

            <form class="modal-content animate" action="register.php" method="post">
              <div class="imgcontainer">
                <span onclick="document.getElementById('freg').style.display='none'" class="close" title="Close Modal">&times;</span>

              </div>

              <div class="container">
                <label for="fname"><b>Faculty name</b></label>
                <input type="text" placeholder="Enter facultyname" name="fname" required>
                <label for="fid"><b>Faculty id</b></label>
                <input type="text" placeholder="Enter facultyid" name="fid" required>
                <label for="qualify"><b>Qualification</b></label>
                <input type="text" placeholder="Qualifications seperated by comma" name="qualify" required>
                <label for="specific"><b>Area Of interest</b></label>
                <input type="text" placeholder="Specification " name="specific" required>

                <label for="fpsw1"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="fpsw1" required>
                <label for="fpsw2"><b>Confirm Password</b></label>
                <input type="password" placeholder="Confirm Password" name="fpsw2" required>
                <button type="submit" name="fregister">Register</button>

              </div>

              <!-- <div class="container" style="background-color:#f1f1f1"> -->
              <!-- <button type="button" onclick="document.getElementById('idre').style.display='none'" class="cancelbtn">Cancel</button> -->
              <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
              <!-- </div> -->
            </form>
          </div>

          <script>
            // Get the modal
            var modal = document.getElementById('freg');

            // When the user clicks anywhere outside of the modal, close it
            // window.onclick = function(event) {
            //     if (event.target == modal) {
            //         modal.style.display = "none";
            //     }
            // }
          </script>
        </div>
      </div>


      <div class="dropdown">
        <div class="dropbtn">
          Student
          <i class="fa fa-caret-down"></i>
        </div>
        <div class="dropdown-content">
          <a onclick="document.getElementById('slogin').style.display='block'"> Login</a>
          <div id="slogin" class="modal">

            <form class="modal-content animate" action="alogin.php" method="post">
              <div class="imgcontainer">
                <span onclick="document.getElementById('slogin').style.display='none'" class="close" title="Close Modal">&times;</span>

              </div>

              <div class="container">
                <label for="uname"><b>USN</b></label>
                <input type="text" placeholder="Enter USN" name="usn" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="spsw" required>

                <button type="submit" name="ssubmit">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>

              <!-- <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('slogin').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="#">password?</a></span>
                </div> -->
            </form>
          </div>

          <script>
            // Get the modal
            var modal = document.getElementById('slogin');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
          </script>
          <a onclick="document.getElementById('sreg').style.display='block'"> Register</a>
          <div id="sreg" class="modal">

            <form class="modal-content animate" action="register.php" method="post">
              <div class="imgcontainer">
                <span onclick="document.getElementById('sreg').style.display='none'" class="close" title="Close Modal">&times;</span>

              </div>

              <div class="container">
                <label for="usn"><b>USN</b></label>
                <input type="text" placeholder="Enter USN" name="usn" required>
                <label for="sname"><b>Student name</b></label>
                <input type="text" placeholder="Enter Student name" name="sname" required>
                <label for="syear"><b>Year</b></label>
                <input type="text" placeholder="Enter Year/sem" name="syear" required>
                <label for="smail"><b>E-mail</b></label>
                <input type="text" placeholder="Enter E-mail" name="smail" required>
                <label for="spsw1"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="spsw1" required>
                <label for="spsw2"><b>Confirm Password</b></label>
                <input type="password" placeholder="Confirm Password" name="spsw2" required>
                <button type="submit" name="sregister">Register</button>

              </div>

              <!-- <div class="container" style="background-color:#f1f1f1"> -->
              <!-- <button type="button" onclick="document.getElementById('sture').style.display='none'" class="cancelbtn">Cancel</button> -->
              <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
              <!-- </div> -->
            </form>
          </div>

          <script>
            // Get the modal
            var modal = document.getElementById('sreg');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
          </script>
        </div>
      </div>
    </div>
  </div>

  <section id="abc">

  </section>

</body>

</html>
<?php
include("footer.php")
?>