
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Registration Form</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="dash.php">Metropolitan Business Zone</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dash.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Business Zones</a>
      </li>
    </ul>
  </div>
</nav>
    <h1>Sole Proprietorship Registration Form</h1>
    <hr>

    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <form action="insert.php" method="POST">
             <div class="form-group row">
                <label for="bn" class="col-md-6 col-form-label">Business Name/Trade Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="bn" placeholder="">
                </div>
              </div>

              <div class="form-group row">
                <label for="ln" class="col-md-6 col-form-label">Last Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="ln" placeholder="Last" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="fn" class="col-md-6 col-form-label">First Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="fn" placeholder="First" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="mn" class="col-md-6 col-form-label">Middle Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="mn" placeholder="Middle" required>
                </div>
              </div>

              <hr>

              <h4>Business Location</h4>
              <div class="container">
                <div class="row">
                <div class="col">
                  <input type="text" class="form-control" name="blgn" placeholder="Blg. Name" required>
                </div>
                  <div class="col">
                  <input type="text" class="form-control" name="usf" placeholder="Unit no./ stall no., & floor no." required>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" name="sn1" placeholder="Street name" required>
                </div>
                  <div class="col">
                  <input type="text" class="form-control" name="brgy1" placeholder="Barangay" required>
                </div>
              </div>

              <div class="row"> 
                <div class="col"> 
                  <input type="text" class="form-control" name="dis1" placeholder="District" required>
                </div>
              </div>
              </div>

              <hr>

              <h4>Home Address of Representative</h4>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" name="hn" placeholder="House no." required>
                </div>
                  <div class="col">
                  <input type="text" class="form-control" name="sn2" placeholder="Street name" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="brgy2" placeholder="Barangay" required>
                </div>
              </div>

              <div class="row"> 
                <div class="col">
                  <input type="text" class="form-control" name="dis2" placeholder="District" required>
                </div>
              </div>

              <hr>  

              <div class="form-group row">
                <label for="dti" class="col-md-6 col-form-label">DTI Business Name Registration No.</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="dti" placeholder="" required>
                </div>
              </div>

              <div class="col">
                <label for="di" class="col-form-label">Date Issued</label>
              </div>

              <div class="col">
                <input type="text" class="form-control" name="di" placeholder="" required>
              </div>

              <hr>

              <div class="form-group row">
                <h5>TaxPayer's Identification No.</h5>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="tin" placeholder="" required>
                </div>
              </div>

              <hr>  

              <h4>Contact Information</h4>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" name="l_line" placeholder="Landline" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="mo" placeholder="Mobile"required>
                </div>
                <div class="col">
                  <input input="email" type="text" class="form-control" name="ea" placeholder="Email Address"required>
                </div>
              </div>

              <hr> 

              <div class="form-group row">
                <label for="sss" class="col-md-6 col-form-label">As Employer, Employer's Social Security No. (SSS)</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="sss" placeholder=""required>
                </div>
              </div>

              <div class="col">
                <label for="ne" class="col-form-label">No. of Employees</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" name="ne" placeholder=""required>
              </div>

              <hr>

              <h4>If Business Establishment is Rented, Rental Details</h4>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" name="dsr" placeholder="Date of Start of Rent"required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="rfw" placeholder="Renting from whom?"required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="mr" placeholder="Monthly Rental (Php)"required>
                </div>
              </div>
                
              <hr>

              <div class="form-group row">
                <label for="dbnr" class="col-md-6 col-form-label"><h5>Does Business have a Signboard?</h5>(If yes,indicate sign of signboard in sqm</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="sqm" placeholder=""required>
                </div>
              </div>

              <hr>
              <h4>Does the Corporation have other business license or permit?</h4>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" name="blgn" placeholder="Other Business Activity"required>
                </div>
                  <div class="col">
                      
                  <input type="text" class="form-control" name="usf" placeholder="Business Permit No."required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="usf" placeholder="Location"required>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" name="sn1" placeholder="Other Business Activity"required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="brgy1" placeholder="Business Permit No."required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="brgy1" placeholder="Location"required>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" id="sn1" placeholder="Other Business Activity"required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" id="brgy1" placeholder="Business Permit No."required>
                </div>
              <div class="col">
                <input type="text" class="form-control" id="brgy1" placeholder="Location"required>
               </div>
              </div>
              
              <hr>
                <div class="form-group row">
                <label for="nba" class="col-md-6 col-form-label"><h5>Nature of Business Applied for</h5>(Indicate which business activity is principal, which is secondary </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nba" placeholder="">
                  <input type="text" class="form-control" id="nba" placeholder="">
                  <input type="text" class="form-control" id="nba" placeholder="">
                </div>
              </div>
              <hr>

              <div class="form-group row">
                <label for="ao" class="col-md-6 col-form-label"><h5>Area Occupied</h5>(50cm)</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="ao" placeholder="">
                  <input type="text" class="form-control" id="ao" placeholder="">
                  <input type="text" class="form-control" id="ao" placeholder="">
                </div>
              </div>
                <hr>
                
            <div class="form-group row">
                <label for="cap" class="col-md-6 col-form-label"><h5>Capitalization</h5>(50cm)</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="cap" placeholder="">
                  <input type="text" class="form-control" id="cap" placeholder="">
                  <input type="text" class="form-control" id="cap" placeholder="">
                </div>
              </div>
                <hr>
                <hr>
                
                
                <div id="map"></div>
    <script>
        var map;
        var gmarkers = [];
        var qc = {lat: 14.650, lng: 121.050};
        
        
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: qc,
                zoom: 14
            });
            
            //set marker when clicked
           google.maps.event.addListener(map, 'click', function(event) {
               rmMarkers();
               var markr = new google.maps.Marker({
                    position: event.latLng,
                    map: map
                });
                gmarkers.push(markr);
                alert(" Latitude: " +event.latLng.lat()+" Longitude: "+event.latLng.lng() );
            });
            //setBorder();
            
        }
        
        //remove marker
        function rmMarkers() {
            for(i = 0; i < gmarkers.length; i++) {
                gmarkers[i].setMap(null);
            }
        }
       
       /* 
        function setBorder() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: qc,
                zoom: 14
            });
            var coord = new google.maps.Polyline({
                path: [
                    new google.maps.LatLng(14.620935, 121.048930),
                    new google.maps.LatLng(14.620370, 121.049140),
                    new google.maps.LatLng(14.618750, 121.049118),
                    new google.maps.LatLng(14.617681, 121.038904),
                    new google.maps.LatLng(14.614961, 121.047037),
                    new google.maps.LatLng(14.614465, 121.048183),
                    new google.maps.LatLng(14.614590, 121.048978),
                    new google.maps.LatLng(14.616361, 121.041349),
                    new google.maps.LatLng(14.616450, 121.051654),
                    new google.maps.LatLng(14.616442, 121.052587),
                    new google.maps.LatLng(14.610914, 121.055018),
                    new google.maps.LatLng(14.613696, 121.076321),
                    new google.maps.LatLng(14.614411, 121.067127),
                    new google.maps.LatLng(14.614706, 121.067146),
                    new google.maps.LatLng(14.614876, 121.066804),
                    new google.maps.LatLng(14.615198, 121.066554),
                    new google.maps.LatLng(14.618883, 121.064909),
                    new google.maps.LatLng(14.618588, 121.064095),
                    new google.maps.LatLng(14.626387, 121.060435),
                    new google.maps.LatLng(14.620994, 121.048927)
                ],
                strokeColor: "#0000FF",
                strokeOpacity: 0.6,
                strokeWeight: 2
            });
            coord.setMap(map);    
           
        }
        */
       
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBW13Pxp8rpCLEXFiL9gRagwwRzHeSc1_g&callback=initMap"
    async defer></script>
                
                <hr>
                <hr>
                
                <div class="container">
                  <div class="row">
                    <div class="col">
                    <button type="Submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
                
              </div>
            </form>  
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>