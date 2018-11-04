<?php
 if (isset($_POST['text'])) #checks if user input exists
 {
 	$sessionId   = $_POST["sessionId"];
	$serviceCode = $_POST["serviceCode"];
	$phoneNumber = $_POST["phoneNumber"];
	$text        = $_POST["text"];

	#Separates the details using * and creates an array of the elements.
	$level = explode("*", $text);

	if ($text == "")
	{
		$response = "CON Welcome to Femi-jirani.\n ";
		$response .= "Please fill in the following details.\n First name.\n";
	}

	else if(isset($level[0]) && $level[0]!=”” && !isset($level[1])){
		$response .= 'CON Second name';
	 
	 }
	else if(isset($level[1]) && $level[1]!=”” && !isset($level[2])){
		$response ='CON Last name';

	}
	else if(isset($level[2]) && $level[2]!=”” && !isset($level[3])){
		$response ='CON ID Number/D.O.B.';

	}
	else if(isset($level[3]) && $level[3]!=”” && !isset($level[4])){
		$response ='CON Town';

	}
	else if(isset($level[4]) && $level[4]!=”” && !isset($level[5])){
		$response ='CON Estate/Village';		
	}
	else if(isset($level[5]) && $level[5]!=”” && !isset($level[6])){
		$response ='COM Nearest landmark';
	}

	else if(isset($level[6]) && $level[6]!=”” && !isset($level[7])){

	 //Save data to database
	 $data = array(
		 "phoneNumber"=>$phoneNumber,
		 "firstName" =>$level[0],
		 'secondName' =>$level[1]
		 'lastName' =>$level[2],
		 "idNumber" =>$level[3],
		 'town' =>$level[4],
		 'estate' =>level[5],
		 "landmark"=>$level[6]
	 );

	 	$response="END Thank you ".$level[0]." for registering.\nWe will keep you updated"; 

 	
 	}

    header('Content-type: text/plain');
    echo $response;


 ?>