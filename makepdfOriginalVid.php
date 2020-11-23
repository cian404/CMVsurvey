<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once __DIR__ . '/vendor/autoload.php';


//Grab variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];


$q1a = $_POST['Section1A'];
$q1b = abs($_POST['Section1B']-3);

$q2c = $_POST['Section2C'];
$q2d = abs($_POST['Section2D']-3);

$q3e = $_POST['Section3E'];
$q3f = abs($_POST['Section3F']-3);

$q4g = $_POST['Section4G'];
$q4h = abs($_POST['Section4H']-3);

$q5i = $_POST['Section5I'];
$q5a = abs($_POST['Section5A']-3);

$q6b = $_POST['Section6B'];
$q6c = abs($_POST['Section6C']-3);

$q7d = $_POST['Section7D'];
$q7e = abs($_POST['Section7E']-3);

$q8f = $_POST['Section8F'];
$q8g = abs($_POST['Section8G']-3);

$q9a = $_POST['Section9A'];
$q9d = abs($_POST['Section9D']-3);

$q10c = $_POST['Section10C'];
$q10e = abs($_POST['Section10E']-3);

$q11a = $_POST['Section11A'];
$q11h = abs($_POST['Section11H']-3);

$q12b = $_POST['Section12B'];
$q12d = abs($_POST['Section12D']-3);

$q13c = $_POST['Section13C'];
$q13f = abs($_POST['Section13F']-3);

$q14e = $_POST['Section14E'];
$q14g = abs($_POST['Section14G']-3);

$q15f = $_POST['Section14E'];
$q15h = abs($_POST['Section14G']-3);

$q16a = $_POST['Section16A'];
$q16e = abs($_POST['Section16E']-3);

$q17b = $_POST['Section17B'];
$q17f = abs($_POST['Section17F']-3);

$q18c = $_POST['Section18C'];
$q18g = abs($_POST['Section18G']-3);

$q19d= $_POST['Section19D'];
$q19h = abs($_POST['Section19H']-3);

$q20a = $_POST['Section20A'];
$q20f = abs($_POST['Section20F']-3);

$q21b = $_POST['Section21B'];
$q21g = abs($_POST['Section21G']-3);

$q21b = $_POST['Section21B'];
$q21g = abs($_POST['Section21G']-3);

$q22c = $_POST['Section22C'];
$q22h = abs($_POST['Section22H']-3);

$q23f = $_POST['Section23F'];
$q23i = abs($_POST['Section23I']-3);

$q24b = $_POST['Section24B'];
$q24e = abs($_POST['Section24E']-3);

$q25c = $_POST['Section25C'];
$q25i = abs($_POST['Section25I']-3);

$q26e = $_POST['Section26E'];
$q26h = abs($_POST['Section26H']-3);

$q27b = $_POST['Section27B'];
$q27i = abs($_POST['Section27I']-3);

$q28a = $_POST['Section28A'];
$q28g = abs($_POST['Section28G']-3);

$q29e = $_POST['Section29E'];
$q29i = abs($_POST['Section29I']-3);

$q30b = $_POST['Section30B'];
$q30h = abs($_POST['Section30H']-3);

$q31d = $_POST['Section31D'];
$q31g = abs($_POST['Section31G']-3);

$q32g = $_POST['Section32G'];
$q32i = abs($_POST['Section32I']-3);

$q33a = $_POST['Section33A'];
$q33c = abs($_POST['Section33C']-3);

$q34i = $_POST['Section34I'];
$q34h = abs($_POST['Section34H']-3);

$q35f = $_POST['Section35D'];
$q35d = abs($_POST['Section35D']-3);

$q36i = $_POST['Section36I'];
$q36d = abs($_POST['Section36D']-3);




$catA = $q1a + $q5a  + $q9a  + $q11a + $q16a + $q20a + $q28a + $q33a;

$catB = $q1b + $q6b  + $q12b + $q17b + $q21b + $q24b + $q27b + $q30b;
    
$catC = $q2c + $q6c  + $q10c + $q13c + $q18c + $q21b + $q25c + $q33c;
    
$catD = $q2d + $q7d  + $q9d  + $q12d + $q19d + $q31d + $q35d + $q36d;
    
$catE = $q3e + $q7e  + $q10e + $q14e + $q16e + $q24e + $q26e + $q29e;
    
$catF = $q3f + $q8f  + $q13f + $q15f + $q17f + $q20f + $q23f + $q35f;
    
$catG = $q4g + $q8g  + $q14g + $q18g + $q21g + $q28g + $q31g + $q32g;

