<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Meme-Hut</title>
  </head>
  <body>
    <!-- main page -->
    <section class="main-page">
      <!-- left -->
      <div class="left">
        <div class="left-content">
          <div class="Login-page-meme">
            <img class="bg" src="images/Meme_Ex.JPG" />
          </div>
      </div>
      </div>
      <!-- end of left -->
      <!-- right -->
      <div class="right">
        <div class="right-content">
          <form  class="right-content-form" method="post" action="validation.php"> 
            <input type="text" class="user-info" placeholder="Email" name="email" />
            <div>
              <input type="password" class="password" placeholder="Password" name="password" />
            </div>
            <input type="submit" class="btn-top" value="Log-in" name="submit"/>
          </form>
          <div class="middle-content">
            <h1>Enter the world of happiness</h1>
            <h4>Join Meme-Hut today</h4>
            <button type="button" class="sign-up main-btn">Sign Up</button>
            <button type="button" class="log-in main-button">Log In</button>
          </div>
        </div>
      </div>
      <!-- end of right -->
    </section>
    <!-- end of main page -->
    <!-- login page -->

   <section class="login-page">
    <!-- login -->
   <div class="login">
     <div class="login-content">
       <h2>Log in to Meme-Hut</h2>
       <form method="post" action="validation.php" ><div class="login-form">
         <input type="text" placeholder="Phone, email, or username " name="email" required  />
         <input type="password" placeholder="Password" name="password" required/>
         <div>
           <input type="submit" class="login-form-btn" value="Log-in" name="submit" />
           <input type="checkbox" class="login-form-checkbox" id="check" />
           <label for="check">Remember me</label>
         </div>
         </div>
       </form>
     </div>
     <footer class="login-footer">
      <p>New to Meme-Hut? <a href="#">Sign up now</a></p>
    </footer>
    </div>
    <!-- end of login -->
   </section>
   <!-- end of login page -->


    <!-- sign-up  page -->
    <section class="sign-up-page">
     <!-- sign-up -->
     <div class="signup">
       <div class="sign-up-content">
        <h1>Sign-up</h1>
        <p>Please fill in this form to create an account.</p>
          <form method="post" action="registration.php"><div class="sign-up-form">
            <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Full name" name="name " required   />

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Phone or  email" name="email" required   />

          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Username" name="username" required/>

          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Password" name="password" required/>

          <div>
          <input type="submit" class="sign-up-form-btn" value="Sign-up" name="submit"/>
          </div>
        </div>
      </form>
     </div>
     </div>
      <!-- end of sign-up -->
    </section>

    <!-- end of sign-up  page -->
    <script src="script.js"></script>
 </body>
</html>