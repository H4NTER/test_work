<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Регистрация</title>
</head>
<body>

    <div class="logo-url">
        <a href="https://npo-at.com/">
            <img src="img/logo.png" alt="logo">
        </a>
    </div>
    
    <h1 class="auto">Регистрация</h1>

<form method="post" action="" name="signup-form">
<div class="form-element">
<label>ФИО</label>
<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
</div>
<div class="form-element">
<label>Email</label>
<input type="email" name="email" required />
</div>
<div class="form-element">
<label>Номер</label>
<input type="number" name="number" required />
</div> 
<div class="form-element">
<label>Password</label>
<input type="password" name="password" required />
</div>
<button type="submit" name="register" value="register">Register</button>
</form>
</body>
</html>
