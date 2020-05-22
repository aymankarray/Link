
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Notification</h4>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <?php foreach ($notifRecordss as $key ) {                        ?>
                     <div class="iq-card">
                        <div class="iq-card-body">
                           <ul class="notification-list m-0 p-0">
                              <li class="d-flex align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/14.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6><?php echo $key->text ?></h6>
                                    <p class="mb-0">Il y a <?php echo xTimeAgo($key->dateNotif,date('Y-m-d H:i:s')) ; ?> </p>
                                 </div>
                                 <div class="d-flex align-items-center">
                                    <a href="javascript:void();" class="mr-3 iq-notify iq-bg-primary rounded"><i class="ri-award-line"></i></a>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" data-toggle="dropdown">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                             <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                             <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  <?php } ?>
                  </div>
               </div>
            </div>
       