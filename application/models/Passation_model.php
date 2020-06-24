<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login_model (Login Model)
 * Login model class to get to authenticate user credentials 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Passation_model extends CI_Model
{




     /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewPassation($reunionInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_passation', $reunionInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

            /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function passationByuserId($userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_passation');
        $this->db->where('userId', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }




    
    

}