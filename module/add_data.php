<?php
ob_start();
session_start();
require '../config/config.php';
require '../vendor/ultramsg/whatsapp-php-sdk/ultramsg.class.php'; 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';


function tambah($data)
{
    global $conn;
    
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $keperluan = $_POST['keperluan'];
    
    // WhatsApp API
    $token="Masukkan ID_Token";
    $instance_id="Masukkan ID_Instance"; 
    $client = new UltraMsg\WhatsAppApi($token,$instance_id);

    // Client API Whtasapp
    $to = $no_hp; 
    $body = "Assalamualaikum kak, Saya $nama_lengkap, ingin $keperluan"; 
    $client->sendChatMessage($to,$body);

    //PHPMailer
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;
    $mail->Username   = 'Masukkan Email';                     
    $mail->Password   = 'Password Email';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;    

    //Recipients
    $mail->setFrom('Email Penigirm', 'Nama Email Pengirim'); // Email Pengirim
    $mail->addAddress($email);  // Email Penerima

    //Content
    $mail->isHTML(true);                               
    $mail->Subject = 'Registrasi Berhasil!';
    $mail->Body    = '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no" />
    <style type="text/css">
    body,
    table,
    td {
        font-family: Helvetica, Arial, sans-serif !important;
    }

    .ExternalClass {
        width: 100%;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
        line-height: 150%;
    }

    a {
        text-decoration: none;
    }

    * {
        color: inherit;
    }

    a[x-apple-data-detectors],
    u+#body a,
    #MessageViewBody a {
        color: inherit;
        text-decoration: none;
        font-size: inherit;
        font-family: inherit;
        font-weight: inherit;
        line-height: inherit;
    }

    img {
        -ms-interpolation-mode: bicubic;
    }

    table:not([class^="s-"]) {
        font-family: Helvetica, Arial, sans-serif;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        border-spacing: 0px;
        border-collapse: collapse;
    }

    table:not([class^="s-"]) td {
        border-spacing: 0px;
        border-collapse: collapse;
    }

    @media screen and (max-width: 600px) {

        .w-lg-48,
        .w-lg-48>tbody>tr>td {
            width: auto !important;
        }

        .w-full,
        .w-full>tbody>tr>td {
            width: 100% !important;
        }

        .w-16,
        .w-16>tbody>tr>td {
            width: 64px !important;
        }

        .p-lg-10:not(table),
        .p-lg-10:not(.btn)>tbody>tr>td,
        .p-lg-10.btn td a {
            padding: 0 !important;
        }

        .p-2:not(table),
        .p-2:not(.btn)>tbody>tr>td,
        .p-2.btn td a {
            padding: 8px !important;
        }

        .pr-4:not(table),
        .pr-4:not(.btn)>tbody>tr>td,
        .pr-4.btn td a,
        .px-4:not(table),
        .px-4:not(.btn)>tbody>tr>td,
        .px-4.btn td a {
            padding-right: 16px !important;
        }

        .pl-4:not(table),
        .pl-4:not(.btn)>tbody>tr>td,
        .pl-4.btn td a,
        .px-4:not(table),
        .px-4:not(.btn)>tbody>tr>td,
        .px-4.btn td a {
            padding-left: 16px !important;
        }

        .pr-6:not(table),
        .pr-6:not(.btn)>tbody>tr>td,
        .pr-6.btn td a,
        .px-6:not(table),
        .px-6:not(.btn)>tbody>tr>td,
        .px-6.btn td a {
            padding-right: 24px !important;
        }

        .pl-6:not(table),
        .pl-6:not(.btn)>tbody>tr>td,
        .pl-6.btn td a,
        .px-6:not(table),
        .px-6:not(.btn)>tbody>tr>td,
        .px-6.btn td a {
            padding-left: 24px !important;
        }

        .pt-8:not(table),
        .pt-8:not(.btn)>tbody>tr>td,
        .pt-8.btn td a,
        .py-8:not(table),
        .py-8:not(.btn)>tbody>tr>td,
        .py-8.btn td a {
            padding-top: 32px !important;
        }

        .pb-8:not(table),
        .pb-8:not(.btn)>tbody>tr>td,
        .pb-8.btn td a,
        .py-8:not(table),
        .py-8:not(.btn)>tbody>tr>td,
        .py-8.btn td a {
            padding-bottom: 32px !important;
        }

        *[class*="s-lg-"]>tbody>tr>td {
            font-size: 0 !important;
            line-height: 0 !important;
            height: 0 !important;
        }

        .s-4>tbody>tr>td {
            font-size: 16px !important;
            line-height: 16px !important;
            height: 16px !important;
        }

        .s-6>tbody>tr>td {
            font-size: 24px !important;
            line-height: 24px !important;
            height: 24px !important;
        }
    }
    </style>
