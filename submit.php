<?php
include('database.inc.php');
$msg="";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['comment'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
	$comment=mysqli_real_escape_string($con,$_POST['comment']);
	
	mysqli_query($con,"insert into contact(name,email,mobile,comment) values('$name','$email','$mobile','$comment')");
	$msg="Thank You! We will contact you shortly.";
	
	$html="<table><tr><td>Name:</td><td>$name</td></tr><tr><td>Email:</td><td>$email</td></tr><tr><td>Mobile:</td><td>$mobile</td></tr><tr><td>Comment:</td><td>$comment</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="hrithikbansal2400@gmail.com";
	$mail->Password="cfylttrtwlqkyleq";
	$mail->SetFrom("hrithikbansal2400@gmail.com");
	$mail->addAddress("hrithikbansal2400@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="Contact Us Form";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>true
	));
	if($mail->send()){
		// echo "Mail send";
	}else{
		// echo "Error occur";
	}
	echo $msg;
}
?>