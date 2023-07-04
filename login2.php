<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
        <style>
	*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}

.logo img{
    width: 100%;
    border-radius: 50%;
}
body{
    display: flex;
justify-content: center;
align-items: center;
 min-height: 100vh;
background: url(student2.jpeg);
background-size: cover;
background-position: center;
}
.wrapper .icon-close {
    position: absolute;
    top: 0;
    right: 0;
    width: 45px;
    height: 45px;
    background: rgb(47, 134, 163); 
    font-size: 2em;
    color:white;
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom-left-radius: 20px;
    cursor: pointer;
    z-index: 1;
}

header{
    position: fixed;
    top: 0; left: 0;
    width: 100%;
    padding: 20px 100px; 
    /* background-color: skyblue; */
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 99;
}
.navigation a {
    position: relative;
    font-size: 1.1em;
    color: white;
    text-decoration: none;
    font-weight: 500; 
    margin-left: 40px;
}
.navigation a::after{
    content:'';
    position: absolute; 
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px; 
    background: #fff;
    border-radius: 5px;
    transform-origin: right;
    transform: scaleX(0);
    transition:transform .5s;
}
.navigation a:hover::after {
    transform: scaleX(1);
    transform-origin: left;
}

.navigation .btnLogin-popup{
        width: 130px;
    height: 50px;
    background: transparent;
    border: 2px solid-white;
    outline: none;
    border-radius: 6px; cursor: pointer;
    font-size: 1.1em;
    color: #fff;
    font-weight: 500;
    margin-left: 40px;
}
.navigation .btnLogin-popup:hover {

}
.wrapper {
    position: relative;
    width: 400px;
    height: 440px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .5);
    border-radius: 20px; 
   backdrop-filter: blur(20px);
   box-shadow: 0 0 30px Orgba(0, 0, 0, .5); 
   display: flex;
    justify-content: center;
    align-items: center;
}
.wrapper .form-box{
     width: 100%;
    padding: 40px;
}
.form-box h2 {
    font-size: 2em;
    color: white;
    text-align: center;
}
.input-box {
    position: relative;
    width: 100%;
    height: 50px;
    border-bottom: 2px solid white;
    margin: 30px 0;
}

.input-box label {
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY (-50%) ;
    font-size: 1em;
    color:white;
    font-weight: 500; 
    pointer-events: none;
    transition: .5s;
}
.input-box input:focus~label,
.input-box input:valid~label {
top: -5px;
}
.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    color: white; 
    font-weight: 600;
    padding: 0 35px 0 5px;
}
.input-box .icon{
    position: absolute;
    right: 8px;
}

.remember-forgot{
font-size: .9em; color:white; 
font-weight: 500;
margin: -15px 0 15px;
display: flex;
justify-content: space-between;
}
.remember-forgot label input {
    accent-color: white;
    margin-right: 3px;
}
.remember-forgot a {
    color: white;
    text-decoration: none;
}
.remember-forgot a:hover {
    text-decoration: underline;
}
.btn {
    width: 100%;
    height: 45px;
    background: rgb(47, 134, 163);
    border: none;
    outline: none;
    border-radius: 6px; 
    cursor: pointer;
    font-size: 1em;
    color:white;
    font-weight: 500;
}
.login-register {
    font-size: .9em; 
    color: white;
    text-align: center; 
    font-weight: 500;
    margin: 25px 0 10px;
}

.login-register p a {
    color:white;
    text-decoration: none;
    font-weight: 600;
}
.login-register p a:hover {

text-decoration: underline
}

	</style>
</head>
<body>
    
    <div class="wrapper">
        
      <div class="form-box login">
        <h2>Login</h2>
        <form method="post" action="login2.php">
		<?php include('errors.php'); ?>
            <div class="input-box">
            <span class="icon"><ion-icon name="username-outline"></ion-icon></span> 
            
  		<input type="text" name="username" required>
		<label>Username</label>
        </div>
        <div class="input-box">
        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span> 
        <input type="password" name="password" required> 
        <label>Password</label>
      </div>
     
    <button type="submit" class="btn" name="login_user">Login</button>
    <div class="login-register">

<p>Don't have an account? <a href="sign-up.php" class="register-link"><u>Register</u></a> </p>
</div>
      </form>
    </div>
    </div>

    <script src="./script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>