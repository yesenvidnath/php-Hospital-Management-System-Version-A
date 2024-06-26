<!-- Include glogal heder -->
<?php include('assets/header.php');?>

<!-- Navigation Section  Start -->

<section class="nav-section-panel">
    <!-- Navigation Bar -->
    <div class="container-fluid ">
        <nav class="navbar navbar-expand-lg navbar-light navbar-main-padding nav-conain-main">
        <img src="./img/img_avatar2.png" alt="" class="logo-img"  style="border-radius: 50%;">
            <div class="container-fluid">

              <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" 
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation"
              >

              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-0 text-center">
                    <li class="nav-item" >
                        Home
                    </li>
                    <li class="nav-item" >
                        About Us
                    </li>
                    </li>
                    <li class="nav-item" >
                        Services
                    </li>
                    </li>
                    <li class="nav-item" >
                       Testamonials 
                    </li>
                    </li>
                    <li class="nav-item" >
                       contact
                    </li>

                </ul>
              </div>

              <!-- login Switch -->
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><b> Login </b></button>
                
                <!-- Login Form Modal -->
                <div id="id01" class="modal">
                    <form class="modal-content animate" action="/action_page.php" method="post">
                        <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="./img/login.png" alt="Avatar" class="avatar">
                        </div>

                        <div class="container">
                        <label for="uname"><b>Username</b></label> <br>
                        <input type="text" placeholder="Enter Username" name="uname" required> <br>

                        <label for="psw"><b>Password</b></label> <br>
                        <input type="password" placeholder="Enter Password" name="psw" required> <br>
                        
                        <label>
                            <input type="checkbox" checked="checked" name="remember"><b> Remember me </b>
                        </label> <br>

                        <button type="submit"><b>Login </b></button> 
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><b>Cancel </b></button>
                        </div>

                        
                    </form>
                </div>

            </div>
        </nav>
    </div>

</section>

<!-- Navigation Section End -->

<!-- Index Page elemnts start -->


<!-- Index Page elemnts end -->


<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<!-- Include glogal heder -->
<?php include('assets/footer.php');?>
