 <?php

// include main PHP SDK file
include('inc/LoginRadiusSDK.php');
// create LoginRadius class object. Replace "API_SECRET" with your API Secret
$obj = new LoginRadius("ff54c830-c4a2-4f1c-965d-0771b22bb63a");
// get user profile data
$userprofile = $obj->loginradius_get_data();
// check if user is authenticated/valid 
if($obj->IsAuthenticated == true){
	// print user profile data
	// social ID  
	$ID=$userprofile->ID;
	// Social ID Provider
	$Provider=$userprofile->Provider;
	// Prefix
	$Prefix=$userprofile->Prefix;
	// First Name
	$FirstName=$userprofile->FirstName;
	if ($FirstName=="unknown") $FirstName = "";
	// Middle Name
	$MiddleName=$userprofile->MiddleName;  
	// Last Name
	$LastName=$userprofile->LastName;  
	if ($LastName=="unknown") $LastName = "";
	// Suffix
	$Suffix=$userprofile->Suffix;  
	// Full Name
	$FullName=$userprofile->FullName;  
	if ($FullName=="unknown") $FullName = "";
	// Nick Name
	$NickName=$userprofile->NickName;  
	// Profile Name
	$ProfileName=$userprofile->ProfileName;  
	if ($ProfileName=="unknown") $ProfileName = "";
	// Birthdate
	$BirthDate=$userprofile->BirthDate;  
	// Gender
	$Gender=$userprofile->Gender;  
	// Email type
	// Email
	$EmailValue=isset($userprofile->Email[0]->Value)?$userprofile->Email[0]->Value:$userprofile->Email;  
	// Country
	if(isset($userprofile->Country->Name) && is_string($userprofile->Country->Name)){  
		$Country=$userprofile->Country->Name;  
	}elseif(isset($userprofile->Country) && is_string($userprofile->Country) ){  
		$Country=$userprofile->Country;  
	}
	// Country Code 
	if(isset($userprofile->Country->Code) && is_string($userprofile->Country->Code)){    
		$Country=$userprofile->Country->Code;    
	}
	
	
	
	 $age = $Age=$userprofile->Age; 
	 
	 
	$localCity=$userprofile->LocalCity; 
     // Profile City
    $profileCity=$userprofile->ProfileCit; 
    
    
    $State=$userprofile->State; 
	// City
	$City=$userprofile->City; 
     if ($City=="unknown") $City = "";
    //$Country=$userprofile->Country; 
     
     // Phone Numbers
	if(isset($userprofile->PhoneNumbers) && is_array($userprofile->PhoneNumbers) && count($userprofile->PhoneNumbers) > 0){
		foreach($userprofile->PhoneNumbers as $phoneNumber){
			$phonenumber =  isset($phoneNumber->AccountName) ? $phoneNumber->PhoneNumber : '';

		}
	}




}
?>