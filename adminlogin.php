<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
background: #91a717;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
flex-direction: column;
}

*{
font-family: cursive;
box-sizing: padding-box;
}

form {
width: 1000px;
border: 3px solid rgb(157, 122, 147);
padding: 20px;
background: rgb(55, 80, 64);
border-radius: 20px;
}

h2 {

text-align: center;

margin-bottom: 40px;

}

input {

display: block;

border: 2px solid #ccc;

width: 95%;

padding: 10px;

margin: 10px auto;

border-radius: 5px;

}

label {
color: #777;

font-size: 18px;

padding: 10px;

}

button {
background: rgb(45, 184, 202);

padding: 10px 15px;

color: #ggg;

border-radius: 5px;

width:100px;

border: none;

}

button:hover{

opacity: .10;

}

.error {

background: #F2DEDD;

color: #0c0105;

padding: 10px;

width: 95%;

border-radius: 5px;

margin: 20px auto;

}

h1 {

text-align: center;

color: rgb(140, 32, 39);

}

a {

float: right;

background: rgb(183, 225, 233);

padding: 10px 15px;

color: #aaa;

border-radius: 10px;

margin-right: 10px;

border: none;

text-decoration: none;

}

a:hover{

opacity: .7;

}
</style>

<body>

<form action="admin.php" method="post">

<h2>ADMIN LOGIN</h2>


<label><b>User Name</b></label>

<input type="text" name="uname" placeholder="User Name"><br>

<label><b>Password</b></label>

<input type="password" name="password" placeholder="Password"><br> 

<center><button type="submit" name="send">Login</button></center>

</form>
    
</body>
</html>