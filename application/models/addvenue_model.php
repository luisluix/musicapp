<?php  defined('BASEPATH') OR exit('No direct script access allowed');

/* File: LoginModel.php
 * Author: Luis Garnica
 * View Dependant: login, register
 * Description: This class user login to the elseweb website and user registration. 
 *  
 *  */

class Addvenue_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    

    public function add_venue($venueName,$venueAddress, $venueLatitude, $venueLongitude, $venuePhone, $venuePicture)
    {
       
       try{ 
            $data=array(
               'name'=>$venueName,
               'address'=>$venueAddress,
               'lat'=>$venueLatitude,
               'long'=>$venueLongitude,
               'phone'=>$venuePhone,
               'picture' => $venuePicture,
               'city' => 'El Paso'
            );
                
            $this->db->insert('Venue',$data);

       }
       catch (Exception $e) {
            echo ('error: '.$e->getMessage());  
            return false;
       }

           return true;
   
    }
    
   
}

?>
