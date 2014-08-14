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
    
    public function lookVenue($venueID)
    {
        $this->db->where('idVenue',$venueID);
        $query = $this->db->get('Venue'); //Table name Venue
        foreach($query->result_array() as $row){
            $data[$row['idVenue']]["name"]=$row['name'];
            $data[$row['idVenue']]['address']=$row['address'];
            $data[$row['idVenue']]['lat']=$row['lat'];
            $data[$row['idVenue']]['long']=$row['long'];
            $data[$row['idVenue']]['phone']=$row['phone'];
            $data[$row['idVenue']]['picture']=$row['picture'];
            $data[$row['idVenue']]['city']=$row['city'];
       
            }
        return $data;
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
