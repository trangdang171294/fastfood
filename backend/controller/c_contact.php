<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/1/2017
 * Time: 10:11 AM
 */
class c_contact
{
    public $ContactModel;
    var $message=null;

    public function __construct()
    {
        $this->ContactModel=new m_contact();
    }

    public function Send_contact()
    {
        if(isset($_POST['btnContact']))
        {
            $name=$_POST['form_name'];
            $email=$_POST['form_email'];
            $phone=$_POST['form_phone'];
            $title=$_POST['form_subject'];
            $content=$_POST['form_message'];
            if($this->ContactModel->insert_contact($name,$email,$phone,$title,$content)) {
                echo "<script> alert('Cảm ơn bạn đã gửi tin nhắn cho chúng tôi. Chúng tôi sẽ phản hồi trong thời gian sớm nhất!') </script>";
                echo "<script> window.location = 'index.php' </script>";
            }
        }
        include_once ("site/contact.php");
    }

    public function Hienthi_contact()
    {
        $contact_list= $this->ContactModel->getallContact();
        $thongbao=$this->message;
        include_once ("view/vw_qlylienhe.php");
    }

    public function Xemct_contact()
    {
        if($MLH=isset($_REQUEST['MLH']) ? $_REQUEST['MLH'] : '0')
        {
            $contact= $this->ContactModel->getContactbyID($MLH);
            include_once ("view/vw_CTLH.php");
        }
    }
    public function Xoa_contact()
    {
        if($MLH=isset($_REQUEST['MLH']) ? $_REQUEST['MLH'] : '0')
        {
            if($this->ContactModel->delete_contact($MLH))
            {
                $this->message="Đã xóa!";
            }
            else
                $this->message="Không thể xóa!";
            $this->Hienthi_contact();
            return;
        }
    }

    public function reply_email()
    {

        if($MLH=isset($_REQUEST['MLH']) ? $_REQUEST['MLH'] : '0')
        {
            $contact= $this->ContactModel->getContactbyID($MLH);
            if(isset($_POST['btnsend']))
            {
                $mail = new PHPMailer;
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'trangdang171294@gmail.com';                 // SMTP username
                $mail->Password = 'success17121994';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

                $mail->setFrom('trankien13288@gmail.com', 'Mailer');
                $mail->addAddress($contact->Email, 'Kien Dang');     // Add a recipient
                $mail->setLanguage('vi', '/optional/path/to/language/directory/');
                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = $_POST['txttitle'];
                $mail->Body    = $_POST['txtcontent'];
                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    $this->ContactModel->EditContac(1,$MLH);
                   $this->message="đã gửi mail";
                   $this->Hienthi_contact();

                }
                return;
            }
            include_once ('view/send_email.php');
        }
    }

//    public function Sua_contact()
//    {
//        $MLH=isset($_REQUEST['MLH']) ? $_REQUEST['MLH'] : '0';
//        $contact= $this->ContactModel->getContactbyID($MLH);
//        include_once ("view/vw_updateConatct.php");
//    }


}