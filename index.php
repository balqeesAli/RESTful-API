<?php 


 $dataArr = array();
  
  $data = json_decode(file_get_contents("php://input"));

  
  $username = $data->username;
  
  $password = $data->password;
  
  if($username == '' && $password == ''){
  
  $code = "401";
  $body = "enter your username and password";
  
  
  }else if($username == 'telypay' && $password == 'password123'){
  
  $code = "200";
  $body = "Success";
   
  
  }else if($username == 'telypay' && $password != 'password123'){
  
    $code = "400";
    $body = "Wrong Password"; 
  
  

  }else if($username != 'telypay' && $password != 'password123'){
  
    $code = "500";
    $body = "Error"; 
   
      
  }else if($username != 'telypay' && $password == 'password123'){
  
    $code = "402";
    $body = "Wrong Username"; 
  
  } 
  
  
  
  array_push($dataArr, ['HTTP' =>  $code,  'Body' => $body ]);
  
  
 
   
echo json_encode($dataArr[0]);  

?>
