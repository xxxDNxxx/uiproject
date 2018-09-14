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
    </style>

<title>Weblog</title>
</head>
<body>
<div align="center">
  <img  src="31344686_1704141333000568_3657415830821404672_n.png" width="100%" height="200" >
</div>
  <form class="form-inline my-2 my-lg-0"> 
  <a href="index.php"  class="btn btn-primary" style="margin-left:252px" ">Home</a>

<input  class="form-control mr-sm-2"  type="search" placeholder="Search" aria-label="Search" style="margin-left:50px" >
<button style="border-width:medium" class="btn btn-outline-danger my-2 my-sm-0" type="submit"><b>Search</b></button>
<a href="create.php" class="btn btn-success" style="margin-left:60px" >สร้างกระทู้</a> 
&ensp;&ensp;&ensp; 
<a href="user.php" class="btn btn-info">User Home</a> &ensp;&ensp;&ensp;
<button type="button" class="btn btn-primary"> แจ้งเตือน <span class="badge badge-light">9</span> <span class="sr-only">unread messages</span></button>
&ensp;&ensp;&ensp;
<button type="button" class="btn btn-info">Profile</button>
&ensp;&ensp;&ensp;
<a href="login.html" class="btn btn-dark">Logout </a>
  </form></P>
<p>&nbsp;</p>
 &ensp;&ensp;&ensp; &ensp;&ensp;&ensp; &ensp;&ensp;&ensp; &ensp;&ensp;&ensp; &ensp;&ensp;&ensp; &ensp;&ensp;
 <table width="200" border="0" align="center">
   <tr>
     <th nowrap><h2>เลือกประเภท</h2></th>
   </tr>
 </table>

 <table width="812" border="0" align="center" cellpadding="25">
  
   <tr>
      <td width="160" height="500" align="center" valign="middle"><p> <a href="detail.php" onClick=" <?php session_start(); 
	   $_SESSION['type']="บทความ"?>"><img src="type-20180426T121636Z-001/type/blog.png" align="middle">				       </a></p>
        <p>&nbsp;</p>
     <p><B>บทความ</B></p></td>
      <td width="153" align="center" valign="middle" nowrap><p>&nbsp;
        </p>
        <p>&nbsp;</p>
        <p> <a href="detail.php" onClick=" <?php session_start(); 
	   $_SESSION['type']="ข่าว"?>"><img src="type-20180426T121636Z-001/type/news.png" width="153" height="156" align="middle"></a>
        </p>
        <p>&nbsp;</p>
        <p><b>ข่าว</b></p>
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
      <td width="160" align="center" valign="middle"><form>
        <p> <a href="detail.php" onClick=" <?php session_start(); 
	   $_SESSION['type']="คำถาม"?>"><img src="type-20180426T121636Z-001/type/quaion.png" align="middle"></a>
        </p>
        <p>&nbsp;</p>
      </form>
      <p><B>คำถาม</B></p></td>
      <td width="160" align="center" valign="middle" nowrap><p><a href="detail.php" onClick=" <?php session_start(); 
	   $_SESSION['type']="รีวิว"?>"><img src="type-20180426T121636Z-001/type/review.png" align="middle"></a></p>
        <p>&nbsp;</p>
        <p><b>รีวิว</b></p>
        <p></td>
      <td width="157" align="center" valign="middle" nowrap><form>
        <p>&nbsp;        </p>
        <p> <a href="detail.php" onClick=" <?php session_start(); 
	   $_SESSION['type']="ขายของ"?>"><img src="type-20180426T121636Z-001/type/shop.png" align="middle"></a>
        </p>
        <p>&nbsp;</p>
      </form>
      <p><B>ขายของ</B></p>
      <p>&nbsp;</p></td>
   </tr>
</table>
</body>
</html>