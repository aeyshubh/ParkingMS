<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Book Slots</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="shortcut icon" href="assets/images/fav1.png" type="image/png">

  <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
  <script type="tailwind-config">
  {
      theme: {
          extend: {
              keyframes: {
                  slideIn: {
                    '0%': {
                      opacity: '0',
                      transform: 'translateY(-10px)'
                    },
                    '100%': {
                      opacity: '1',
                      transform: 'translateY(0)'
                    }
                  }
              },
              animation: {
                  slideIn: 'slideIn 0.3s ease-out',
              }
          }
      }
  }

  </script>  
</head>
    <body>
    <?php
if(array_key_exists('slot1', $_POST)) {
    button1();
}
else if(array_key_exists('slot2', $_POST)) {
    button2();
}
function button1() {
    echo "This is Button1 that is selected";
}
function button2() {
    echo "This is Button2 that is selected";
}
?>
<form action = "bookslot" method="get">
        <div class="category-name">Book your Parking Slot</div> <br/>
        <main class="w-full h-screen bg-blue-100">
            <div tabindex="0" class="group relative inline-block p-5">
                <select name ="place" class="p-2 bg-green-500 text-[16px] text-white focus:outline-none">
                    <option value="1" class="py-3 px-4 cursor-pointer hover:bg-gray-200 hover:text-blue-700">Alpha One Mall</option>
                    <option value="2" class="py-3 px-4 cursor-pointer hover:bg-gray-200 hover:text-blue-700">New L.J</option>
                    <option value="3" class="py-3 px-4 cursor-pointer hover:bg-gray-200 hover:text-blue-700">Transcube Plaza</option>
                </select>
            </div>
    
        <div class="flex ... gap-14 m-40">
            <div class="basic-card basic-card-aqua">
                <div class="card-content">
                    <span class="card-title">Two Wheeler</span>
                    <p class="card-text">
                        <h2>Empty Slots : </h2>
                    </p>
                </div>

                <div class="card-link">
                        <input type="hidden" name ="slot1" value="1" />
                    <a href="bookslot.php" title="Read Full"><input type="hidden" name="slot"
                value ="1"><span>Book Now</span></input></a>
                </div>
            </div>

            <div class="basic-card basic-card-lips">
                <div class="card-content">
                    <span class="card-title">Four Wheeler</span>
                    <p class="card-text">
                        <h2><center>Empty Slots :</center></h2>
                    </p>
                </div>

                <div class="card-link">
                <input type="hidden" name ="slot2" value="2" />

                    <a href="bookslot.php" title="Read Full"><input type="hidden" name="slot"
                value ="2"><span>Book Now</span></input></a>
                </div>
            </div>

            <div class="basic-card basic-card-light">
                <div class="card-content">
                    <span class="card-title">HeavyWeight Veh.</span>
                    <p class="card-text">
                        <h2><center>Empty Slots : </center></h2>
                    </p>
                </div>

                <div class="card-link">
                <input type="hidden" name ="slot3" value="3" />
                    <a href="bookslot.php" title="Read Full"><input type="hidden" name="slot"
                value ="3"><span>Book Now</span></input></a>
                </div>
            </div>
           
        </div>
        </div>

        <br/>

    </main> 
</form>
                <script src="ScriptCards.js"></script>

    </body>
</html>
<!-- partial -->

</body>
</html>
