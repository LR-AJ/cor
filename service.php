<?php

$search = $_GET['searchKey'];
$domain = array("LLP Registration"=>"https://companyregistrationonline.in/llp-registration/", "Private Limited Company Registration"=>"https://companyregistrationonline.in/private-limited-company-registration/", "Nidhi Company Registeration"=>"https://companyregistrationonline.in/nidhi-company-registration/");
// $list = array('LLP Registration','NBFC License','Nidhi Company Registeration','Private Limited Company Registration','Section 8 Company Registration','OPC Registration');
$list = ['LLP Registration','NBFC License','Nidhi Company Registeration','Private Limited Company Registration','Section 8 Company Registration','OPC Registration'];
if(in_array($search,$list)){
  echo("check");
  // header('Location:'.'https://companyregistrationonline.in/'. $domain[$search]);
  header("Location: https://www.legalraasta.com/thanks/");

}

  
  // Set output to "no suggestion" if no hint was found
  // or to the correct values

  ?>