$catH = $q4h + $q11h + $q15h + $q19h + $q22h + $q26h + $q30h + $q34h;
    
$catI = $q5i + $q23i + $q25i + $q27i + $q29i + $q32i + $q34i + $q36i;
    

//HTML begin
$html1 = '
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body style="background: transparent url(img/pg2.png) no-repeat 0 0;
    background-image-resize: 6;">
    
    
    <h1 class="text-info">About the Survey</h1>

        <br>
        <br>
            <h4>
            This Career Motivation Values (CMV) survey contrasts<br>
            how your innate values influence your career pathway,<br>
            providing you with great insights into your career<br>
            choices to date, something you apply both consciously<br>
            and unconsciously in your everyday work.<br>

            <br>

            Knowing your CMV profile also<br>
            provides you with structured <br>
            compass points for your future <br>
            career and development <br>
            choices, helping you to steer <br>
            yourself towards areas of <br>
            continued success, interest <br>
            and satisfaction.<br>
            
            <br>
            
            Your CMV profiles teaches you <br>
            to play to your strengths in your <br>
            current role, so that you are more <br>
            likely to stay motivated and passionate <br>
            about what you do at work, contributing <br>
            to enhanced job satisfaction. <br>
            </h4>
        


</body>

';




$html2 = '
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body style="background: transparent url(img/pg3.png) no-repeat 0 0;
    background-image-resize: 6;">
       
       
    <h1 style="color:#F5A51F">CMV Survey Results</h1>
    
    <br>
    <br>
    <div class="row">
    <div class="align-items-center">
        <div class="col-xs-5">
            <p>The Career Motivation Values (CMV) survey allows you to discover what you enjoy in your role at work. Based on your personal profile created from the survey, you can make informed choices to help advance your career in a way that suits you best. Your CMV profile can also help you to play to your strengths in your current role so that you are more likely to stay motivated and passionate about what you do at work, contributing significantly to job satisfaction.
            
            <br>
            <br>
            
            The CMV survey measures nine career motivational perspectives to help you understand and appreciate your career decisions to date, as
        </div>
        
        <div class="col-xs-5">
            <p>well as help you in your future career choices. The closer the alignment between your role at work with your CMV profile, the greater the opportunity for you and your organisation to build a long-term partnership. The more distant the work you do every day is from your core motivational values, the more dissatisfaction you are likely to experience in your work life. Your CMV survey results are summarised in the chart below, which highlights a Motivational Value Index score across each of the nine perspectives based on your answers from the survey. Results with higher scores along the Motivational Value Index represent core values that are most cherished by you.
        </div>
    </div>
    </div>

        
    <div class="row">
        <div class="col-xs-2">
            <p><strong>Category totals:</strong>
            <p>Material Rewards:
            <p>Power Influence:
            <p>Meaning:         
            <p>Expertise:
            <p>Creativity:
            <p>Affiliation:
            <p>Autonomy:
            <p>Security:
            <p>Status:
            
        </div>
        
        <div class="col-xs-5">
            <p> .
            <p>' . $catA . '
            <p>' . $catB . '
            <p>' . $catC . '
            <p>' . $catD . '
            <p>' . $catE . '
            <p>' . $catF . '
            <p>' . $catG . '
            <p>' . $catH . '
            <p>' . $catI . '
        </div>
        
        <br>

    </div>
    

</body>

';


$html3 = '
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
</head>

