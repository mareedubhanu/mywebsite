<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
  // Replace contact@example.com with your real receiving email address



$con = mysqli_connect('sql206.epizy.com','epiz_30305518','WQPLunn0DeBw');
mysqli_select_db($con, 'epiz_30305518_CONTACTS');
//print_r($con);die;

 /* $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
   // die( 'Hi User Please Wait Bhanu Will Fix the Bug Soon !');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
  */

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);
*/
 //$contact->send();

$sql= "insert into contacts (email , name, subject, message) values ('".$_POST['email']."', '".$_POST['name']."', '".$_POST['subject']."', '".$_POST['message']."')" ;
$res = mysqli_query($con, $sql); 
//echo  $res = "insert into contacts (email , name, subject, message) values ('".$_POST['email']."', '".$_POST['name']."', '".$_POST['subject']."', '".$_POST['message']."')" ;
//echo ' tests ';
// print_r($res);
if($res)
    echo 'OK';
 else 
   echo 'Somthing Wrong, Please try later';
   
?>
