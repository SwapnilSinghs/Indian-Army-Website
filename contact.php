<!--  #############################################   Made By Swapnil Singh ############################################################-->

<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $mobile_no = $_POST['mobile']; // Get Mobile No
        $msg = $_POST['message']; // Get Message Value
         
        $to = "swapnilsingh6164@gmail.com"; // You can change here your Email
        $subject = "'$name' Contacted IndianArmy.com"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:1000px;'>
                    <tbody>
                        <tr>
                            <td style='width:200px'><strong>Full Name: </strong></td>
                            <td style='width:500px'>$name</td>
                        </tr>
                        <br>
                        <tr>
                            <td style='width:200px'><strong>Email Address: </strong></td>
                            <td style='width:500px'>$email_id</td>
                        </tr>
                        <br>
                        <tr>
                            <td style='width:200px'><strong>Mobile Number: </strong></td>
                            <td style='width:500px'>$mobile_no</td>
                        </tr>
                        <br>
                        <tr>
                            <td style='width:200px'><strong>Message: </strong></td>
                            <td style='width:1000px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: Admin <swapnilsingh6164@gmail.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id

        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            echo "<script>
                    alert('Thank you for Contacting Us. We will get back to you soon.');
                    window.history.back();
                </script>";
        }
 
        else{
            // Message if mail has been not sent
            echo "<script>
                    alert('Server Error on IndianArmy.com. Please try contacting us after sometime.');
                    window.history.back();
                </script>";
        }
    }
?>

<!--  #############################################   Made By Swapnil Singh ############################################################-->
