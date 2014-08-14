<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Experimentgui extends MY_Controller {
	
    
	public function index($renderData=""){	
                //$this->$data['token'] = $this->token();
		/*
		 *set up title and keywords (if not the default in custom.php config file will be set) 
		 */
         
         
		$this->title = "ELSEWeb | Experiment GUI";
		$this->keywords = "elseweb, cybershare, species modeling, species modelling";
		
        // 1. when you pass AJAX to renderData it will generate only that particular PAGE skipping other parts like header, nav bar,etc.,
        //      this can be used for AJAX Responses
        // 2. when you pass JSON , then the response will be json object of $this->data.  This can be used for JSON Responses to AJAX Calls.
        // 3. By default full page will be rendered
                
            if ($this->session->userdata('is_logged_in')){          
                $folder = 'template';
                $this->_render('pages/experiment-gui',$renderData, $folder);     
            }
            else{
                $folder = 'template';
                $this->_render('pages/register',$renderData, $folder);   //to be changed

            }
        
        }    
}

