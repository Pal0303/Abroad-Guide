<html>
<head>
 <style>
 *{
    margin: 0;
    padding: 0;
	box-sizing: border-box;
}
.main{
    width: 100%;
    background: url(student2.jpeg);
    background-position: center;
    background-size: cover;
    height: 90vh;
	justify-content: center;
	align-items: center;
}

.navbar{
    width: 1480px;
    height: 75px;
    margin: auto;
    background-color: black;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #ff7200;
}

.search{
    width: 330px;
    float: left;
    margin-left:260px;
}

.srch{
    font-family: 'Times New Roman';
    width: 200px;
    height: 40px;
    background: transparent;
    border: 1px solid #ff7200;
    margin-top: 13px;
    color: #fff;
    border-right: none;
    font-size: 16px;
    float: left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}

.btn{
    width: 100px;
    height: 40px;
    background: #ff7200;
    border: 2px solid #ff7200;
    margin-top: 13px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:hover{
    color: #000;
}

.btn:focus{
    outline: none;
}

.srch:focus{
    outline: none;
}

.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: white;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Dosis;
    letter-spacing: 1px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    
}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}

.content span{
    color: #ff7200;
    font-size: 65px;
}

.form{
    width: 250px;
    height: 380px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: -20px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #ff7200;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}

.btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: #ff7200;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color: #ff7200;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}
.icons a{
    text-decoration: none;
    color: #fff;
}
.icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color: #ff7200;
}
.wrapper {
    position:relative;
	margin-top:130px;
	margin-left:600px;
    width: 350px;
    height: 300px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .5);
    border-radius: 20px; 
   backdrop-filter: blur(20px);
   box-shadow: 0 0 30px Orgba(0, 0, 0, .5); 
   display: flex;
    justify-content: center;
    align-items: center;
}
td{
	color:white;
}
.btn {
    width: 60%;
    height: 35px;
    background: #ff7200;
    border: none;
    outline: none;
    border-radius: 6px; 
    cursor: pointer;
    font-size: 1em;
    color:white;
    font-weight: 500;
}



 </style>
</head>

<body>

<form align="center" action="currencyconvertor.php" method="post">

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">AGuide</h2>
            </div>
            
            <div class="menu">
                <ul>
				     
                    
                    <li><a href="" target="_black"><h2>Currency Conversion</h2></a></li>
                   
                </ul>
            </div>
        </div> 
<div class="wrapper">

<table>
	<tr>
	<td>
		<b>Enter Amount: &nbsp; &nbsp; <input type="text" name="amount"><br></b>
	</td>
</tr>
<tr>
<td>
	<br><center><b>From: &nbsp; &nbsp; <select name='cur1'></b> 
	 <option value="AUD">Australian Dollor(AUD)</option>
	 <option value="USD" selected>US Dollar(USD)</option>
	 </select>
</td>
</tr
<tr>
	<td>
	<br><center><b>To: &nbsp; &nbsp; <select name='cur2'></b>
	 <option value="INR" selected >Indian Rupee(INR)</option>
	 <option value="JPY">Japanese Yen(JPY)</option>
	 <option value="PHP">PHilippine Peso(PHP)</option>
	
	</select>
</td>
</tr>
<tr>
<td><center><br>
<input type='submit' class="btn" name='submit' value="CovertNow"></center>
</td>
</tr>
</table>
</form>
</div>

</div>

<?php
if(isset($_POST['submit'])){
	
$amount = $_POST['amount'];
$cur1 = $_POST['cur1'];
$cur2 = $_POST['cur2'];

if($cur1=="AUD" AND $cur2=="JPY"){
echo "<center><br><b><h3>Your Converted Amount is:</b><br></center>";
echo "<center><b><h3>" . $amount*82.463 . "</center>";
}

if($cur1=="AUD" AND $cur2=="INR"){
echo "<center><br><b><h3>Your Converted Amount is:</b><br></center>";
echo "<center><b><h3>" . $amount* 51.09 . "</center>";
}

if($cur1=="AUD" AND $cur2=="PHP"){
echo "<center><br><b><h3>Your Converted Amount is:</b><br></center>";
echo "<center><b><h3>" . $amount* 37.15 . "</center>";
}

if($cur1=="USD" AND $cur2=="JPY"){
echo "<center><br><b><h3>Your Converted Amount is:</b><br></center>";
echo "<center><b><h3>" . $amount* 109.49 . "</center>";
}

if($cur1=="USD" AND $cur2=="INR"){
echo "<center><br><b><h3>Your Converted Amount is:</b><br></center>";
echo "<center><b><h3>" . $amount* 67.83 . "</center>";
}

if($cur1=="USD" AND $cur2=="PHP"){
echo "<center><br><b><h3>Your Converted Amount is:</b><br></center>";
echo "<center><b><h3>" . $amount*49.32  . "</center>";
}
}
?>

</body>
</html>