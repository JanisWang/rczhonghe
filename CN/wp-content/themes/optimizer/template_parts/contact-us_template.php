<?php
/*
Template Name: 联系我们 Contact Us Page
*/
?>
<?php global $optimizer;?>
<?php get_header(); ?>


    <!--CUSTOM PAGE SLIDER STARTS-->
    <div>
      <img src="http://rczhonghe.com/CN/wp-content/uploads/2016/09/003-1_meitu_4.jpg" style="width:100%;height:40%;" >
    </div>
    <!--CUSTOM PAGE SLIDER ENDS-->

    <div class="page_fullwidth_wrap layer_wrapper">
        

  
    <div id="content">
        <div class="center">
            <div class="single_wrap no_sidebar">
                <div class="single_post">
					  <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                      <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">  
                      
                        <!--EDIT BUTTON START-->
                            <?php if ( is_user_logged_in() && is_admin() ) { ?>
                                    <div class="edit_wrap">
                            			<a href="<?php echo get_edit_post_link(); ?>">
                            				<?php _e('Edit','optimizer'); ?>
                                		</a>
                            		</div>
                            <?php } ?>
                        <!--EDIT BUTTON END-->

                        <!--PAGE CONTENT START--> 

                        <div class="single_post_content" style="float:left;">
<!--THE CONTENT START-->
                                    <div class="thn_post_wrap">
                                        <?php the_content(); ?>
                                    </div>
                                        <div style="clear:both"></div>
                                    
                                <!--THE CONTENT END-->

                                

<!-- Google Maps -->
<div id="googleMap" style="width:100%;height:420px;"></div>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAnqU-SlWG2nYRkizvS5JZODf2pmNL1Moc"></script>
<script>
var myCenter = new google.maps.LatLng(39.913994, 116.340521);

function initialize() {
var mapProp = {
  center: myCenter,
  zoom: 5,
  scrollwheel: false,
  draggable: false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
                                <!--THE CONTENT END-->
                        </div>

                         <!--Send Email-->

                        <div class="single_post_content" style="float:right;margin: 5px;padding: 15px;max-width: 300px;">
                        <h2>留言</h2>
                        <form method="post" action="">
                      
                          <p>发件人：</p> <input type="text" name="from" placeholder="输入您的邮箱"><br>
                          <p>主题：</p> <input type="text" name="subject" placeholder="输入主题"><br>
                          <p>内容：</p> <textarea rows="10" cols="40" name="message" placeholder="您想说的话"></textarea><br>
                          <input type="submit" name="submit" value="发送邮件">
                        </form>
                        <?php 
                          if (isset($_POST["submit"])) {
                          // Check if the "from" input field is filled out
                          if (isset($_POST["from"])) {
                             $to = 'rczhonghe@hotmail.com';
                             $from = $_POST["from"]; // sender
                             $subject = $_POST["subject"];
                             $message = $_POST["message"]."\nFrom: $from\n";
                             // message lines should not exceed 70 characters (PHP rule), so wrap it
                             $message = wordwrap($message, 70);
                             // send mail
                             mail($to,$subject,$message);
                             $alert = "邮件已发送";
                             echo "<script type='text/javascript'>alert('$alert');</script>";
                             //echo $alert;
                           }
                           }
                           ?>
                        </div>
                        <div style="clear:both"></div>

                        

                        <!--PAGE CONTENT END-->                       
                  </div>
                  <?php endwhile ?> 
                  </div><!--single_post class END-->
                                   
              <?php endif ?>
            
              </div><!--single_wrap class END-->
           

            </div>
        </div>
                    
   </div><!--layer_wrapper class END-->
<?php get_footer(); ?>