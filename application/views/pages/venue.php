    <!-- Page javascript files -->
    <script src="<?php echo base_url(JS."JSLINQ.js");?>"></script>
    <script src="<?php echo base_url(JS."angular.min.js");?>"></script>
    <script src="<?php echo base_url(JS."ui-utils.min.js");?>"></script>
    <script src="<?php echo base_url(JS."experiment-specification.js");?>"></script>
    <script src="<?php echo base_url(JS."ui-bootstrap-0.11.0.min.js");?>"></script>
    <script src="<?php echo base_url(JS."lodash.underscore.min.js");?>"></script>
    <script src="<?php echo base_url(JS."experiment-gui.js");?>"></script>
    <script src="<?php echo base_url(JS."endpoint.js");?>"></script>
    <script type="text/javascript">
    function addmarker(lat,long)
    {
        var myLatlng = new google.maps.LatLng(lat,long);
        var mapOptions = {
          zoom: 4,
          center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
    }
    </script>
   <!--container start-->
   <div id="endpoint_container" class="container" ng-app="elsewebGUI">

        <div class="row">
            <!--feature start-->
            <div class="text-center feature-head">
                <h2>Venue</h2>
            </div>
            <!--feature end-->     
        </div>
       
      
      <div class="row" ng-controller="PanelController as panel">
        
           <div class="col-md-7 gray-bg">
                <div class="tab-panel" ng-show="panel.isSelected(1)" ng-controller="RegionController as regionCtrl"> 
                     <div class="row">
                          <div class="col-md-12 gray-bg" style="padding-bottom: 15px; border-radius: 3px;">
                              <h4>Region</h4>
                              <p>Select Venue</p>
                              <div class="btn-group">
                                       
                         <?php echo form_dropdown('countriesDrp', $venueDrop,'','class="required" id="countriesDrp"');  ?>
                  
</div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-12 gray-bg" style="padding-bottom: 15px; border-radius: 3px;">
                              <!--google map start-->
                              <div class="contact-map">
                                  <div id="map-canvas"></div>
                              </div>
                               <!--google map end-->  
                          </div>     
                      </div>
                </div>   
   
           </div>
           
 
       </div>    
        
    </div>    
    <!--container end-->
    

