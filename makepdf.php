<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once __DIR__ . '/vendor/autoload.php';


//Grab variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];



//HTML begin
$html = '
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class-"col-xs-12">
            <h5 align="center">INVOICE</5h>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3">
            <img src="CMVsurvey.png">
        </div>
        
        <div class="col-xs-3">
            <strong>First Name</strong> ' . $fname . '<br />
            <p>address: malway nagar drug</p>
            <p>Mobile:  987654534</p>
            <p>Website: webtech-solution.in</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-2">
            <b>Bill To:-5</b>
        </div>
        
        <div class="col-xs-5">
            Cian Test<br>
            8 Quin St. imerck
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12>
            <table class="table table-bordered">
                <thread>
                    <tr>
                        <th rowsapn="2">Item</th>
                        <th rowsapn="2">Price</th>
                        <th rowsapn="2" align="center">Tax</th>
                        <th rowsapn="2">Discount</th>
                        <th rowsapn="2">Total</th>
                    </tr>
                </thread>
                <tbody>
                    <tr>
                        <td>Lesson plan software</td>
                        <td>4000</td>
                        <td>100</td>
                        <td>100</td>
                        <td>200</td>
                        <td>4000</td>
                    </tr>
                    <tr>
                        <td colspan="6">
                        <b style="font-weight: bold;">FOur Thousand Dallarydoos</b>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>';
                        
include('vendor/autoload.php');
$mpdf = new \Mpdf\Mpdf();
$mpdf->writeHTML($html);
$pdf = $mpdf->Output(myfile.pdf, 'D');;
?>


//Create new PDF instance
$mpdf = new \Mpdf\Mpdf();



//Create our PDF
$data = '';

$data .= '<h1>Your Details</h1>';

//Add Data
$data .= '<strong>First Name</strong> ' . $fname . '<br />';
$data .= '<strong>Last Name</strong> ' . $lname . '<br />';
$data .= '<strong>Email</strong> ' . $email . '<br />';


if($message)
{
    $data .= '<br /><strong>Message</strong><br />' . $message;
}
 
// Write PDF
$mpdf->WriteHTML($html);

//Output to a string
$pdf = $mpdf->Output('','S');

    //Output to browser
    //$pdf = $mpdf->Output(myfile.pdf, 'D');
    


//
//Beginning of Email Section
//



//Grab enquiry data
$enquirydata = [
    
    'First Name' => $fname,
    'Last Name' => $lname,
    'Email' => $email,
    'Phone' => $phone,
    'Message' => $message
];








//run the function
sendEmail($pdf, $enquirydata);


function sendEmail($pdf, $enquirydata)
{
    
    
    
    
    $emailbody = '';
    $emailbody .= '<h1>Email enquiry from ' . $enquirydata['First Name'] . '</h1>';
    
    foreach($enquirydata as $title => $data)
    {
        
        $emailbody .= '<strong>' . $title . '</strong> : ' . $data . '<br />';
        
        
    }
    
    
  
    
    $mail = new PHPMailer(true);
    
   try {
    //Server settings
    $mail->SMTPDebug = false;                      // Enable verbose debug output
    $mail->isSMTP();                               // Send using SMTP
    $mail->Host       = '    smtp.mailtrap.io';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '1c2c0ff84714f1';                     // SMTP username
    $mail->Password   = 'c9649216552ca0';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 2525;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('test@myemail.com', 'Test Form');
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional

    //Attachment
    $mail->addStringAttachment($pdf, 'myattachment.pdf');
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'CMV survey report for ' . $enquirydata['First Name'];
    $mail->Body    = $emailbody;
    $mail->AltBody = strip_tags($emailbody);

    $mail->send();
       
       
       header('Location:thanks.php?fname=' . $enquirydata{'First Name'});
       
       
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} 
    
}





