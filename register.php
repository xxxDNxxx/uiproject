<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style type="text/css">
    label{
      color: rgb(255, 245, 0);
    }
    h6{
      color: rgb(255, 245, 0);
    }
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
  $connection= new MongoClient();
  $db= $connection->weblog;
  $collection=$db->user;
    if((isset($_POST['username'])&&isset($_POST['password']))){
      $collection->insert(array("username"=>$_POST['username'],"password"=>$_POST['password'],"name"=>$_POST['name'],
	  "gender"=>$_POST['gender'],"email"=>$_POST['email'],"address"=>$_POST['address'],"city"=>$_POST['city'],
	  "district"=>$_POST['district'],"province"=>$_POST['province'],"zipcode"=>$_POST['zipcode']));


      header('Location:login.php');

    }
  ?>"
    <title>Weblog</title>
  </head>
  <body>
    <img id="logologin"  src="41741957_1924609860932960_1352186263196663808_n.png" >
</h1>
    <table width="1000" border="0" align="center" cellpadding="50" cellspacing="50">
      <tr>
        <th align="center" nowrap>
        <form  method="post">
          <div class="form-group col-md-6" >
            <label for="inputAddress2">Username</label>
            <input name="username" type="text" class="form-control" id="inputAddress2" placeholder="Username">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input name="password"type="password" class="form-control" id="inputPassword4" placeholder="Password">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress">Name</label>
            <input name="name" type="text" class="form-control" id="inputAddress" placeholder="ชื่อนามสกุล">
          </div>
          <div class="form-group col-md-6">
            <p>

               <p>Gender</p>
      <h6>ชาย</h6>
    	<input name="gender" type="radio" value="male" />
      <<h6>หญิง</h6>
    	<input name="gender" type="radio" value="female" />
            </p>

          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input name="email" type="email" class="form-control"  placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress">Address</label>
            <input name "address" type="text" class="form-control"  placeholder="1234 Main St">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCity">ตำบล</label>
            <input name="city" type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCity">อำเภอ</label>
            <input name="district" type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">จังหวัด</label>
            <select name="province" class="form-control" id="inputState">
              <option selected>Choose...</option>
              <option>กรุงเทพมหานคร </option>
              <option>กระบี่ </option>
              <option>ชลบุรี </option>
              <option>ชัยนาท</option>
              <option>ชัยภูมิ </option>
              <option>สงขลา </option>
              <option>อุดรธานี </option>
              <option>หนองคาย </option>
              <option>แพร่ </option>
              <option>นครปฐม </option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Postcode</label>
            <input name="zipcode" type="text" class="form-control" id="inputZip">
          </div>
          </div>

  &ensp;&emsp;&ensp;&ensp;

  <button  type="submit" class="btn btn-primary" >สมัครสมาชิก</button>
        </form></th>
      </tr>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
