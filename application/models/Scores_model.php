<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Scores_model extends CI_Model
{


    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function RaitingClub()
    {
        $this->db->select('BaseTbl.score_clubID , max(BaseTbl.createdDate) createdDate ,  BaseTbl.clubID , Clubs.name , sum(score) as scores ');
        $this->db->from('tbl_score_club as  BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.clubID','left');
        $this->db->order_by('scores', 'DESC');
        $this->db->group_by('Clubs.clubID'); 
     
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
    function ScoreClub($clubID)
    {
       $this->db->select('BaseTbl.projectId , BaseTbl.description , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description descP ,  BaseTbl.local ,BaseTbl.banner , Evaluations.valider , Evaluer.name dobyName ,  Scores.score , Evaluations.statut , Scores.affectedBy , Valider.name validName 
            , Evaluations.album , Evaluations.afterMovie , BaseTbl.eventFB');
        
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID ', 'LEFT');

        $this->db->join('tbl_evaluation as Evaluations', 'Evaluations.projectId = BaseTbl.projectId', 'LEFT');
        $this->db->join('tbl_score_club as Scores', 'Evaluations.score_clubID = Scores.score_clubID', 'LEFT');

        $this->db->join('tbl_users as Valider ', 'Valider.userId = Evaluations.validBy', 'LEFT');
         $this->db->join('tbl_users as Evaluer ', 'Evaluer.userId = Evaluations.doBy', 'LEFT');

        $this->db->where(' BaseTbl.ClubID = ' , $clubID  ) ;
       
        $this->db->where('NOW() > BaseTbl.endDate ') ;
        $this->db->where('Evaluations.validBy != 0 ') ;
        
     
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
    function RaitingUsers()
    {
        $this->db->select('BaseTbl.userId  , BaseTbl.avatar , BaseTbl.name ,  BaseTbl.clubName , sum(scoreByMembre) as scores  ');
        $this->db->from('memberscoring as  BaseTbl');
        $this->db->order_by('scores', 'DESC');
        $this->db->group_by('BaseTbl.userID');  
        $this->db->limit(10);  
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
    function RaitingUsersByClubV($clubId)
    {
        $this->db->select('BaseTbl.userId  , BaseTbl.avatar , BaseTbl.name ,  BaseTbl.clubName , sum(scoreByMembre) as scores  ');
        $this->db->from('memberscoring as  BaseTbl');
        $this->db->join('tbl_users as User ', 'User.userId = BaseTbl.userId' ,'left');      
        $this->db->where('User.clubID = ' , $clubId) ;
        $this->db->where('User.isDeleted = 0 '); 
        $this->db->order_by('scores', 'DESC');

        $this->db->group_by('BaseTbl.userID');  
        
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
    function RaitingUsersbyClub()
    {
        $this->db->select('BaseTbl.userId  , BaseTbl.avatar , BaseTbl.name ,  BaseTbl.clubName , sum(scoreByMembre) as scores  ');
        $this->db->from('memberscoring as  BaseTbl');
        $this->db->order_by('scores', 'DESC');
        $this->db->group_by('BaseTbl.userID');   
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
    function badgeListing()
    {
        $this->db->select('');
        $this->db->from('tbl_badges as  BaseTbl'); 
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
    function LastRaitingClub()
    {
        $this->db->select('BaseTbl.score_clubID , max(BaseTbl.createdDate) createdDate ,  BaseTbl.clubID , Clubs.name , sum(score) as scores ');
        $this->db->from('tbl_score_club as  BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.clubID','left');
        $this->db->order_by('scores', 'DESC');
        $this->db->group_by('Clubs.clubID'); 
     
        $query = $this->db->get();
        
        return $query->row();
    }


   
}

  