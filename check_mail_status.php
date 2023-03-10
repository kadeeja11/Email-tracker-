<?php            



    

    //

    $connection = mysqli_connect("localhost","root","password","dbaname");

    $uniq = uniqid();

    

    $mail = new PHPMailer();

    

    try

    {

          

            $mail->IsSMTP();

            $mail->Host = "smtp.gmail.com";

            $mail->Port = 587;

            $mail->SMTPAuth = true;

            $mail->SMTPSecure = 'tls';

            

            $mail->Username = "yourmail";

            $mail->Password = "yourpassword";

            

            $mail->From = "";

            $mail->FromName = "Kadeeja Farha A P M";

            

            $mail->AddAddress("xyz@gmail.com");

            

            $mail->IsHTML(true);

            

            $mail->Subject = "Check Mail Status Send , or Open...";

            $mail->Body = "<img src='https://(your domain name).com/mailstatus.php?token=$uniq' style='height:1px;width:1px;'>Hi,Kadeeja i am your friend so you can help me ?";

            

            if(!$mail->Send())

            {

                echo "Sorry! Message Has Been Not Send Some Technical Issue Was Found";

            }

            else

            {

                echo  "Success! Message Has Been sent to your mail address!";

                mysqli_query($connection,"insert into (tablename) (status,uniqid) values ('send','$uniq')");

            }             

            

    }

    catch (Exception $e)

    {

        $msg =  "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

    }

?>
