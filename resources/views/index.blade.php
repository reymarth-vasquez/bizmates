<!doctype html>
<html lang="en">
   <head>
   <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <title>Discover Japan</title>
   </head>
   <body>
      <section id="first">
         <div class="container">
            <div class="row">
               <div class="col-12 d-flex justify-content-center">
                  <h1 class="mt-5 mb-4">
                     <span class="display-5">&emsp;DISCOVER</span><br/>
                     <span class="display-1"><span style="font-family: Arial;">J</span>apan</span>
                  </h1>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6 offset-lg-3 col-12 d-flex justify-content-center mb-5">
                  <p class="text-center lead">To help you decide the best time of year to Japan, we have put together a comprehensive weather and event guide.</p>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-lg-6 mt-5">
                  <form name="city">
                    <div class="form-row">
                      <div class="col-12">
                        <input type="text" class="form-control mb-2" name="location" placeholder="Where do you want to go?" autocomplete="off" required>
                        <p class="form-text" id="suggestion" hidden="true">Did you mean?<span class="here"></span></p>
                      </div>
                      <div class="col-2" hidden>
                        <button type="submit" class="btn btn-primary mb-2">GO</button>
                      </div>
                    </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <section id="last" hidden="true">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <h1 id="city-name">Tokyo, Tōkyō, Japan</h1>
                  <p class="lead" id="weather">
                     <span id="weather-main">Rain</span>&nbsp;
                     <img src="http://openweathermap.org/img/wn/09n.png">&nbsp;
                     <span id="weather-temp">10.92&deg;C</span>
                  </p>
               </div>
            </div>
            <div class="row" id="boxes">
               <div class="col-sm-4">
                  <div class="card pallet-2">
                     <div class="card-body">
                        <p>
                           <img src="https://ss3.4sqi.net/img/categories_v2/travel/hostel_32.png">
                           <span id="venue-category">Hostel</span>
                        </p>
                        <h1>Nui. Hostel & Bar Lounge</h1>
                        <p>Address:<br/>
                        <span id="address-1">外神田4-2-7</span><br/>
                        <span id="address-2">千代田区, 東京都</span><br/>
                        <span id="address-3">101-0021</span><br/>
                        <span id="address-4">日本</span>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card pallet-4">
                     <div class="card-body">
                        <p>This is a test.</p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card pallet-3">
                     <div class="card-body">
                        <p>This is a test.</p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card pallet-2">
                     <div class="card-body">
                        <p>
                           <img src="https://ss3.4sqi.net/img/categories_v2/travel/hostel_32.png">
                           <span id="venue-category">Hostel</span>
                        </p>
                        <h1>Nui. Hostel & Bar Lounge</h1>
                        <p>Address:<br/>
                        <span id="address-1">外神田4-2-7</span><br/>
                        <span id="address-2">千代田区, 東京都</span><br/>
                        <span id="address-3">101-0021</span><br/>
                        <span id="address-4">日本</span>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card pallet-4">
                     <div class="card-body">
                        <p>This is a test.</p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card pallet-3">
                     <div class="card-body">
                        <p>This is a test.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="assets/js/script.js"></script>
   </body>
</html>