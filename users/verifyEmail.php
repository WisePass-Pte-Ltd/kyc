<?php
/**
 * Created by PhpStorm.
 * User: accubits
 * Date: 09/09/17
 * Time: 5:31 PM
 */

include '../libraries/header.php';
header('Content-Type: text/html');

function onSuccessHandler() {

    global $config,$db,$error,$redis;
    $users = new Users($db,$config,$error,$redis);
    $response=$users->verifyEmail($_GET['token']);
    $data = $users->getUserDetailsFromId($response['result']['id']);
    $email = $data[$config->COL_userRegistration_email];
    $users->sendMail($email,"Welcome Email",dbconfig::emailContentWelcomeMail($data[$config->COL_userRegistration_username]));

    if ($response['success'] ==true) {
        echo "<!doctype html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
    <base href=".dbconfig::$emailBaseUrl."/>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>CrypBrokers</title>
    <!--<link href=\"https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat|Open+Sans|Raleway:300|Roboto:300\" rel=\"stylesheet\">-->
    <!--<link href=\"http://allfont.net/allfont.css?fonts=montserrat-light\" rel=\"stylesheet\" type=\"text/css\" />-->
    <style>
        html,body,center {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body style=\"width:100% !important; margin:0 !important; padding:0 !important; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; background-color:#FFFFFF;\">
<center>
    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" style=\"background-color: #f7f8fb;padding: 5% 0;\">
        <tr>
            <td align=\"center\" valign=\"center\">
                <!-- BEGIN TEMPLATE // -->
                <!--[if gte mso 9]>
                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\" style=\"max-width:600px;\">
                    <tr>
                        <td align=\"center\" valign=\"top\" width=\"600\" style=\"width:600px;\">
                <![endif]-->
                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px\">
                    <tbody>
                    <tr>
                        <td>
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"width: 100%;background-color: white\">
                                <tbody>
                                <tr>
                                    <td>
                                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"width: 100%;text-align: center;padding-top: 3%\">
                                            <tr>
                                                <td>
                                                    <img src=\"images/cryp_log.png\" style=\"width: 200px\">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"text-align: center\">
                                            <tr>
                                                <td style=\"text-align: center;width: 100%;\">
                                                    <p style=\"text-align: center;font-size: 35px;margin: 0;font-family: 'Montserrat Light', sans-serif;color: #989898;line-height: 1.5;\">Thank You!</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr style=\"background-color: #f7f8fb;\">
                                    <td>
                                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"text-align: center;background-color: white\">
                                            <tr>
                                                <td style=\"text-align: center;width: 100%;\">
                                                    <p style=\"text-align: center;font-size: 18px;font-family: 'Montserrat Light', sans-serif;color: #989898;line-height: 1.5;width: 90%;margin: 0px auto 10px auto\">
                                                       Your email has been verified.
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"text-align: center;background-color: white\">
                                            <tr>
                                                <td style=\"text-align: center;width: 100%;background-color: white\">
                                                    <p>
                                                        <a href=\"index.html\" style=\"color: #fff; text-decoration: none\"> <div style=\"display: inline-block;background-color: #FFC107;font-family: 'Montserrat Light', sans-serif;padding: 7px 30px;border-radius: 20px;color: #f7f8fb;font-size: 12px;\">DONE</div></a>
                                                    </p>
                                                </td>
                                                <td style=\"text-align: right;width: 40%;\">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"text-align: center;background-color: white\">
                                            <tr>
                                                <td style=\"text-align: center;width: 100%;\">
                                                    <img src=\"images/cryp_btm_mail.png\" style=\"width: 100%\">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"text-align: center;\">
                                <tbody>
                                <tr>
                                    <td>
                                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"text-align: center;background-color: transparent\">
                                            <tbody>
                                            <tr>
                                                <td style=\"text-align: center;\"><span style=\"font-size: 10px;color: #999999;font-family: 'Montserrat Light', sans-serif;\">Copyright © Crypto Ventures LLC 2017. All Rights Reserved</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!--[if gte mso 9]>
                </td>
                </tr>
                </table>
                <![endif]-->
                <!-- // END TEMPLATE -->
            </td>
        </tr>
    </table>
</center>
</body>
</html>";
    }
    
    
//    echo json_encode($response);

}


$required = array(
    'token'
);

NvooyUtils::onSetAndEmptyCheckHandler($_GET, $required, $required, "onSuccessHandler", "onEmptyHandler", "onNotSetHandler", true);