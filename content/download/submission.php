<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Information about the user
    $name = $_POST["name"];
    $email = $_POST["email"];
    $ghname = $_POST["githublogin"];
    $pos = $_POST["pos"];

    // Information about their institution
    $inst_name = $_POST["instname"];
    $inst_info = $_POST["instinfo"];
    $inst_url = $_POST["insturl"];
    $inst_addr = $_POST["instaddr"];

    // Any additional information
    $comp = $_POST["addinfo"];

    // Send email
    $to = 'vguittar@insa-toulouse.fr, valentin.gtrd@gmail.com'

	$email_subject = "HiVDI form submission";

	$email_body = 
                "Information about the user : \n\n Name: $name\n GitHub username: $ghname\n Position in the institution: $pos\n".
                "Information about the institution: \n\n Name: $inst_name\n Scientific leader, team name, etc: $inst_info\n URL: $inst_url\n Address: $inst_addr\n".
                "Complementary information, if any: \n\n $comp\n".
    $headers = "From: $email \r\n";
  
    $headers .= "Reply-To: $email \r\n";
  
    mail($to,$email_subject,$email_body,$headers);
  
    // Return to website (success page)
    header("Location: /download/dl_success");
    exit;
}
?>