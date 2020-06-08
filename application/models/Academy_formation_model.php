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
    function formationListing()
    {
        $this->db->select('BaseTbl.formationsId , BaseTbl.label ,  BaseTbl.description ,BaseTbl.affiche , Users.name , Users.avatar');
        $this->db->from('tbl_academy_formations as BaseTbl');
        $this->db->join('tbl_users as Users','Users.UserId = BaseTbl.createdBy');
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
    function formationInfo($formationId)
    {
        $this->db->select('BaseTbl.formationsId , BaseTbl.label ,  BaseTbl.description ,BaseTbl.affiche , Users.name , Users.avatar');
        $this->db->from('tbl_academy_formations as BaseTbl');
        $this->db->join('tbl_users as Users','Users.UserId = BaseTbl.createdBy');
        $this->db->where('BaseTbl.formationsId = ', $formationId);
        $query = $this->db->get();
        $result = $query->row();        
        return $result;
    }


            /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function formationChaptersInfo($formationId)
    {
        $this->db->select('BaseTbl.formationId , BaseTbl.titre ,  BaseTbl.num ,BaseTbl.description ,BaseTbl.embed ,BaseTbl.chapterId  ');
        $this->db->from('tbl_academy_formations_chapter as BaseTbl');
        $this->db->join('tbl_users as Users','Users.UserId = BaseTbl.createdBy');
        $this->db->where('BaseTbl.formationId = ', $formationId);
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


        /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewPart  ($formationsInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_academy_formations_participant', $formationsInfo);
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
    function editPart($participantInfo, $partId)
    {
        $this->db->where('partId', $partId);
        $this->db->update('tbl_academy_formations_participant', $participantInfo);
        
        return TRUE;
    }


   
                /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function formationQuizsInfo($part)
    {
        $this->db->select('');
        $this->db->from('tbl_academy_formations_participant as BaseTbl');
        $this->db->join('tbl_academy_formations_quiz as Quiz','Quiz.formationId = BaseTbl.formationId');
        $this->db->where('BaseTbl.partId = ', $part);


        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }
 
    

    
   
}

