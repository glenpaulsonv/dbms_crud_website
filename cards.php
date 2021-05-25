<?php foreach($users as $user):  ?>

<!-----------------------------Volunteer 1---------------------------------->
<div class="volunteer_card">
       <div class="volunteer_content">
               <div class="volunteer_img">
               <img src = "upload/<?= $user['img_name'] ?>">
               <img src="<?php echo $user['vol_image']; ?>">
               </div>

               <div class="volunteer_desc">
                       <h3><?php echo $user['name']; ?></h3>
                       <p><?php echo $user['category']; ?></p>                                                
                       <p><?php echo $user['portfolio']; ?></p>                                               
                       
               </div>
               
               
       </div>
</div>
<!-----------------------------Volunteer 1 Ends Here---------------------------------->


<?php endforeach; ?>