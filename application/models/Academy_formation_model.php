<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Academy_formation_model extends CI_Model
{



    
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function absenceListing()
    {
        $this->db->select('');
        $this->db->from('tbl_academy_formations as BaseTbl');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }



    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNew  ($formationsInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_academy_formations', $formationsInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


   
    
 
    

    
   
}

