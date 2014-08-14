/*
 * @author Luis Garnica - Code refactoring and angular wrap up.
 * @acknowledgements: Lilian - Initial developer.
 * Framework: Angular JS
 * Module Description: Google Map API wrap up on Angular JS. 
 *                     Implemented on Region Panel for the Elseweb Experiment GUI
 * View: experiment-gui.php (see file head for js dependencies)
 */


(function (){
    /* Module inherited to elsewebGUI module */
    var app = angular.module ('region-ui', []);
  
    app.controller('RegionController', ['$http' , '$scope', function($http, $scope){
        
         $( "#countriesDrp" ).change(function(base_url) {
            var value = document.getElementById("countriesDrp").value;
            if (value !== ""){
                $.ajax({
                    //need to do a cross domain post
                    'url' : 'Venue/getVenueInfo',
                    'type' : 'GET', //the way you want to send data to your URL
                    'data' : 'venueID=' + value, 
                    'success' : function(result){ 
                        if(result){             
                                //Merge experiment and result json
                                parsed = $.parseJSON(result); //string to manipulable json
                                //alert(parsed["lat"]); 
                                addmarker(parsed.lat, parsed.long);
                        }
                        else
                            topNoty('error', 'An error has ocurred.');
                    }
                    
                });  
            }
            
         });

         
         //Hide data notification messages
         $( ".no-data" ).hide();
         $( ".data-available" ).hide();  
            
         //Render Google Maps Tool   
         $scope.initialize = function (){
            var myLatlng = new google.maps.LatLng(0, 0);
            var mapOptions = {
              zoom: 2,
              center: myLatlng,
              mapTypeId: google.maps.MapTypeId.SATELLITE
            };
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
          
        };
        
        google.maps.event.addDomListener(window, 'load', $scope.initialize); 
          
        
    }]); //end controller
 
})(); //app end


