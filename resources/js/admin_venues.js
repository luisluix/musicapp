
function regVenue(base_url){   
    var venueName = $('#venueName').val();
    var venueAddress = $('#venueAddress').val();
    var venueLatitude = $('#venueLatitude').val();
    var venueLongitude = $('#venueLongitude').val();
    var venuePhone = $('#venuePhone').val();
    var venuePicture = $('#venuePicture').val();
    //var venueCity = $('#org').val();
    
        $.ajax({
            'url' : base_url + '/' + 'venue_reg',
            'type' : 'POST', //the way you want to send data to your URL
            'data' : 'venueName=' + venueName + '&venueAddress='  + venueAddress + '&venueLatitude='  + venueLatitude + '&venueLongitude='  + venueLongitude + '&venuePhone='  + venuePhone + 'venuePicture='  + venuePicture,
            'success' : function(result){ //probably this request will return anything, it'll be put in var "result"
                if(result){
                    if (result === 'success'){
                        topNoty('success', 'Venue added Successfully!');
                        $('#VenueForm').trigger("reset");
                    }
                    else
                        topNoty('warning', result);
                }
                else
                    topNoty('error', 'An error has ocurred.');
            }       
        });   
}



