<?php 

   session_start();
	
	include 'include/header.php';

 if(isset($_SESSION['email']) && !empty($_SESSION['email'])){


?>


<?php

 /* 
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO(php data object)
*/
// Connecting to the Database we need:-
   $servername = "localhost";
   $username = "root";
   $Password = "";
   $database = "bloodbank";

// Create a connection
  $conn = mysqli_connect($servername, $username, $Password,$database);

// Die if connection was not successful
   if (!$conn){
       die("Sorry we failed to connect: ". mysqli_connect_error());
  }
  else{
     // echo "Connection was successful";
  }

 

 
 $email=$_SESSION['email'];
  
 
     if (isset($_POST['update'])){

                    $name = $_POST['name'];
                    $Newemail = $_POST['email'];
                    $contact_no = $_POST['contact_no'];
                    $city = $_POST['city'];
                    $password = $_POST['password'];
                   
  

$sql = "UPDATE  blood SET name='$name',email='$Newemail',contact_no='$contact_no',city='$city',password='$password' WHERE email= '$email' " ;


$result = mysqli_query($conn, $sql);                                                                   



if($result){
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Your record has been Updated Successfully.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
               </div>';
     }else{

           echo "Data not updated ". mysqli_error($conn);
      }

   
 }


include 'include/sidebar.php';

?>


<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}

.alert{
   text-align: center;
}

</style>
			<div class="container" style="padding: 60px 0;">

    

			<div class="row">


				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">


					
					<!-- Error Messages -->	

   <!-- Start form -->
 <form class="form-group" action="" method="POST">

 

<!-- Start the form group -->

<!-- start full name -->
          <div class="form-group">
            <label for="fullname">Full Name</label>
           <input type="text" name="name"  class="form-control" id="name"  placeholder="Full Name" title="please enter your full name" required="">
         </div>

  <!-- End  full name -->




<!-- start Email-->
<div class="form-group">
   <label for="email" class="form-label">Email</label>
    <input type="email" name="email"  class="form-control" id="email" placeholder="Email" title="please enter your email"  required="">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
</div>
<!-- End email-->


<!-- start contact -->   
<div class="form-group">
        <label for="contact_no">Contact No</label>
         <input type="text" name="contact_no"  placeholder="91********" class="form-control"  title="11 numeric characters only" maxlength="10"  required="">

</div>
<!-- End contact -->


<!-- start city -->
  <div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required="">
  <option value=""> Select Your city</option>

  <optgroup title="Bihar" label="&raquo; Bihar"></optgroup><option value="patna" >Patna</option><option value="Hazipur" >Hazipur</option><option value="Muzaffarpur" >Muzaffarpur</option><option value="mehasi" >Mehasi</option><option value="motipur" >Motipur</option><option value="chakia" >Chakia</option><option value="Pipra" >Pipra</option><option value="givdhara" >Givdhara</option><optgroup title="Champaran" label="&raquo; Champaran"></optgroup><option value="Motihari" >Motihari</option><option value="saguali" >Sagauali</option><option value="Magauliya" >Magauliya</option><option value="Bettiah" >Bettiah</option><option value="kumarbhag" >kumarbhag</option><option value="chanpatiya" >Chanpatiya</option><option value="sathi" >sathi</option><option value="narkatiyaganj" >Narkatiyaganj</option><option value="harinagar" >Harinagar</option><option value="Balmikinagar" >Balmikinagar</option><option value="bhagha" >Bhagha</option><option value="shivhar" >Shivhar</option><option value="Dhaka" >Dhaka</option><option value="Barganiya" >Barganiya</option><option value="Sitamarhi" >Sitamarhi</option><option value="Samastipur" >Samastipur</option><option value="Supaiyal" >Supaiyal</option></option><option value="Naseerabad" >Naseerabad</option><option value="Nushki" >Nushki</option><option value="Panjgur" >Panjgur</option><option value="Pishin" >Pishin</option><option value="Qilla Abdullah" >Qilla Abdullah</option><option value="Qilla Saifullah" >Qilla Saifullah</option><option value="Quetta" >Quetta</option><option value="Sibi" >Sibi</option><option value="Zhob" >Zhob</option><option value="Ziarat" >Ziarat</option><optgroup title="Federally Administered Tribal Areas (FATA" label="&raquo; Federally Administered Tribal Areas (FATA"></optgroup><option value="Bajaur Agency" >Bajaur Agency</option><option value="Khyber Agency" >Khyber Agency</option><option value="Kurram Agency" >Kurram Agency</option><option value="Mohmand Agency" >Mohmand Agency</option><option value="North Waziristan Agency" >North Waziristan Agency</option><option value="Orakzai Agency" >Orakzai Agency</option><option value="South Waziristan Agency" >South Waziristan Agency</option><optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup><option value="Islamabad" >Islamabad</option><optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (NWFP)"></optgroup><option value="Abbottabad" >Abbottabad</option><option value="Bannu" >Bannu</option><option value="Batagram" >Batagram</option><option value="Buner" >Buner</option><option value="Charsadda" >Charsadda</option><option value="Chitral" >Chitral</option><option value="Dera Ismail Khan" >Dera Ismail Khan</option><option value="Dir Lower" >Dir Lower</option><option value="Dir Upper" >Dir Upper</option><option value="Hangu" >Hangu</option><option value="Haripur" >Haripur</option><option value="Karak" >Karak</option><option value="Kohat" >Kohat</option><option value="Kohistan" >Kohistan</option><option value="Lakki Marwat" >Lakki Marwat</option><option value="Malakand" >Malakand</option><option value="Mansehra" >Mansehra</option><option value="Mardan" >Mardan</option><option value="Nowshera" >Nowshera</option><option value="Peshawar" >Peshawar</option><option value="Shangla" >Shangla</option><option value="Swabi" >Swabi</option><option value="Swat" >Swat</option><option value="Tank" >Tank</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option><option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option><option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option><option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option><option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>

</div>
<!-- End city-->

 <div class="form-group">
              <label for="password">Old-Password</label>
              <input type="password" name="oldpassword" placeholder="Old-Password" class="form-control" required="">
    </div><!--End form-group-->

  <div class="form-group">
              <label for="password">New-Password</label>
              <input type="password" name="password"  placeholder="New-Password" class="form-control" required="">
     </div><!--End form-group-->

   <div class="form-group">
              <label for="password">Confirm-Password</label>
              <input type="password" name="C-password"  placeholder="Confirm-Password" class="form-control" required="">
       </div><!--End form-group-->



  <!-- start submit -->

 <div class="sg">

      <button id="submit" name="update" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Update</button>

</div>
<!-- End submit -->

    </form><!-- End form group -->

				</div>
        </div>
      </div>
		</div>
	
<?php

}else{

 		header('Location: ../index.php');
} 


include 'include/footer.php'; 
 ?>