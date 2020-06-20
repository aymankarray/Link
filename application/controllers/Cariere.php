<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Cariere extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('academy_formation_model');
        $this->load->model('user_cariere_model') ;
        $this->load->model('user_diplome_model') ;  
        
        $this->isLoggedInPub();   
    }
    

	    /**
     * This function is used to show users profile
     */
    function CarierShow($userId)
    {

        $data["Experience"] = $this->user_cariere_model->carrierListing($userId);   
        $data["HSkils"] = $this->ressource_model->ressourceListingBUserT($userId); 
        $data["Diplome"] = $this->user_diplome_model->diplomeListing($userId) ;

        $data["Roles"] = $this->user_model->getUserAllRoles() ; 
        $data["Clubs"] = $this->user_model->getClubs() ;
        $data["ressourceInfo"] = $this->ressource_model->ressourceListingBUserT($userId); 



        $this->global['pageTitle'] = 'Cariere' ;
        
        $this->loadViews("Tunimateurs/cariere", $this->global, $data, NULL);
    }

    /**
     * This function is used to show users profile
     */
    function CarierAdd($userId)
    {           
                $roleId = $this->input->post('roleId') ; 
                $cellule = $this->input->post('cellule') ; 
                $clubId = $this->input->post('clubId') ; 
                $endDT = $this->input->post('endDT') ;
                $attacheDT = $this->input->post('attacheDT') ;

           
                $userInfo = array(
                 'userId'=>$userId,
                 'attacheDT'=>$attacheDT,
                 'endDT'=>$endDT,
                 'roleId'=>$roleId,
                 'clubId'=>$clubId,
                 'cellule'=>$cellule,
                 'CreatedBy'=>$this->vendorId,
                 'CreatedDTM'=>date('Y-m-d H:i:s')    
                     );
                
       
                $result = $this->user_cariere_model->addNewCarrier($userInfo);

                redirect('User/CarierShow/'.$userId);
    }



        /**
     * This function is used to show users profile
     */
    function DiplomeAdd($userId)
    {           
                $roleId = $this->input->post('roleId') ; 
                $cellule = $this->input->post('cellule') ; 
                $clubId = $this->input->post('clubId') ; 
                $endDT = $this->input->post('endDT') ;
                $attacheDT = $this->input->post('attacheDT') ;

           
                $userInfo = array(
                 'dateDebut'=>$dateDebut,
                 'dateFin'=>$dateFin,
                 'type'=>$type,
                 'titre'=>$titre,
                 'institut'=>$institut,
                 'userId'=>$this->vendorId,
                 'CreatedDTM'=>date('Y-m-d H:i:s')    
                     );
                
       
                $result = $this->User_diplome_model->addNewDipmome($userInfo);

                redirect('User/ProfileShow/'.$userId);
    }
		
		
}