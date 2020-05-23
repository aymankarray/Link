<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Chat_model extends CI_Model
{



   /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function ChatListing($userId)
    {
        $this->db->select('BaseTbl.disscussionId , BaseTbl.createDTM , BaseTbl.hote , BaseTbl.nom  , Users.name , Users.userId ');
        $this->db->from('tbl_disscussion as BaseTbl');
        $this->db->join('tbl_users as Users','Users.UserId = BaseTbl.hote');
        $this->db->join('tbl_disscussion_part as Parts','Parts.disscussionId = BaseTbl.disscussionId');
        $this->db->where ('Parts.userId = ', $userId );
        $this->db->order_by('BaseTbl.lastUpdate','DESC'); 
        $this->db->limit(100);      
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


       /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function ChatPartListing($disscussionId)
    {
        $this->db->select('BaseTbl.tbl_disscussion_partId , BaseTbl.createDTM , BaseTbl.disscussionId');
        $this->db->from('tbl_disscussion_part as BaseTbl');
        $this->db->join('tbl_users as Users','Users.UserId = BaseTbl.userId');
        $this->db->where ('BaseTbl.disscussionId = ', $disscussionId ); 
        $this->db->order_by('BaseTbl.createdDate','DESC');
            
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }



   
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function messageListing($disscussionID)
    {
        $this->db->select('BaseTbl.messageId , BaseTbl.senderId , BaseTbl.text , BaseTbl.createDTM , BaseTbl.disscussionId  , Users.name , Users.userId , Users.avatar ');
        $this->db->from('tbl_message as BaseTbl');
        $this->db->join('tbl_users as Users','Users.UserId = BaseTbl.senderId');
        $this->db->order_by('BaseTbl.createDTM','DESC'); 
        $this->db->where ('BaseTbl.disscussionId = ', $disscussionId ); 
        $this->db->limit(100);      
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }



    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNew($actuInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_message', $actuInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


   

    
 
    

    
   
}

