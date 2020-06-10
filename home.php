<?php
require_once 'config/classPage.php';
$page = new Page();
$page->titleExtra = "Home Page";
print $page->getTop();
print <<<EOF
<!-- Required meta tags --->


<!-- CSS links will be here -->
<!-- Bootstrap 4 CSS and custom CSS -->

EOF;
?>
<?php print $page->getBottom(); ?>


    
   

    

   

   


   
