<?php

$conn = mysqli_connect("localhost","root");

if($conn){
	// echo "connection successful";
}else{
	echo "connection failed";
}

?>

<?php
  include 'include/header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'links.php' ?>

</head>
</head>
<body>

<header>
<style>

.size{
      min-height: 0px;
      padding: 60px 0 60px 0;

}

h1{
     color: white;
}

.form-group{
          text-align: left;
    }

h3{
     color: #e74c3c;
		text-align: center;
  }

.red-bar{
		width: 25%;
	}

.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
        -moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
         box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}

.sg2{
	text-align: center;
}

</style>


 <div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">SignIn</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>

<div class="conatiner size ">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
		<h3>SignIn</h3>
		<hr class="red-bar">
				
				<form action="logincheck.php" method="POST">

					<div class="form-group">
						<label>Email Id</label>
						<input type="text" name="email" value="" class="form-control" placeholder="Email"  required="">

					</div>
					
                   <div class="form-group">
						<label>Password</label>
						<input type="password" name="password" value="" class="form-control" placeholder="Password"  required="">
					</div>	

		<div class="sg2">

		        <button class="btn btn-danger btn-lg center-aligned" type="submit" name="SignIn">SignIn</button>
		</div>
				</form>

	         </div>
           </div>
       </div>
</header>

</body>
</html>

<?php

   include 'include/footer.php';

?>