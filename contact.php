<!-- php header -->
<?php include "partials/header.php"?>
<div class="container contact-container">
    <div class="row">
    <!-- form -->
        <form class="col-md-6 col-lg-6">
            <h3> Contact Us</h3>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="validationDefault01">Name</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="Name" value="Name" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="validationDefault02">Email</label>
            <input type="email" class="form-control" id="validationDefault02" placeholder="Email" value="Email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="validationDefault02">Comments</label>
            <textarea type="text" class="form-control" id="validationDefault02" placeholder="Comments" value="Comments"></textarea>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
<!-- contact details -->
        <div class="contact-details col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <h3>Our Contact Details</h3>
          <address>
            <strong>Exotic Typography</strong><br>
            1355 Market Street, Suite 900<br>
            Hong Kong, VX7 8900<br>
            <abbr title="Phone">P:</abbr> (201) 456-7890
            </address>

            <address>
            <strong>Email</strong><br>
            <a href="mailto:#">hello@typography.com</a>
            </address>
            <!-- <img class="img-responsive about-work-img" src="img/contact-500.jpg" alt= 'portfolio image'> -->
        </div>
    </div>
    <div class="row">
    <!-- Map -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="errors"></div>
        <div style="height:400px; width: 900px;" id="map"></div>
    </div>
    </div>
    
 </div> 
<!-- php footer -->
<?php include "partials/footer.php"?>
    <script src="js/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places,drawing,geometry&key=AIzaSyD8r9H4e7ZSpd61gajRZyFiozsFSsB84XE&v=3&callback=initMap" async defer onerror="mapError()">
    </script>