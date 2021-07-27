<?PHP

// $connect    =   mysqli_connect("localhost","root","","3am");
$connect=mysqli_connect("localhost","uammxcuy_admin","@Ngissah1","uammxcuy_prayer");



$prayer_status=0;

require 'PHPMailerAutoload.php';


  $mail=new PHPMailer;

$mail->Host='mail.3ammissionministry.com';
$mail->Port=465;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='prayer@3ammissionministry.com';
$mail->Password='prayer2020';   
 
  
 



if(isset($_POST['prayer_request'])){
   
    $fname = mysqli_real_escape_string($connect,  $_POST['fname']);
    $oname = mysqli_real_escape_string($connect,  $_POST['oname']);
    $sname = mysqli_real_escape_string($connect,  $_POST['sname']);
//    $contact = mysqli_real_escape_string($connect,  $_POST['contact']);
    $email = mysqli_real_escape_string($connect,  $_POST['email']);
    $prayer = mysqli_real_escape_string($connect,  $_POST['prayer']);
    $date = mysqli_real_escape_string($connect,  $_POST['date']);
    $time = mysqli_real_escape_string($connect,  $_POST['time']);
    $day = mysqli_real_escape_string($connect,  $_POST['day']);
    
     
if(1){
    
      
$mail->SetFrom('prayer@3ammissionministry.com','New Prayer Reuest');
$mail->AddAddress('support@3ammissionministry.com',$fname." ".$oname." ".$sname);
// $mail->AddReplyTo('jngissah@gmail.com','Joseph Ngissah');
      
$mail->isHTML(true);
$mail->Subject='Prayer Request Received';
$mail->Body='<div class="container shadow-sm rounded p-4">
    <link rel="stylesheet" href="css/bootstrap.css">
    
  <div>
      <div class="row">
          <div class="col-2">Date</div>
          <div class="col-9 text-left">'.$date.'</div>
      </div>
         <br>
        <div class="row">
          <div class="col-2">Time</div>
          <div class="col-9 text-left">'.$time.'</div>
      </div>
        <br>
        <div class="row">
          <div class="col-2">From</div>
          <div class="col-9 text-left">'.$fname.' '.$oname.' '.$sname.'</div>
      </div>
         <br>
         
         <div class="row">
          <div class="col-2">Email</div>
          <div class="col-9 text-left">'.$email.'</div>
      </div>
      <div class="mt-2">
          <b>Prayer Request</b> </br>
          <p>'.$prayer.'</p>
          
      </div>
      
  </div>
    
     <br>     <hr>    <div style="text-align:center;">  <img src="https://3ammissionministry.com/img/home.png" width="12%" >   <br>        <span style="font-style:italic; font-family:san-sarif; color:#006994">3AM Mission Ministry </span>  <br>         <span style="font-style:italic; font-family:san-sarif; color:#006994">1011 Winged Foot Drive, Bowie, Maryland, 20721</span>   <br>        <span style="font-style:italic; font-family:san-sarif; color:#006994">Washington DC, USA</span> <br>         <span style="font-style:italic; font-family:san-sarif; color:#006994">	+000 00000</span> ,          <span style="font-style:italic; font-family:san-sarif; color:#006994">	+000 00000</span> <br>          <span style="font-style:italic; font-family:san-sarif; color:#006994">	<a href="www.3ammissionsministry.com">www.3ammissionsministry.com</a> </span> <br>      </div> <p class="text-center mt-2" style="font-size:12px; color:green"> Powered by <a href="https://www.raventechhub.com"  style=" color:green">RavinLead Tech Hub</a></p>     <div>
     </div>
    </div> ' ;
      
if($mail->send()){
    $prayer_status=1;
     echo 1;
}

 

      
      
      
  }
    
//      
//if($prayer_status==1){
//$mail->SetFrom('heraldsworldinc@gmail.com','3AM Missions Ministry');
//$mail->AddAddress($email,$fname." ".$oname." ".$sname);
//// $mail->AddReplyTo('jngissah@gmail.com','Joseph Ngissah');
//      
//$mail->isHTML(true);
//$mail->Subject='Prayer Request';
//$mail->Body='<div class="container shadow-sm rounded p-4">
//    <link rel="stylesheet" href="css/bootstrap.css">
//    
//   <div>
//       <div class="row">
//           <div class="col-2">Date</div>
//           <div class="col-9 text-left">'.$date.'</div>
//       </div>
//          
//        <div class="row">
//           <div class="col-2">Time</div>
//           <div class="col-9 text-left">'.$time.'</div>
//       </div>
//         
//        <div class="row">
//           <div class="col-2">From</div>
//           <div class="col-9 text-left">'.$fname.' '.$oname.' '.$sname.'</div>
//       </div>
//          
//          <div class="row">
//           <div class="col-2">Contact</div>
//           <div class="col-9 text-left">'.$contact.'</div>
//       </div> 
//          <div class="row">
//           <div class="col-2">Email</div>
//           <div class="col-9 text-left">'.$email.'</div>
//       </div>
//       <div class="mt-2">
//           <b>Prayer Request</b> </br>
//           <p>'.$prayer.'</p>
//           
//       </div>
//       
//   </div>
//    
//     <br>     <hr>    <div style="text-align:center;">  <img src="https://www.heraldsworldinc.com/images/hh.png" width="12%" >   <br>        <span style="font-style:italic; font-family:san-sarif; color:#006994">3 Angel Message Mission Ministry </span>  <br>         <span style="font-style:italic; font-family:san-sarif; color:#006994">Exact address</span>   <br>        <span style="font-style:italic; font-family:san-sarif; color:#006994">Washington DC, USA</span> <br>         <span style="font-style:italic; font-family:san-sarif; color:#006994">	+000 00000</span> ,          <span style="font-style:italic; font-family:san-sarif; color:#006994">	+000 00000</span> <br>          <span style="font-style:italic; font-family:san-sarif; color:#006994">	<a href="www.3ammissionsministry.com">www.3ammissionsministry.com</a> </span> <br>      </div> <p class="text-center mt-2" style="font-size:12px; color:green"> Powered by <a href="https://www.raventechhub.com"  style=" color:green">RavinLead Tech Hub</a></p>     <div>
//     </div>
//    </div>
//     ' ;
//    
//    
//    if($mail->send()){
//    $prayer_status=0;
//     
//}
//}
//
    
}















?>