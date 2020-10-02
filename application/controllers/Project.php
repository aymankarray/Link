<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Project extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('project_model');

        $this->isLoggedIn();   
    }

		public function index()
		        {
		               
		                $searchText='' ;
		                $data['projectRecords'] = $this->project_model->projectListing();
                          $this->global['pageTitle'] = 'Projets ';
		                  $this->global['active'] = 'projects';
		                $this->loadViews("project/list", $this->global, $data, NULL);   
		        }


        public function projectListingbyClub()
                {
                        $searchText='' ;
                        $data['projectRecords'] = $this->project_model->projectListingByClub($this->clubID);
                        $this->global['pageTitle'] = 'Projets ';
                        $this->global['active'] = 'projects';
                        $this->loadViews("project/ourProject", $this->global, $data, NULL);   
                }



        public function oldProjectListing()
                {
                        $titre='' ;
                        $titre = $this->input->post('titre');
                        $data['titre'] = $titre;
                        $this->load->model('project_model');
                        
                        $data['projectRecords'] = $this->project_model->projectOldListing($titre);
                        
                        $this->global['pageTitle'] = 'Projets ';
                        
                        
                        $this->loadViews("project/old", $this->global, $data, NULL);   
                }



        public function ScoringProjectListing()
                {
                        $titre='' ;
                        $titre = $this->input->post('titre');
                        $data['titre'] = $titre;
                        $this->load->model('project_model');
                        
                        $data['projectRecords'] = $this->project_model->ScoringProjectListing($titre);
                        
                        $this->global['pageTitle'] = 'Scoring ';
                        $this->global['active'] = 'projects';
                        
                        $this->loadViews("project/old", $this->global, $data, NULL);   
                }



		public function projectDetails($projectID)
		        {

		                $this->load->model('project_model');
		                $searchText='' ;
		                $data["projectInfo"] = $this->project_model->getProjectInfo($projectID);
                        $data["evaluations"] = $this->evaluation_model->evaluationInfoprojectId($projectID);

                        $data['resource'] = $this->ressource_model->ressourceListingByProject($projectID);
                        
                        $this->global['pageTitle'] = $data["projectInfo"]->titre ;
		                $this->loadViews("project/view", $this->global, $data, NULL);   
		        }
				
		public function addNew()
			    {
			            $this->load->model('user_model');
			            $data['roles'] = $this->user_model->getUserRoles();
			            $data['clubs'] = $this->user_model->getClubs();
                        $data['members'] = $this->user_model->userListingByclub($this->vendorId,$this->clubID);

                       $this->global['pageTitle'] = 'Ajouter un projet ';


			            $this->loadViews("project/New", $this->global, $data, NULL);
			    }

        public function addNewP()
                {
                $type = $this->input->post('type');
                $Titre = $this->input->post('Titre');
                $Description = $this->input->post('description');
                $debut = $this->input->post('debut');
                $fin = $this->input->post('fin');
                $cible = $this->input->post('cible');
               
                $local = $this->input->post('local');
                $prix = $this->input->post('prix');
                $capacite = $this->input->post('capacite');
                $facebook = $this->input->post('facebook');

                $file_name = 'Projet_'.$Titre.'_'.$_FILES['file']['name'];
                $file_tmp = $_FILES['file']['tmp_name'];
                $file_destination = 'uploads/projet/' . $file_name;
               

                $projectInfo = array(        
                 'banner' => $file_name ,
                 'type' => $type ,
                 'Titre' => NL2BR($Titre) , 
                 'description' => NL2BR($Description) , 
                 'startDate' => $debut , 
                 'endDate' => $fin , 
                 'cible' => $cible ,
                 'local' => $local ,
                 'prix' => $prix ,   
                 'capacite'=>$capacite,
                 'createBy'=> $this->vendorId ,
                 'createdDate'=> date('Y-m-d H:i:s') ,
                 'eventFB'=>$facebook ,
                 'clubID'=>$this->clubID
                     );
                
                if( move_uploaded_file($file_tmp, $file_destination)){
                $this->load->model('project_model');
                $result = $this->project_model->addNewProject($projectInfo);
                                
                }
                
                     redirect('/Project/projectListing');

                }

			    

}