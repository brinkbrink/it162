<?php include 'includes/header.php';?>
<div class="grid-item-9"><br>
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "brinkbrink@gmail.com";  //place your/your client's email address here
        $toName = "E Brink"; //place your client's name here
        $website = "https://www.ebrink.online/it162/index.php";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?><br>
</div>

<?php include 'includes/footer.php';?>