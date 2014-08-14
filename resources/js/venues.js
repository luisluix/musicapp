(function(){
     var app = angular.module('venueGUI', []);
     
     app.controller('VenueControler', ['$http' , '$scope', function($http, $scope){
        //$scope.venueID = "";
        $( "#countriesDrp" ).change(function() {
            var value = document.getElementById("countriesDrp").value;
            alert(value);
            
            
            
            
            
        });
        
             
         
     }]);
     
    
})();

