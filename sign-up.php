<?php include('server.php') ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Sign-up</title>
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
    width: 50px;
    height: 50px;
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
    height: 550px;
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
    font-weight: 550;
    padding: 0 35px 0 5px;
}
.input-box .icon{
    position: absolute;
    right: 8px;
}


.btn {
    width: 100%;
    height: 35px;
    background: rgb(47, 134, 163);
    border: none;
    outline: none;
    border-radius: 6px; 
    cursor: pointer;
    font-size: 1em;
    color:white;
    font-weight: 500;
}

text-decoration: underline
}

	</style>
</head>
<body>
    
    <div class="wrapper">
        
      <div class="form-box login">
        <h2>Register Here</h2>
        <form method="post" action="sign-up.php">
  	    <?php include('errors.php'); ?>
		<div class="input-box">
            <span class="icon"><ion-icon name="username-outline"></ion-icon></span> 
            
  	  <input type="text" name="username" value="<?php echo $username; ?>" required>
	  <label>Username</label>
        </div>
            <div class="input-box">
            <span class="icon"><ion-icon name="mail-outline"></ion-icon></span> 
            
  	  <input type="email" name="email" value="<?php echo $email; ?>" required>
	  <label>Email</label>
        </div>

        <div class="input-box">
        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span> 
        
  	  <input type="password" name="password_1">
	  <label>Password</label>
      </div>
	  
	  <div class="input-box">
	  <span class="icon"><ion-icon></ion-icon></span>
	  
  	  <input type="password" name="password_2">
	  <label>Confirm password</label>
	  </div>
     
    <button type="submit" class="btn" name="reg_user">Sign-up</button>
    
      </form>
    </div>
    </div>

    <script src="./script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
    


