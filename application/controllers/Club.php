<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Club extends BaseController {

    public function __construct()
    {
        parent::__construct();
			        $this->load->model('user_model');
			        $this->load->model('notification_model');
			        $this->load->model('club_model');
					$this->load->model('project_model');

					$this->load->model('project_model');

					
        $this->isLoggedIn();   
    }
    

		public function index()
		        {

		                $this->load->model('club_model');
		                $searchText='' ;
		                $data['clubRecords'] = $this->club_model->clubListing();

		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'Clubs';
		                $this->loadViews("club/all", $this->global, $data, NULL);   
		        }



				public function clubInfo($clubId)
		        {
					
		      

			        $data["clubInfo"] = $this->club_model->getClubInfo($clubId);
			        $data["bureauExe"] = $this->club_model->BureauListing($clubId);
			        $data["ProjectByClub"] = $this->project_model->projectListingByClubPost($clubId);
			        $data["CountProjectByClub"] = Count($this->project_model->projectListingByClub($clubId));

			        $data["members"] = $this->user_model->userListingByclubINFO($clubId) ;
			        $data["membersCount"] =count($this->user_model->userListingByclub($this->vendorId,$clubId)) ;
			 		$count = $this->user_model->userListing($this->vendorId);
			        $data['userRecords'] = $this->user_model->userListingByclub($this->vendorId,$clubId);

			        


			    	$this->global['active'] = 'mon club';   
			    	$this->global['clubN'] = $clubId;    
			       $this->loadViews("club/myClub", $this->global, $data, NULL);
		        }

		        public function Postes()
		        {
					$this->load->model('user_model');
			        $data["membres"] = $this->user_model->userListingByclub($this->vendorId,$this->clubID);
			       
			        
			        $this->global['active'] = 'postes';
			       
			        $this->loadViews("club/roles", $this->global, $data, NULL);
		        }




		        public function about($clubId)
		        {
					$this->load->model('user_model');
			       $data["bureauExe"] = $this->club_model->BureauListing($clubId);
			       			 $data["clubInfo"] = $this->club_model->getClubInfo($clubId);
            			$data['userRecords'] = $this->user_model->userListingByclub($this->vendorId,$clubId);
			        $data['count'] = count($data['userRecords'])  ;
			        $data["membersCount"] =count($this->user_model->userListingByclub($this->vendorId,$clubId)) ;
			        	 $this->global['active'] = 'postes';
			       $this->global['clubN'] = $clubId;
			        $this->loadViews("club/about", $this->global, $data, NULL);
		        }



		        public function Members($clubId)
		        {
					$this->load->model('user_model');
			       $data["bureauExe"] = $this->club_model->BureauListing($clubId);
			       			 $data["clubInfo"] = $this->club_model->getClubInfo($clubId);
            			$data['userRecords'] = $this->user_model->userListingByclub($this->vendorId,$clubId);
			        $data['count'] = count($data['userRecords'])  ;
			        $data["membersCount"] =count($this->user_model->userListingByclub($this->vendorId,$clubId)) ;
			        $this->global['active'] = 'postes';
					$this->global['clubN'] = $clubId;
			       
			        $this->loadViews("club/clubMembers", $this->global, $data, NULL);
		        }

		         public function ClassementMembers($clubId)
		        {
					$this->load->model('user_model');
			       $data["bureauExe"] = $this->club_model->BureauListing($clubId);
			       			 $data["clubInfo"] = $this->club_model->getClubInfo($clubId);
            			$data['userRecords'] = $this->user_model->userListingByclub($this->vendorId,$clubId);
			        $data['count'] = count($data['userRecords'])  ;
			        $data["membersCount"] =count($this->user_model->userListingByclub($this->vendorId,$clubId)) ;
			        	 $this->global['active'] = 'postes';
			        	 $data["RatingMembers"] = $this->scores_model-> RaitingUsersByClubTop5($clubId) ;
			       $this->global['clubN'] = $clubId;
			        $this->loadViews("club/clubMembers", $this->global, $data, NULL);
		        }


		        public function editClub($clubId)
		        {
					$this->load->model('user_model');
                    $data["members"] = $this->user_model->userListingByclub($this->vendorId,$clubId);
			        $data["clubInfo"] = $this->club_model->getClubInfo($clubId);
			       	
			        $this->loadViews("club/edit", $this->global, $data, NULL);
		        }


		       

}