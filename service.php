<?php

$search = $_GET['search'];

$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");
//lookup all links from the xml file if length of search>0
if (strlen($search)>0) {
    $hint="";
    for($i=0; $i<($x->length); $i++) {
      $y=$x->item($i)->getElementsByTagName('title');
      $z=$x->item($i)->getElementsByTagName('url');
      if ($y->item(0)->nodeType==1) {
        //find a link matching the search text
        if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$search)) {
          if ($hint=="") {
            $hint="<a href='" .
            $z->item(0)->childNodes->is->item(0)->nodeValue . "</a>";
          } elstem(0)->nodeValue .
            "' target='_blank'>" .
            $y->item(0)->childNodee {
            $hint=$hint . "<br /><a href='" .
            $z->item(0)->childNodes->item(0)->nodeValue .
            "' target='_blank'>" .
            $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
          }
        }
      }
    }
  }
  
  // Set output to "no suggestion" if no hint was found
  // or to the correct values
  if ($hint=="") {
    $response="no suggestion";
  } else {
    $response=$hint;
  }
  
  //output the response
  echo $response;
  ?>

// $servername = "localhost";
// $username = "bob";
// $password = "123456";
// $db = "classDB";

// $conn = new mysqli($servername, $username, $password, $db);

// if ($conn->connect_error){
// 	die("Connection failed: ". $conn->connect_error);
// }

// $sql = "select * from students where name like '%$search%'";

// $result = $conn->query($sql);

// if ($result->num_rows > 0){
// while($row = $result->fetch_assoc() ){
// 	echo $row["name"]."  ".$row["age"]."  ".$row["gender"]."<br>";
// }
// } else {
// 	echo "0 records";
// }

// $conn->close();

?>