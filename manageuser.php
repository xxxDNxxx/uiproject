<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style type="text/css">
     body {
	
	background-image:url(1511.jpg);
	background-size:cover;
	background-attachment:fixed;
	 }
	.mar{
		padding:10px;
		border-style:solid;
		color:#F00;
		margin-left:200px;
		background:#CF6;
		border-color:#000;
		width:900px;
		border-radius:10px;
		font-family:Verdana, Geneva, sans-serif;
	}
	.mar2{
		
		margin-top:50px;
		border-style:solid;
		color:#000;
		margin-left:200px;
		background:#0C6;
		border-color:#000;
		width:1200px;
		height:auto;
		border-radius:5px;
		box-shadow:10px 10px;
		padding:18px;
		font-family:Verdana, Geneva, sans-serif;
		border-radius:20px;
	
	}
	.search{
		
		margin-top:50px;
		border-style:solid;
		color:#000;
		margin-left:300px;
		background:#0C6;
		border-color:#000;
		width:500px;
		height:auto;
		border-radius:5px;
		box-shadow:10px 10px;
		padding:18px;
		font-family:Verdana, Geneva, sans-serif;
		border-radius:20px;
		margin-bottom:50px;
	
	}
	.but{
border:1px solid #ffc826; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:18px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #000000;
 background-color: #ffd65e; background-image: -webkit-gradient(linear, left top, left bottom, from(#ffd65e), to(#febf04));
 background-image: -webkit-linear-gradient(top, #ffd65e, #febf04);
 background-image: -moz-linear-gradient(top, #ffd65e, #febf04);
 background-image: -ms-linear-gradient(top, #ffd65e, #febf04);
 background-image: -o-linear-gradient(top, #ffd65e, #febf04);
 background-image: linear-gradient(to bottom, #ffd65e, #febf04);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ffd65e, endColorstr=#febf04);
 font-size:18px;
}
	.but2{
border:1px solid #ffc826; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:18px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #000000;
 background-color: #FFFFFF; background-image: -webkit-gradient(linear, left top, left bottom, from(#ffd65e), to(#febf04));
 background-image: -webkit-linear-gradient(top, #ffd65e, #febf04);
 background-image: -moz-linear-gradient(top, #ffd65e, #febf04);
 background-image: -ms-linear-gradient(top, #ffd65e, #febf04);
 background-image: -o-linear-gradient(top, #ffd65e, #febf04);
 background-image: linear-gradient(to bottom, #ffd65e, #febf04);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ffd65e, endColorstr=#febf04);
 font-size:18px;
}
	
	
    </style>
    <title>Weblog</title>
  </head>
<body>
<div align="center">
  <img  src="31344686_1704141333000568_3657415830821404672_n.png" width="100%" height="200" >
</div>
  <form class="form-inline my-2 my-lg-0"> 
  <a href="index.php"  class="btn btn-primary" style="margin-left:200px" ">Home</a>

    <input  class="form-control mr-sm-2"  type="search" placeholder="Search" aria-label="Search" style="margin-left:50px" >
  <button style="border-width:medium" class="btn btn-outline-danger my-2 my-sm-0" type="submit"><b>Search</b></button>
<a href="create.php" class="btn btn-success" style="margin-left:60px" >สร้างกระทู้</a> 
&ensp;&ensp;&ensp;
<a href="admin.php" class="btn btn-success"  >User Home</a> 
&ensp;&ensp;&ensp;
<a href="create.html" class="btn btn-danger">จัดการ User</a> &ensp;&ensp;&ensp;
<button type="button" class="btn btn-primary"> แจ้งเตือน <span class="badge badge-light">9</span> <span class="sr-only">unread messages</span></button>
&ensp;&ensp;&ensp;
<button type="button" class="btn btn-info">Profile</button>
&ensp;&ensp;&ensp;
<a href="login.html" class="btn btn-dark">Logout </a>
  </form></P>
<p>&nbsp;</p>
<form name="form1" method="post" action="" class="search">
  <label  for="textfield"><b>Username</b></label>
  <input style="margin-left:20px" type="text" name="textfield" id="textfield">
  <input class="but" style="margin-left:20px" type="submit" name="button" id="button" value="ค้นหา">
</form>

<form name="form1" method="post" action="" style="margin-left:400px">
  <input class="but2" style="margin-left:20px" type="submit" name="button1" id="button1" value="ลบ">
  <input class="but2" style="margin-left:20px" type="submit" name="button2" id="button2" value="ตั้งเป็น Admin">
   <input class="but2" style="margin-left:20px" type="submit" name="button3" id="button3" value="ตั้งเป็น User">
</form>
<p>&nbsp;</p>
</body>
</html>