</head>

<body class="bg-red-100" style="
      outline: 0;
      width: 100%;
      min-width: 100%;
      height: 100%;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      font-family: Helvetica, Arial, sans-serif;
      line-height: 24px;
      font-weight: normal;
      font-size: 16px;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      color: #000000;
      margin: 0;
      padding: 0;
      border-width: 0;
    " bgcolor="#f8d7da">
    <table class="bg-red-100 body" valign="top" role="presentation" border="0" cellpadding="0" cellspacing="0" style="
        outline: 0;
        width: 100%;
        min-width: 100%;
        height: 100%;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        font-family: Helvetica, Arial, sans-serif;
        line-height: 24px;
        font-weight: normal;
        font-size: 16px;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: #000000;
        margin: 0;
        padding: 0;
        border-width: 0;
      " bgcolor="#f8d7da">
        <tbody>
            <tr>
                <td valign="top" style="line-height: 24px; font-size: 16px; margin: 0" align="left" bgcolor="#f8d7da">
                    <table class="container" role="presentation" border="0" cellpadding="0" cellspacing="0"
                        style="width: 100%">
                        <tbody>
                            <tr>
                                <td align="center" style="
                      line-height: 24px;
                      font-size: 16px;
                      margin: 0;
                      padding: 0 16px;
                    ">
                                    <table align="center" role="presentation" border="0" cellpadding="0" cellspacing="0"
                                        style="width: 100%; max-width: 600px; margin: 0 auto">
                                        <tbody>
                                            <tr>
                                                <td style="
                              line-height: 24px;
                              font-size: 16px;
                              margin: 0;
                            " align="left">
                                                    <table class="s-6 w-full" role="presentation" border="0"
                                                        cellpadding="0" cellspacing="0" style="width: 100%"
                                                        width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td style="
                                      line-height: 24px;
                                      font-size: 24px;
                                      width: 100%;
                                      height: 24px;
                                      margin: 0;
                                    " align="left" width="100%" height="24">
                                                                    &#160;
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <img class="w-16"
                                                        src="https://assets.bootstrapemail.com/logos/light/square.png"
                                                        style="
                                height: auto;
                                line-height: 100%;
                                outline: none;
                                text-decoration: none;
                                display: block;
                                width: 64px;
                                border-style: none;
                                border-width: 0;
                              " width="64" />
                                                    <table class="s-6 w-full" role="presentation" border="0"
                                                        cellpadding="0" cellspacing="0" style="width: 100%"
                                                        width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td style="
                                      line-height: 24px;
                                      font-size: 24px;
                                      width: 100%;
                                      height: 24px;
                                      margin: 0;
                                    " align="left" width="100%" height="24">
                                                                    &#160;
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="space-y-4">
                                                        <h1 class="text-4xl fw-800" style="
                                  padding-top: 0;
                                  padding-bottom: 0;
                                  font-weight: 800 !important;
                                  vertical-align: baseline;
                                  font-size: 36px;
                                  line-height: 43.2px;
                                  margin: 0;
                                " align="left">
                                                            Terimakasih telah melakukan Registrasi, '. $nama_lengkap.'
                                                        </h1>
                                                        <table class="s-4 w-full" role="presentation" border="0"
                                                            cellpadding="0" cellspacing="0" style="width: 100%"
                                                            width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="
                                        line-height: 16px;
                                        font-size: 16px;
                                        width: 100%;
                                        height: 16px;
                                        margin: 0;
                                      " align="left" width="100%" height="16">
                                                                        &#160;
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p class="" style="
                                  line-height: 24px;
                                  font-size: 16px;
                                  width: 100%;
                                  margin: 0;
                                " align="left">
                                                            Perkiraan waktu pengiriman pesanan Anda adalah Pukul 08.12.
                                                        </p>
                                                        <table class="s-4 w-full" role="presentation" border="0"
                                                            cellpadding="0" cellspacing="0" style="width: 100%"
                                                            width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="
                                        line-height: 16px;
                                        font-size: 16px;
                                        width: 100%;
                                        height: 16px;
                                        margin: 0;
                                      " align="left" width="100%" height="16">
                                                                        &#160;
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <table class="s-6 w-full" role="presentation" border="0"
                                                        cellpadding="0" cellspacing="0" style="width: 100%"
                                                        width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td style="
                                      line-height: 24px;
                                      font-size: 24px;
                                      width: 100%;
                                      height: 24px;
                                      margin: 0;
                                    " align="left" width="100%" height="24">
                                                                    &#160;
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="card rounded-3xl px-4 py-8 p-lg-10"
                                                        role="presentation" border="0" cellpadding="0" cellspacing="0"
                                                        style="
                                border-radius: 24px;
                                border-collapse: separate !important;
                                width: 100%;
                                overflow: hidden;
                                border: 1px solid #e2e8f0;
                              " bgcolor="#ffffff">
                                                        <tbody>
                                                            <tr>
                                                                <td style="
                                      line-height: 24px;
                                      font-size: 16px;
                                      width: 100%;
                                      border-radius: 24px;
                                      margin: 0;
                                      padding: 40px;
                                    " align="left" bgcolor="#ffffff">
                                                                    <h3 class="text-center" style="
                                        padding-top: 0;
                                        padding-bottom: 0;
                                        font-weight: 500;
                                        vertical-align: baseline;
                                        font-size: 28px;
                                        line-height: 33.6px;
                                        margin: 0;
                                      " align="center">
                                                                        Detail Registrasi
                                                                    </h3>
                                                                    <p class="text-center text-muted" style="
                                        line-height: 24px;
                                        font-size: 16px;
                                        color: #718096;
                                        width: 100%;
                                        margin: 0;
                                      " align="center">
                                                                        www.infinityprojectproperty.com
                                                                    </p>
                                                                    <table class="p-2 w-full" border="0" cellpadding="0"
                                                                        cellspacing="0" style="width: 100%"
                                                                        width="100%">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="
                                              line-height: 24px;
                                              font-size: 16px;
                                              width: 100%;
                                              margin: 0;
                                              padding: 8px;
                                            " align="left" width="100%">
                                                                                    Nama Lengkap
                                                                                </td>
                                                                                <td class="text-right" style="
                                              line-height: 24px;
                                              font-size: 16px;
                                              width: 100%;
                                              margin: 0;
                                              padding: 8px;
                                            " align="right" width="100%">
                                                                                    '. $nama_lengkap.'
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="
                                              line-height: 24px;
                                              font-size: 16px;
                                              width: 100%;
                                              margin: 0;
                                              padding: 8px;
                                            " align="left" width="100%">
                                                                                    Email
                                                                                </td>
                                                                                <td class="text-right" style="
                                              line-height: 24px;
                                              font-size: 16px;
                                              width: 100%;
                                              margin: 0;
                                              padding: 8px;
                                            " align="right" width="100%">
                                                                                    '. $email.'
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="
                                              line-height: 24px;
                                              font-size: 16px;
                                              width: 100%;
                                              margin: 0;
                                              padding: 8px;
                                            " align="left" width="100%">
                                                                                    No.Handphone
                                                                                </td>
                                                                                <td class="text-right" style="
                                              line-height: 24px;
                                              font-size: 16px;
                                              width: 100%;
                                              margin: 0;
                                              padding: 8px;
                                            " align="right" width="100%">
                                                                                    '. $no_hp.'
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="
                                              line-height: 24px;
                                              font-size: 16px;
                                              width: 100%;
                                              margin: 0;
                                              padding: 8px;
                                            " align="left" width="100%">
                                                                                    Alamat
                                                                                </td>
                                                                                <td class="text-right" style="
                                              line-height: 24px;
                                              font-size: 16px;
                                              width: 100%;
                                              margin: 0;
                                              padding: 8px;
                                            " align="right" width="100%">
                                                                                    '. $alamat.'
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="fw-700 border-top" style="
                                              line-height: 24px;
                                              font-size: 16px;
                                              border-top-width: 1px !important;
                                              border-top-color: #e2e8f0 !important;
                                              border-top-style: solid !important;
                                              width: 100%;
                                              font-weight: 700 !important;
                                              margin: 0;
                                              padding: 8px;
                                            " align="left" width="100%">
                                                                                    Keperluan
                                                                                </td>
                                                                                <td class="fw-700 text-right border-top"
                                                                                    style="
                                              line-height: 24px;
                                              font-size: 16px;
                                              border-top-width: 1px !important;
                                              border-top-color: #e2e8f0 !important;
                                              border-top-style: solid !important;
                                              width: 100%;
                                              font-weight: 700 !important;
                                              margin: 0;
                                              padding: 8px;
                                            " align="right" width="100%">
                                                                                    '. $keperluan.'
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table class="s-6 w-full" role="presentation"
                                                                        border="0" cellpadding="0" cellspacing="0"
                                                                        style="width: 100%" width="100%">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="
                                              line-height: 24px;
                                              font-size: 24px;
                                              width: 100%;
                                              height: 24px;
                                              margin: 0;
                                            " align="left" width="100%" height="24">
                                                                                    &#160;
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table class="hr" role="presentation" border="0"
                                                                        cellpadding="0" cellspacing="0"
                                                                        style="width: 100%">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="
                                              line-height: 24px;
                                              font-size: 16px;
                                              border-top-width: 1px;
                                              border-top-color: #e2e8f0;
                                              border-top-style: solid;
                                              height: 1px;
                                              width: 100%;
                                              margin: 0;
                                            " align="left"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table class="s-6 w-full" role="presentation"
                                                                        border="0" cellpadding="0" cellspacing="0"
                                                                        style="width: 100%" width="100%">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="
                                              line-height: 24px;
                                              font-size: 24px;
                                              width: 100%;
                                              height: 24px;
                                              margin: 0;
                                            " align="left" width="100%" height="24">
                                                                                    &#160;
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p style="
                                        line-height: 24px;
                                        font-size: 16px;
                                        width: 100%;
                                        margin: 0;
                                      " align="left">
                                                                        If you have any questions, contact us
                                                                        <a href="https://api.whatsapp.com/send?phone=6282296709235"
                                                                            style="color: #0d6efd"><span
                                                                                class="__cf_email__"
                                                                                data-cfemail="c880a1b88ba7bab888adb0a9a5b8a4ade6aba7a5">Infinity
                                                                                Project Property</span></a>.
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="s-6 w-full" role="presentation" border="0"
                                                        cellpadding="0" cellspacing="0" style="width: 100%"
                                                        width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td style="
                                      line-height: 24px;
                                      font-size: 24px;
                                      width: 100%;
                                      height: 24px;
                                      margin: 0;
                                    " align="left" width="100%" height="24">
                                                                    &#160;
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--[if (gte mso 9)|(IE)]>
                    </td>
                  </tr>
                </tbody>
              </table>
                    <![endif]-->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
</body>

</html>
    ';
    $mail->send();

    $query = "INSERT INTO tb_regis
    			VALUES 
    			('','$nama_lengkap','$email','$no_hp','$alamat','$keperluan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Data Menu
if (isset($_POST["regis"])) {

    if (tambah($_POST) > 0) {
        $_SESSION['status'] = "Selamat Anda";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Registrasi!";
        header("Location: ../success.php");
    } else {
        $_SESSION['status'] = "Maaf Registrasi";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal!";
        header("Location: index.php");
    }
}