<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style type="text/css">
    #logologin{
      width: 50%;
      margin: auto;
      display: block;
    }


   body {

	background-color: #232323;
	background-size:cover;
	background-attachment:fixed;
	 }
    </style>
      <?php

	  		try{
			     $connection= new MongoClient();
 				 $db= $connection->weblog;
  				 $collection=$db->user;
				 if((isset($_POST['username'])&&isset($_POST['password']))){
				 $doc=array("username"=>$_POST['username'],"password"=>$_POST['password']);

				 $cursor=$collection->find($doc);
				 foreach($cursor as $log){

					 if((isset($log['username'])&&isset($log['password']))){
						 session_start();
						 $_SESSION['username']=$log['username'];
						header('Location:index.php');
					 }


				 }
				 echo '<script language="javascript">';
				echo 'alert("Username หรือ Password ผิด!!")';
				echo '</script>';
				 }
			}catch(Exception $e){
			}
 	?>
  <script type="text/javascript">
 	 function hello(){
		 var user=document.form1.username.value;
		 var pass=document.form1.password.value;
		 if(user==0||pass==0){
	 		alert("กรุณาป้อน Username  หรือ Password");
		 }else{

		 }
	 }

  </script>

    <title>Weblog</title>
</head>
  <body>
  <img id="logologin"  src="41741957_1924609860932960_1352186263196663808_n.png"  >
  <p ><!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script></p>
    &ensp;&emsp;&ensp;&ensp;
    <table width="200" border="0" align="center" cellpadding="50">
      <tr>
        <th  nowrap ><form name="form1" method="post">
          <div class="form-group">
            <h3> <label class="text-primary">Username</label></h3>
            <input  name="username" class="form-control"  placeholder="Username"
  			</div>
          <div class="form-group">
           <h3> <label  class="text-primary">Password</label></h3>
            <input name="password" type="password" class="form-control" placeholder="Password">
          </div>

          <button  type="submit" class="btn btn-primary" >Login</button>
  &ensp;&emsp;&ensp;&ensp;
  <a href="register.php" class="btn btn-primary" action="register.php">สมัครสมาชิก</a>
        </form></th>
      </tr>
  </table>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