<body style="background: transparent url(img/pg4.png) no-repeat 0 0; background-image-resize: 6;">



    <div class="container mt-5 ml-5 mr-0">

            <div class="mt-5">
                <h1 style="color:#036966;">CMV Survey Results</h1>
            </div>
            <br>

        <div class="row justify-content-md-center">

            <div class="col-xs-5 ml-5">
                <h5 style="color:#F5A61F; font-weight: bold;">Material Rewards</h5>
                <h6>
                You seek financial return as your central driver at work. You want to work hard and receive good rewards and recognition for your efforts. You are happy to take on big challenges to do this, because you know the results are going to be worth it.
                </h6>
                <br>
            
                <h5 style="color:#2E9E48; font-weight: bold;">Power & Influence</h5>
                <h6>
                You like to take a steady control of situations, and you enjoy having an input on big decisions in the work-place. Seeing the positive results of your judgements and actions on others inspires you, and you enjoy guiding and motivating people.
                </h6>
                
                <br>
            
                <h5 style="color:#036967; font-weight: bold;">Searching for Meaning</h5>
                <h6>
                You search for deeper meanings in your career, looking for jobs where you can have a tangible, positive impact in some way.
                </h6>
            
                <br>
            
                <h5 style="color:#00B5B0; font-weight: bold;">Expertise</h5>
                <h6>
                You’re driven by the need to become a real expert in your field. You want to develop your abilities further in a subject, rather than across a wider scope of many subjects. You prefer the idea of specialising in a chosen field, putting you in an excellent position where only you (and perhaps a select few) can do the role.
                </h6>
                
                <br>
            
                <h5 style="color:#2E9E4E; font-weight: bold;">Creativity</h5>
                <h6>
                You seek a job where you can stretch your creative muscles, think outside the box, and use your inventive mind. You have a great imagination and can bring new and fresh ideas to the table – and you really enjoy doing so.
                </h6>
                
            </div>
        
        
            <div class="col-xs-5">
          
                <h5 style="color:#F5A61F; font-weight: bold;">Affiliation</h5>
                <h6>
                Having a strong team environment or social aspect to work is important to you. You love working with people, and you seek jobs where you can do this every day. Whether it is customer or colleague relation- ships, you thrive on social interactions to really enjoy your work.
                </h6>
            
                <br>
            
                <h5 style="color:#00B5B9; font-weight: bold;">Autonomy</h5>
                <h6>
                You prefer an independent approach to work and feel it’s important you’re able to make your own deci- sions and have a good work/life balance. This could include choosing your working hours or location or having control over your own workload. You seek a role where your employer is flexible and adaptable to your needs.
                </h6>
            
                <br>
            
                <h5 style="color:#12696A; font-weight: bold;">Security</h5>
                <h6>
                You’re driven by the need to become a real expert in your field. You want to develop your abilities further in a subject, rather than across a wider scope of many subjects. You prefer the idea of specialising in a chosen field, putting you in an excellent position where only you (and perhaps a select few) can do the role.
                </h6>
            
                <br>
            
                <h5 style="color:#2E9E47; font-weight: bold;">Status</h5>
                <h6>
                Seeking to be recognised and respected by other people.
                </h6>
        </div>
    </div>    

</body>

';




$html4 = '
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body style="background: transparent url(img/pg5_1.png) no-repeat 0 0;
    background-image-resize: 6;">
            
            
    
    <div style="margin-left: 40px">            
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <h1 style="color:#2E9E47; margin-left: 40px;">About Us</h1>
            
            <p style="color:#ffffff; margin-left: 40px;">Ingenium Training & Consulting provides a wide <br>
            range of human and organisational performance <br>
            training and consultancy services to a diverse <br>
            range of clients across many sectors. Our goal is <br>
            to assist our clients build indus- try differentiating <br>
            strategy, a culture of embracing change, as well <br>
            as building bench-strength in emerging and <br>
            executive leadership teams to support their <br>
            growth and development.</p>
        
            <h2 style="color:#2E9E47; margin-left: 40px;">Our Values</h2>
            <h4 style="color:#ffffff; font-weight:bold; margin-left: 70px;">
            <p>
            Passion for People 
            <br>
            Innovation
            <br>
            Collaboration 
            <br>
            Integrity 
            <br>
            Excellence
            </p>
            </h4>
        </div>
            
</body>

';







include('vendor/autoload.php');
$mpdf = new \Mpdf\Mpdf([]);


$mpdf->AddPageByArray([
    'margin-left' => 10,
    'margin-right' => 0,
    'margin-top' => 20,
    'margin-bottom' => 0,
]);



// Create first text page
$mpdf->WriteHTML('

<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>


<body style="background: transparent url(img/frontPG.png) no-repeat 0 0;
    background-image-resize: 6;">

    <div style="color:#ffffff; text-align:right; margin-right:90px;">
    
            <br>
            <br>
            <br>
            <br>
            <br>    
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>


            
            
        <h1 style="color:#ffffff; font-size: 56px;">Career
            <br>
            Motivation
            <br>
            Values
            <br>
        </h1>
        <br>
        <h2 style="font-weight: bold; color:#ffffff;">
            ' . $fname .  ' ' . $lname . ' <br>
        </h2>
        <h2 style="color:#ffffff;">
            '. date("d.m.Y") .'
        </h2>
        </div>

</body>
            
            
');



// Create second page
$mpdf->AddPage();
$mpdf->writeHTML($html1);

$mpdf->AddPage();
$mpdf->writeHTML($html2);

$mpdf->AddPage();
$mpdf->writeHTML($html3);


$mpdf->AddPage();
$mpdf->writeHTML($html4);







$pdf = $mpdf->Output(myfile.pdf, 'D');;
?>