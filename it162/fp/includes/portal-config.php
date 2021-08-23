<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'template.php':
        $title = "Cafe Che Che Home";
        $PageID = 'HOME';
    break;

    case 'index.php':
        $title = "Cafe Che Che Home";
        $PageID = 'HOME';
    break;

    case 'contact.php':
        $title = "Contact Cafe Che Che";
        $PageID = 'CONTACT';
    break;

    case 'local-order.php':
        $title = "Order Cafe Che Che Locally";
        $PageID = 'LOCAL ORDER FORM';
    break;

    case 'login.php':
        $title = "Cafe Che Che Login";
        $PageID = 'LOGIN';
    break;

    case 'reviews.php':
        $title = "Cafe Che Che Reviews";
        $PageID = 'REVIEWS';
    break;

    case 'about.php':
        $title = "About Cafe Che Che";
        $PageID = 'ABOUT US';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default
}

$nav1['login.php'] = "Login";
$nav1['contact.php'] = "Contact";
$nav1['reviews.php'] = "Reviews";
$nav1['about.php'] = "About";
$nav1['local-order.php'] = "Order";
$nav1['template.php'] = "Home";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


?>