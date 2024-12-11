<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register & Login</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/9de695efd2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container" id="signUp" style="display: none">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input
            type="text"
            name="fName"
            id="fName"
            placeholder="First Name"
            required
          />
          <label for="fname">First Name</label>
        </div>

        <div class="input-group">
          <i class="fas fa-user"></i>
          <input
            type="text"
            name="lName"
            id="lName"
            placeholder="Last Name"
            required
          />
          <label for="lName">Last Name</label>
        </div>

        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            required
          />
          <label for="emai">Email</label>
        </div>

        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input
            type="password"
            id="password"
            placeholder="password"
            required
          />
          <label for="password">Password</label>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp" />
      </form>
      <p class="or">------------or---------</p>

      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>

      <div class="links">
        <p>Ya tienes cuenta?</p>
        <button id="signInButton">Iniciar Sesion</button>
      </div>
    </div>


   <div class="container" id="signIn">

<h1 class="form-title">Iniciar Sesion</h1>
<form action="register.php" method="post">

    <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
    </div>

    <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" id="password" placeholder="password" required>
        <label for="password">Contraseña</label>
    </div>
    <p class="recover">
        <a href="#">Recuperar Contraseña</a>
    </p>
    <input type="submit" class="btn" value="Inicar Sesion" name="signIn">
</form>
<p class="or">------------o------------</p>

<div class="icons">
    <i class="fab fa-google"></i>
    <i class="fab fa-facebook"></i>
</div>

<div class="links">
    <p>¿Aún no tienes una cuenta?</p>
    <button id="signUpButton">Registrarse</button>
</div>

   </div>




<script src="script.js"></script>
  </body>
</html>