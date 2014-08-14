    <!--container start-->
    <script type="text/javascript" src="<?php echo base_url(JS."admin_venues.js");?>"></script>
    
    <div class="container">

        <div class="row">
            <!--feature start-->
            <div class="text-center feature-head">
                <h2>Manage Venues</h2>
            </div>
            <!--feature end-->
        </div>
        

   <div class="row gray-box">
        <form class="VenueForm" role="form">
            <div class="col-md-10  col-md-offset-2">
                <div class="form-group">
                    <label for="venueName">Venue Name</label>
                    <input type="text" class="form-control" id="venueName" placeholder="Enter Venue Name">
                    <label for="venueName">Adress</label>
                    <input type="text" class="form-control" id="venueAddress" placeholder="Enter Venue Adress">
                    <label for="venueName">Latitude</label>
                    <input type="text" class="form-control" id="venueLatitude" placeholder="Enter Venue Latitude">
                    <label for="venueName">Longitude</label>
                    <input type="text" class="form-control" id="venueLongitude" placeholder="Enter Venue Longitude">
                    <label for="venueName">Phone</label>
                    <input type="text" class="form-control" id="venuePhone" placeholder="Enter Venue Phone">
                     <label for="venueName">Picture</label>
                     <input type="text" class="form-control" id="venuePicture" placeholder="Enter Venue Picture URL"><br>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input class="btn btn-lg btn-default pull-right" type="button" value="Submit"
                                 onclick="regVenue('<?php echo site_url('admin_venue')?>')">
                        </div>
                    </div>
                </div>
            </div>
        </form>
  </div>
    </div>
        
    </div>    
    <!--container end-->