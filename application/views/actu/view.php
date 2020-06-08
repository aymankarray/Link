<head>

<meta property="og:url"                content="<?php echo base_url() ;  ?>Actu/show/<?php echo $actuInfo->actuID ?>" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php echo $actuInfo->titre ?> " />
<meta property="og:description"        content="<?php echo $actuInfo->description ?> " />
<meta property="og:image"              content="<?php echo base_url() ;  ?>uploads/Actu/<?php echo $actuInfo->image ?>" />

</head>

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
                <div class="row" style="background-color: white ">
                    
                    <div class="iq-card ">
                        <div class="iq-card-titre">
                            <h2 class="text-center"><br><?php echo $actuInfo->titre ?>       </h2>
                            <hr>
                        </div>
                       <div class="iq-card-body">
                        
                        
                        <div style="line-height: 2;font-size: 16">
                        <?php echo $actuInfo->description ?>
                        <br>
                        <hr>
                        <p class="text-right">
                         publié le : <a href="https://tunivisions.link/User/ProfileShow/<?php echo $actuInfo->userId ?>" > <?php echo $actuInfo->createdDate ?> </a>
                        
                        par : <a href="https://tunivisions.link/User/ProfileShow/<?php echo $actuInfo->userId ?>" > <?php echo $actuInfo->name ?> </a>
                        </p>
                        
                        <hr>

                        </div>
            
          
                         <img src="<?php echo base_url() ;  ?>uploads/Actu/<?php echo $actuInfo->image ?>" class="img-fluid w-100 rounded rounded" alt="profile-bg">
                       


                        <?php echo $actuInfo->lien ?>


                        </div>
                        
                </div>
        </div>
    </div>