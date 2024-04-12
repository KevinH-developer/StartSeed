<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartSeed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Registrate</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">Nombre</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Apellido</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Contraseña</label>
        </div>
       <input type="submit" class="btn" value="Registrarse" name="signUp">
      </form>
      <div class="links">
        <p>¿Ya tienes una cuenta?</p>
        <button id="signInButton">Ingresar</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Ingresar</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Contraseña</label>
          </div>
          <p class="recover">
            <a href="#">¿Olvidaste tu contraseña?</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <div class="links">
          <p>¿Aun no tienes una cuenta?</p>
          <button id="signUpButton">Registrate</button>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>