<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Posts extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('evaluation_model');
        $this->load->model('user_model');
        $this->load->model('scores_model');  
        $this->load->model('club_model'); 
        $this->load->model('project_model');   
        $this->load->model('Image_upload_model');
        $this->load->model('actualite_model');
        $this->load->model('notification_model');
        $this->load->model('finance_model');
        $this->load->model('Tfm_part_model');
        $this->load->model('ressource_model');
        $this->load->model('posts_model');
        
        $this->isLoggedIn();   
    }
    

    public function Acceuil()
    {
         $data['ActuRecords'] = $this->actualite_model->actuListing();
         $data['projectRecords'] = $this->project_model->projectListing();
         
         $data  ['postRecords'] =  $this->posts_model->postsListing();
        
            foreach ($data['postRecords'] as $key ) {


                
                        $key->commentsRecords              = $this->posts_model->CommentsListing($key->postId);
                        $key->likeRecords             = $this->posts_model->likesListing($key->postId);
                         $key->likeCheck          = $this->posts_model->likeCheck($key->postId,$this->vendorId);
                
                
            }

            header('Content-Type: application/json');
            echo json_encode( $data  ['postRecords']  , JSON_PRETTY_PRINT);

        // $this->loadViews("Acceuil", $this->global, $data, NULL);   
    }


        public function Comments($postId)
    {
        header('Content-Type: application/json');
            echo json_encode( $this->posts_model->CommentsListing($postId) , JSON_PRETTY_PRINT);
       
    }


    public function post($post)
    {
        $data  ['postRecords'] =  $this->posts_model->postById($post) ; 
        $data['commentsRecords'] = $this->posts_model->CommentsListing($post);
        $data['likeRecords'] = $this->posts_model->likesListing($post);
        $data['likeCheck'] = $this->posts_model->likeCheck($post,$this->vendorId);
        $this->loadViews("post/view", $this->global, $data, NULL);   
    }


    public function addNewP()
    {
        $postText = $this->input->post('postText');
        $postInfo = array(        
           'Content' => NL2BR($postText) ,
           'userId ' => $this->vendorId ,
           'DatePosted '=> date('Y-m-d H:i:s') ,
       );
        $result = $this->posts_model->addNewPost($postInfo);

        redirect('/Posts/Acceuil');
    }



     public function addNewComment($postId)
    {
        $comment = $this->input->post('comment');
        $commentInfo = array(        
           'content' => NL2BR($comment) ,
           'userId ' => $this->vendorId ,
           'createdDTM '=> date('Y-m-d H:i:s') ,
           'postId' => $postId 

       );
        $result = $this->posts_model->addNewComment($commentInfo);

        redirect('/Posts/post/'.$postId);
    }


     public function Like($postId)
    {
        
        $likeInfo = array(        
           'userId ' => $this->vendorId ,
           'createDTM '=> date('Y-m-d H:i:s') ,
           'postId' => $postId 

       );
        $result = $this->posts_model->addNewLike($likeInfo) ;

        if ($result > 0 ){
            return true  ; 
        }

        return false ; 
    }





}