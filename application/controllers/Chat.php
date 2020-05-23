
<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Chat extends BaseController {

			 public function __construct()
			    {
			        parent::__construct();

								$this->load->model('chat_model');
								
			        $this->isLoggedIn();   
			    }

				public function chatListing()
			    {

			    	    $data['ChatRecords'] = $this->chat_model->ChatListing($this->vendorId) ;

			    	    	foreach ($data['ChatRecords'] as $key ) {                
				                        $key->ChatPartListing             = $this->chat_model->ChatPartListing($key->disscussionId);
				                        $key->messageListing              = $this->chat_model->messageListing($key->disscussionId) ; 
				                  }


                        $this->loadViews("chat/list", $this->global, $data, NULL);   

				}






}
?>
