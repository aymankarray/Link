<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Scores_club_model extends CI_Model
{


    
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function scoreClubListing($clubID)
    {
        $this->db->select('BaseTbl.score_clubID , BaseTbl.clubID , BaseTbl.titre , BaseTbl.score ,BaseTbl.affectedBy ');
        $this->db->from('tbl_score_club as BaseTbl');
        $this->db->join('tbl_project as Users', 'Users.userId = BaseTbl.doBy', 'LEFT');
        $this->db->where('BaseTbl.clubID =' ,  $clubID);
        $this->db->order_by('BaseTbl.createdDate ASC');
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
    function scoreClubbyProjectListing($projectId)
    {
        $this->db->select('BaseTbl.score_clubID , BaseTbl.clubID , BaseTbl.remarque , BaseTbl.titre , BaseTbl.score sc , BaseTbl.affectedBy ');
        $this->db->from('tbl_score_club as BaseTbl');
        $this->db->join('tbl_evaluation as Evals', 'Evals.score_clubID = BaseTbl.score_clubID', 'LEFT');
        $this->db->where('Evals.projectId =' , $projectId);
       
      
        $query = $this->db->get();

         return $query->row();
    }


        /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function scoreValiderListing()
    {
         $this->db->select('BaseTbl.projectId , BaseTbl.description , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description descP ,  BaseTbl.local ,BaseTbl.banner , Evaluations.valider , Evaluer.name dobyName ,  Scores.score , Evaluations.statut , Scores.affectedBy , Valider.name validName 
            , Evaluations.album , Evaluations.afterMovie , BaseTbl.eventFB');
        
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');

        $this->db->join('tbl_evaluation as Evaluations', 'Evaluations.projectId = BaseTbl.projectId', 'LEFT');
        $this->db->join('tbl_score_club as Scores', 'Evaluations.score_clubID = Scores.score_clubID', 'LEFT');

        $this->db->join('tbl_users as Valider ', 'Valider.userId = Evaluations.validBy', 'LEFT');
         $this->db->join('tbl_users as Evaluer ', 'Evaluer.userId = Evaluations.doBy', 'LEFT');



        $this->db->where('NOW() > BaseTbl.endDate ') ;
        $this->db->where('Evaluations.validBy != 0 ') ;
        
        $this->db->order_by('BaseTbl.startDate ASC') ;
  

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
    function scoreValiderStatsListing()
    {
         $this->db->select('count(BaseTbl.projectId) Cproject , DATE_FORMAT(BaseTbl.startDate, "%Y-%m ") as dateS ' );
        
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_evaluation as Evaluations', 'Evaluations.projectId = BaseTbl.projectId', 'LEFT');

        $this->db->where('Evaluations.validBy != 0 ') ;
        
 
        $this->db->where('BaseTbl.startDate >=  ','2019-09-01');
        $this->db->where('BaseTbl.startDate <=  ','2020-06-01');

        $this->db->group_by(' , dateS');
        $this->db->order_by('dateS ASC');
        

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
    function scoreValiderStatsbyTypeListing()
    {
         $this->db->select(' count(BaseTbl.projectId) Cproject , BaseTbl.type ' );
        
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_evaluation as Evaluations', 'Evaluations.projectId = BaseTbl.projectId', 'LEFT');

        $this->db->where('Evaluations.validBy != 0 ') ;
        
 
        $this->db->where('BaseTbl.startDate >=  ','2019-09-01');
        $this->db->where('BaseTbl.startDate <=  ','2020-06-01');
      


        $this->db->group_by('BaseTbl.type ');

        

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
    function scoreValiderStatsbyTypeDateListing($type)
    {
         $this->db->select('DATE_FORMAT(BaseTbl.startDate, "%Y-%m ") as dateS , count(BaseTbl.projectId) Cproject , BaseTbl.type ' );
        
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_evaluation as Evaluations', 'Evaluations.projectId = BaseTbl.projectId', 'LEFT');

        $this->db->where('Evaluations.validBy != 0 ') ;
        
        $this->db->where('BaseTbl.type = ',$type);
        $this->db->where('BaseTbl.startDate >=  ','2019-09-01');
        $this->db->where('BaseTbl.startDate <=  ','2020-06-01');
      

        $this->db->group_by('type , dateS  ') ;

        

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
    function scoreValiderStatsbyTypeClubListing($type,$clubID)
    {
         $this->db->select('DATE_FORMAT(BaseTbl.startDate, "%Y-%m ") as dateS , count(BaseTbl.projectId) Cproject , BaseTbl.type ' );
        
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_evaluation as Evaluations', 'Evaluations.projectId = BaseTbl.projectId', 'LEFT');

        $this->db->where('Evaluations.validBy != 0 ') ;
        
        $this->db->where('BaseTbl.type = ',$type);
        $this->db->where('BaseTbl.clubID = ',$clubID);
        $this->db->where('BaseTbl.startDate >=  ','2019-09-01');
        $this->db->where('BaseTbl.startDate <=  ','2020-06-01');
      

        $this->db->group_by('type , dateS  ') ;

        

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
    function scoreValiderByCLubListing($clubID)
    {
        $this->db->select('BaseTbl.score_clubID , Project.titre , BaseTbl.clubID , BaseTbl.remarque , BaseTbl.titre , BaseTbl.score sc , BaseTbl.affectedBy ');
        $this->db->from('tbl_score_club as BaseTbl');
        $this->db->join('tbl_project as Project', 'Project.projectId = BaseTbl.projectId', 'LEFT');
        $this->db->where('BaseTbl.affectedBy != 0 ' );
        $this->db->where('Project.clubID =  ', $clubID );
        $query = $this->db->get();

         return $result = $query->result();  
    }




    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewScoreClub($ScoreInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_score_club', $ScoreInfo);
        
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
    function editScoreClub($scoreClubInfo, $scoreClubId)
    {
        $this->db->where('score_clubID', $scoreClubId);
        $this->db->update('tbl_score_club', $scoreClubInfo);
        
        return TRUE;
    }
    


   
}

  