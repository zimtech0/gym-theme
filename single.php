<?php 
//add header to page
get_header();

?>
<?php 
    //loop through all post
    while(have_posts()) : the_post();
    ?>
<!--  header title wrapped in h1 tag --->
    <h1>
        <?php 
        //display post title
            the_title();
            
        ?>
     </h1>
    
 
        <?php 
        //display post content
            the_content();
            
        // end while
             endwhile;
              ?>