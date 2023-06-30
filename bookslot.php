<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" href="assets/images/fav1.png" type="image/png">

<style>
.info,td
{
  color: whitesmoke;
  font-size: 1.1rem;
  padding-left: 2rem;
  font-weight: normal;
}
</style>

<script>

/* var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  } */
  </script>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
<!--<link rel="stylesheet" type="text/css" href="index.css">-->
  <m$eta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-img" style="background-image:url('img2.jpg'); background-repeat: no-repeat; background-size: cover;">
  
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav gap-3 mb-2 mb-lg-0">
          
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html" onclick="repalcehome()"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
              <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
            </svg>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="amount.html">Amount</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="rate_us.html">Rate Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"  data-bs-toggle="modal" data-bs-target="#contact">Contact Us</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  
  <form method="post">
    <div class="content d-flex flex-column align-items-center">
      
      <div class="main h1 mx-auto" style="color: aliceblue; padding-top: 2rem; padding-bottom: 2rem;"> Please <?php  //$name = $_POS$T['uname']; ech$o "$name";  ?> Book your slot </div>
      
      <div class=" col-12 col-md-8 col-lg-6 justify-content-center d-flex flex-column align-items-center" style="padding-top: 3rem; padding-bottom: 3rem; backdrop-filter: blur(2rem);" id="form1">
        
        
        <div class="input-group d-flex justify-content-center mb-3 col-4">
          <div class="input-group-prepend col-4">
            <label class="input-group-text" for="nplate" >Name</label>
          </div>
          <input type="text" name="name"  placeholder="Amar" value="Amar" style="border:none; width:33%; outline:none; "></input>
        </div>
        
        <div class="input-group d-flex justify-content-center mb-3 col-4">
          <div class="input-group-prepend col-4">
          <label class="input-group-text" for="city">Select City</label>
        </div>
        <select class="custom-select col-4" name="city">
          <option selected>City</option>
          <option value="Ahmedabad" selected>Ahmedabad</option>
          <option value="Baroda">Baroda</option>
          <option value="Surat">Surat</option>
          <option value="Rajkot">Rajkot</option>
        </select>
      </div>
      
      <div class="input-group d-flex justify-content-center mb-3 col-4">
        <div class="input-group-prepend col-4">
          <label class="input-group-text" for="area">Select Area <?php  //$area = $_POST['area']; echo "$area";?> </label>
        </div>
        <select class="custom-select col-4" name="area">
          <option>Area</option>
          <option value="Alpha One mall" selected>Alpha One Mall</option>
          <option value="Himalaya Mall">Himalya Mall</option>
          <option value="Rajpath Club">Rajpath Club</option>
          <option value="Karnavati Club">Karnavati</option>
        </select>
      </div>
      
      <div class="input-group d-flex justify-content-center mb-3 col-4">
        <div class="input-group-prepend col-4">
          <label class="input-group-text" for="vtype">Type of Vehicle</label>
        </div>
        <select class="custom-select col-4" name="vtype">
          <option selected>Vehicle Type</option>
          <option value="2-wheeler">2 - Wheeler</option>
          <option value="4-wheeler" selected>4 - Wheeler</option>
          </select>
        </div>
      
      <div class="input-group d-flex justify-content-center mb-3 col-4">
        <div class="input-group-prepend col-4">
          <label class="input-group-text" for="phr">Select Time</label>
        </div>
        <select class="custom-select col-4" name="phr">
          <option selected>Time</option>
          <option value="1-hour">1 - Hour</option>
          <option value="2-hour" selected>2 - Hour</option>
          <option value="3-hour">3 - Hour</option>
          <option value="4-hour">4 - Hour</option>
        </select>
      </div>

      
      <div class="input-group d-flex justify-content-center mb-3 col-4">
        <div class="input-group-prepend col-4">
          <label class="input-group-text" for="atime">Arriving Time</label>
        </div>
        <select class="custom-select col-4" name="atime">
          <option selected>Arriving Time</option>
          <option value="00:00">00:00-01:00</option>
          <option value="01:00">01:00</option>
          <option value="02:00" selected>02:00</option>
          <option value="03:00">03:00</option>
        </select>
      </div>

      
      <div class="input-group d-flex justify-content-center mb-3 col-4">
        <div class="input-group-prepend col-4">
          <label class="input-group-text" for="nov">No. Of Vehicle</label>
        </div>
        <select class="custom-select col-4" name="nov">
          <option selected>No Of Vehicle</option>
          <option value="1" selected>1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>
      
      
      
      <button type="submit" class="btn btn-primary col-4" id="go" name="go"> Book  Slot</button>
    </div>
    
  </form>    
    
    <!--Content of  Page 2  -->
  <?php
    if(isset($_POST['go']))
    {?>
      <div class=" col-12 col-md-8 col-lg-6 justify-content-center d-flex flex-column align-items-center" style="padding-top: 3rem; padding-bottom: 3rem; backdrop-filter: blur(2rem);" id="form1">
    
      <script>
        function replace(){
          document.getElementById("form1").classList.add("d-none");
        }
        
        replace();
      </script>

<form name="detail" method="post" class="w-100 d-flex">
  <div class="col-3"></div>
  <div class="col">
    <div class="row g-0">
      <div class="col-5 info text-white">
        Name
      </div>
      <div class="col-auto info text-white">:</div>
      <div class="col-2"></div>
      <div class="col info text-white"><?php $name=$_POST['name']; echo"  $name"; ?></div>
    </div>
    <div class="row g-0">
      <div class="col-5 info text-white">
        City
      </div>
      <div class="col-auto info text-white">:</div>
      <div class="col-2"></div>
      <div class="col info text-white"><?php $city=$_POST['city']; echo"$city"; ?></div>
    </div>
    <div class="row g-0">
      <div class="col-5 info text-white">
        Area
      </div>
      <div class="col-auto info text-white">:</div>
      <div class="col-2"></div>
      <div class="col info text-white"><?php $area=$_POST['area']; echo"$area"; ?></div>
    </div>
    <div class="row g-0">
      <div class="col-5 info text-white">
        Arriving Time
      </div>
      <div class="col-auto info text-white">:</div>
      <div class="col-2"></div>
      <div class="col info text-white"><?php $atime=$_POST['atime']; echo"   $atime "; ?></div>
    </div>
    <div class="row g-0">
      <div class="row g-0">
        <div class="col-5 info text-white"> 
          Type of vehicle 
        </div>
        <div class="col-auto info text-white">:</div>
        <div class="col-2"></div>
        <div class="col info text-white"><?php $vtype=$_POST['vtype']; echo"   $vtype"; ?> </div>
      </div>
      <div class="col-5 info text-white">
        Parking Hour
      </div>
      <div class="col-auto info text-white">:</div>
      <div class="col-2"></div>
      <div class="col info text-white"> <?php $vhr=$_POST['phr']; echo"   $vhr "; ?></div>
    </div>
    <div class="row g-0">
      <div class="col-5 info text-white">
        No. of Vehicle
      </div>
      <div class="col-auto info text-white">:</div>
      <div class="col-2"></div>
      <div class="col info text-white"><?php $nov=$_POST['nov']; echo"   $nov "; ?></div>
    </div>

    <?php
    if($vtype=="2-wheeler")
    {?>
       <div class="row g-0">
         <div class="col-5 info text-white"> Total amount </div> 
         <div class="col-auto info text-white">:</div>
         <div class="col-2"></div> 
         <div class="col info text-white"><?php $amt=((10*$nov)*intval($vhr)); echo"$amt Rs."; if ($amt != 10) {?><style type="text/css">#b2{
display:none;
}</style><?php }else{?><style type="text/css">#b1{
display:none;
}</style><?php }  ?> </div> 
       </div>
    <?php
    }
    elseif($vtype=="4-wheeler")
    {?>       
      <div class="row g-0"> <div class="col-5 info text-white"> Total amount </div> <div class="col-auto info text-white">:</div><div class="col-2"></div> <div class="col info text-white"><?php $amt=((15*$nov)*intval($vhr)); echo"$amt Rs.";  if ($amt == 10) {?><style type="text/css">#b2{
display:none;
}</style><?php }else{?><style type="text/css">#b1{
display:none;
}</style><?php } ?> </div> </div>
    <?php
    }
    else
    {?>
      <div class="row g-0"> <div class="col-5 info text-white"> Total amount </div> <div class="col-auto info text-white">:</div><div class="col-2"></div> <div class="col info text-white" id ="zz"><?php $amt=((25*$nov)*intval($vhr)); echo"$amt Rs."; ?> </div> </div>
    <?php
    }
    ?>
     
    <div class="row g-0 mt-3">
      <div class="col-6">
        <button class="btn btn-primary">Cancel</button>
      </div>
      </form>
      <div class="col-6" id="b1">
      <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_LtCcAZyVPRR1qc" async> </script> </form>
      </div>
      
      <div class="col-6" id="b2">
        <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_LtCg38SXCMMYBL" async> </script> </form>
      </div>
    </div>
    </div>
    <div class="col-2"></div>

                <!--  -->
                <!-- 
                 <button type="button" class="btn btn-primary" id="payment"> Make Payment</button> -->
      </div>
    </table>
  </div>
    <?php
  }?>
    <!-- //Content of Page 2 ends here-->

  <!-- Contact Us Page -->
  
  <div class="modal fade" id="contact" tabindex="-1" aria-labelledby="contactLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3> Contact Us </h3>
          <div class="modal-title" id="contactLabel">
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
      <div class="container">
		  <form>
			<div class="">
			  <label for="recipient-name" class="col-form-label"> Email </label>
			  <input type="text" class="form-control" id="recipient-name">
			</div>
			<div class="pt-3">
			  <label for="message-text" class="col-form-label">Message:</label>
			  <textarea class="form-control" id="message-text"></textarea>
			</div>
      <div class="pt-4">
        <button type="button" class="btn btn-primary w-100">Send message</button>
        </div>
        <div class="pt-3">
        <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Close</button>
			</div>
		  
		</div>
  </form>
	
	  </div>
	</div>
  </div>
</div>

  <!-- Contact Us Page Ends here -->
    
  <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>