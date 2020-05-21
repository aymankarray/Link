

<div class="header-for-bg">
    <div class="background-header position-relative">
       
        <div class="title-on-header">
            <div class="data-block">
                <h2><?php echo $actuInfo->titre ?>
                    
                </h2>
            </div>
        </div>
    </div>
</div>

<div id="content-page" class="content-page">
    <div class="container">
                <div class="row ">
                    

                    <div class="col-md-6"> 
                        <?php echo $actuInfo->description ?>
                   </div>
                    <div class="col-md-4"> 
                         <img src="<?php echo base_url() ;  ?>uploads/Actu/<?php echo $actuInfo->image ?>" class="img-fluid w-100 rounded rounded" alt="profile-bg">
                   </div>





                    <span>
                        
                        publié le : <a href="https://tunivisions.link/User/ProfileShow/<?php echo $actuInfo->userId ?>" > <?php echo $actuInfo->createdDate ?> </a>

                    </span>

                    <span>
                        
                        par : <a href="https://tunivisions.link/User/ProfileShow/<?php echo $actuInfo->userId ?>" > <?php echo $actuInfo->name ?> </a>

                    </span>


    

                </div>
        </div>
    </div>