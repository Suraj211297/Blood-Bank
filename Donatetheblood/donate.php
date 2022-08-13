<?php 

include ('include/header.php'); 

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

<title>Donate</title>



<!-- Start Php REQUEST_METHOD -->

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $blood_group = $_POST['blood_group'];
    $gender = $_POST['gender'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    $city = $_POST['city'];
    $password = $_POST['password'];
   
// Need for connection
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
 //  Submit to the database

//Insert the data into the database:-
  $donordob = $day."-".$month."-".$year;

  // $password = md5($password);

$sql = "INSERT INTO `blood` (`name`,`blood_group`,`gender`,`dob`,`email`,`contact_no`,`city`,`password`,`save_life_date`) VALUES ('$name', '$blood_group','$gender','$donordob','$email','$contact_no','$city','$password','0');";
$result = mysqli_query($conn, $sql);

if($result){
   
   header("Location: signin.php");
}
else{
    echo "The record has not inserted please check your query ". mysqli_error($conn);
      }
   }


 }

?>

<!-- //styling of donate page -->

 <style>
  .size{
    min-height: 0px;
    padding: 60px 0 40px 0;
    
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
  .form-group{
    text-align: left;
  }
  .sg{
    text-align: center;
  }

  h1{
    color: white;
  }
  h3{
    color: #e74c3c;
    text-align: center;
  }

</style>
<!-- start container -->
<div class="container-fluid red-background size">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h1 class="text-center">Donate</h1>
    </div>
  </div>
</div>
<!-- End container -->

<!-- Start form container -->
<div class="container size">
  <div class="row">
    <div class="col-md-6 offset-md-3 form-container">
          <h3>SignUp</h3>


<!-- Start form -->
 <form class="form-group" action="" method="POST">

<!-- Start the form group -->

<!-- start full name -->
          <div class="form-group">
            <label for="fullname">Full Name</label>
           <input type="text" name="name"  class="form-control" id="name"  placeholder="Full Name" title="please enter your full name" required="">
         </div>

  <!-- End  full name -->


<!-- start blood group -->
    <div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>

      </div>
<!-- End blood group -->


<!-- start gender -->
    <div class="form-group">
             <label for="gender">Gender</label><br>
                 Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
                Female<input type="radio" name="gender" id="gender" value="Fe-male" style="margin-left:10px;">

     </div>
<!-- End gender -->


<!-- start Date of birth -->
  <div class="form-inline">
              <label for="name">Date of Birth</label><br>
              <select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
                <option value="">---Date---</option>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option>
              </select>

</div>
<!-- End date of birth -->

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
              <select name="city" id="city" class="form-control demo-default" required>
  <option value="">-- Select --</option><optgroup title="Bihar" label="&raquo; Bihar"></optgroup><option value="patna" >Patna</option><option value="Hazipur" >Hazipur</option><option value="Muzaffarpur" >Muzaffarpur</option><option value="mehasi" >Mehasi</option><option value="motipur" >Motipur</option><option value="chakia" >Chakia</option><option value="Pipra" >Pipra</option><option value="givdhara" >Givdhara</option><optgroup title="Champaran" label="&raquo; Champaran"></optgroup><option value="Motihari" >Motihari</option><option value="saguali" >Sagauali</option><option value="Magauliya" >Magauliya</option><option value="Bettiah" >Bettiah</option><option value="kumarbhag" >kumarbhag</option><option value="chanpatiya" >Chanpatiya</option><option value="sathi" >sathi</option><option value="narkatiyaganj" >Narkatiyaganj</option><option value="harinagar" >Harinagar</option><option value="Balmikinagar" >Balmikinagar</option><option value="bhagha" >Bhagha</option><option value="shivhar" >Shivhar</option><option value="Dhaka" >Dhaka</option><option value="Barganiya" >Barganiya</option><option value="Sitamarhi" >Sitamarhi</option><option value="Samastipur" >Samastipur</option><option value="Supaiyal" >Supaiyal</option></option><option value="Naseerabad" >Naseerabad</option><option value="Nushki" >Nushki</option><option value="Panjgur" >Panjgur</option><option value="Pishin" >Pishin</option><option value="Qilla Abdullah" >Qilla Abdullah</option><option value="Qilla Saifullah" >Qilla Saifullah</option><option value="Quetta" >Quetta</option><option value="Sibi" >Sibi</option><option value="Zhob" >Zhob</option><option value="Ziarat" >Ziarat</option><optgroup title="Federally Administered Tribal Areas (FATA" label="&raquo; Federally Administered Tribal Areas (FATA"></optgroup><option value="Bajaur Agency" >Bajaur Agency</option><option value="Khyber Agency" >Khyber Agency</option><option value="Kurram Agency" >Kurram Agency</option><option value="Mohmand Agency" >Mohmand Agency</option><option value="North Waziristan Agency" >North Waziristan Agency</option><option value="Orakzai Agency" >Orakzai Agency</option><option value="South Waziristan Agency" >South Waziristan Agency</option><optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup><option value="Islamabad" >Islamabad</option><optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (NWFP)"></optgroup><option value="Abbottabad" >Abbottabad</option><option value="Bannu" >Bannu</option><option value="Batagram" >Batagram</option><option value="Buner" >Buner</option><option value="Charsadda" >Charsadda</option><option value="Chitral" >Chitral</option><option value="Dera Ismail Khan" >Dera Ismail Khan</option><option value="Dir Lower" >Dir Lower</option><option value="Dir Upper" >Dir Upper</option><option value="Hangu" >Hangu</option><option value="Haripur" >Haripur</option><option value="Karak" >Karak</option><option value="Kohat" >Kohat</option><option value="Kohistan" >Kohistan</option><option value="Lakki Marwat" >Lakki Marwat</option><option value="Malakand" >Malakand</option><option value="Mansehra" >Mansehra</option><option value="Mardan" >Mardan</option><option value="Nowshera" >Nowshera</option><option value="Peshawar" >Peshawar</option><option value="Shangla" >Shangla</option><option value="Swabi" >Swabi</option><option value="Swat" >Swat</option><option value="Tank" >Tank</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option><option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option><option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option><option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option><option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>

</div>
<!-- End city-->

<!-- start password-->
<div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password"  placeholder="Password" class="form-control" title="please enter your password"  required="">
 </div>
 <!--End password-->

 <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" placeholder="Confirm Password" class="form-control" title="please enter correct password"  required="">

</div>

 <div class="form-inline">
              <input type="checkbox" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div>
<!--End checkbox-->

  <!-- start submit -->

 <div class="sg">

      <button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>

</div>
<!-- End submit -->

    </form><!-- End form group -->

    </div>
  </div>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>



<?php

  include('include/footer.php');

 ?>
  

  