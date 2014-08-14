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


