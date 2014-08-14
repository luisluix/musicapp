<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_venue extends MY_Controller {
	
    
	public function index($renderData=""){	

		/*
		 *set up title and keywords (if not the default in custom.php config file will be set) 
		 */
         
         
		$this->title = "Digital-Venue | Manage Venue";
		$this->keywords = "";
		
        // 1. when you pass AJAX to renderData it will generate only that particular PAGE skipping other parts like header, nav bar,etc.,
        //      this can be used for AJAX Responses
        // 2. when you pass JSON , then the response will be json object of $this->data.  This can be used for JSON Responses to AJAX Calls.
        // 3. By default full page will be rendered
                
            if ($this->session->userdata('is_logged_in')){          
                $folder = 'template';
                $this->_render('pages/admin_venue',$renderData, $folder);     
            }
            else{
                $folder = 'template';
                $this->_render('pages/home',$renderData, $folder);   //to be changed

            }
        
        }    
        
        public function venue_reg(){
          $this->load->model('addvenue_model');
          $venueName = $this->input->post('venueName');    
          $venueAddress = $this->input->post('venueAddress'); 
          $venueLatitude = $this->input->post('venueLatitude'); 
          $venueLongitude = $this->input->post('venueLongitude'); 
          $venuePhone = $this->input->post('venuePhone'); 
          $venuePicture = $this->input->post('venuePicture'); 
          
          $add_venue = $this->addvenue_model->add_venue($venueName,$venueAddress, $venueLatitude, $venueLongitude, $venuePhone, $venuePicture);
            if ($add_venue == TRUE){
                echo "success";
            }
                else{
                echo "Error occured";
            }
        }
}

