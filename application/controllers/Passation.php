<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Passation extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('academy_formation_model');
        $this->load->model('user_cariere_model');
        $this->load->model('user_diplome_model');
        $this->load->model('ressource_model');
        $this->load->model('passation_model');

        $this->isLoggedInPub();   
    }
    



	public function NewPassation()
		        {
              if(  empty($this->passation_model->passationByuserId($this->vendorId)) ){

		                $this->global['pageTitle'] = 'Passation';
		                $data["Experience"] = $this->user_cariere_model->carrierListing($this->vendorId);
		                $data["ExperienceA"] = $this->user_cariere_model->carrierAutreListing($this->vendorId) ;   
		           		$data["Diplome"] = $this->user_diplome_model->diplomeListing($this->vendorId) ;
		           		$data["ExperienceP"] = $this->user_cariere_model->carrierProListing($this->vendorId) ;

		           		$data["Langue"] = $this->user_cariere_model->langListing($this->vendorId) ;
		           		$data["skils"] = $this->user_cariere_model->hardListing($this->vendorId) ;


 						
 						$data["Roles"] = $this->user_model->getUserAllRoles() ; 
       					$data["Clubs"] = $this->user_model->getClubs() ;


		           		$data["ressourceInfo"] = $this->ressource_model->ressourceListingBUserT($this->vendorId);


		        		$this->loadViews("club/passation/new", $this->global, $data, NULL);  
                }else
                {
                  loadViews('club/passation/view', $this->global, $data, NULL) ; 
                }
		        }  




	       public function addNewPassation()
		        {	            $this->global['pageTitle'] = 'Passation';
                          $data="" ;      

		               $userInfo = array(                                      
                                      'nom'=> strtoupper ($nom) ,
                                      'prenom'=>$prenom,
                                      'adresse'=>$adresse,
                                      'gouvernorat'=>$gouvernorat,
                                      'delegation'=>$delegation,
                                      'updatedBy'=>$this->vendorId,
                                      'updatedDtm'=>date('Y-m-d H:i:s'));



		               $result = $this->user_model->editUser($userInfo, $this->vendorId);


 						$passationInfo = array(                                      
                                      'roleAct'=>$this->role,
                                      'celluleAct'=>$this->cellule,
                                      'roleVol'=> $this->input->post('roleId'), 
                                      'cellule'=>'',
                                      'LM'=> NL2BR($this->input->post('LM')) ,
                                      'PA'=> NL2BR($this->input->post('PA')),
                                      'statut'=> 1 ,
                                      'userId'=>$this->vendorId,
                                      'createdDTM'=>date('Y-m-d H:i:s'));

               $result = $this->passation_model->addNewPassation($passationInfo);



		        		loadViews('club/passation/view', $this->global, $data, NULL) ; 
		        }  




  

	
		
		
}