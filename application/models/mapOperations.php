<?php  defined('BASEPATH') OR exit('No direct script access allowed');

/* File: LoginModel.php
 * Author: Luis Garnica
 * View Dependant: login, register
 * Description: This class user login to the elseweb website and user registration. 
 *  
 *  */

class mapOperations extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    
   /*
    * Function: login_user
    * Description: Receives input of username and password, checks combination against the
    *              database and returns a user row if successful.
    * */
    
    public function lookVenue($venueName)
    {
        $this->db->where('name',$username);
        $query = $this->db->get('Venue'); //Table name Venue
        if($query->num_rows() == 1)
        {
            return $query->row();
        }else{
            $this->session->set_flashdata('incorrect_user','Invalid user/password combination'); //Used for error reporting
            echo "Invalid user/password combination"; //Response to ajax
        }
    }
    
     public function getAllVenues()
    {
        $this->db->select('name,idVenue');
        $this->db->from('Venue'); 
        $query = $this->db->get();
        
         foreach($query->result_array() as $row){
            $data[$row['idVenue']]=$row['name'];
        }
        return $data;
    }
    
}

?>
