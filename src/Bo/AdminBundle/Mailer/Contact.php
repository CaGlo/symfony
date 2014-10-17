<?php
namespace Bo\AdminBundle\Mailer;
/**
 * Description of Contact
 *
 * @author Administrateur
 */
class Contact {
    
    protected $mailer;
    protected $body;
    
    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
    
    public function prepareMail($subject,$emailFrom,$emailTo,$message,$fileAttachement)
    {
        $this->body = \Swift_Message::newInstance()
                    ->setSubject($subject)
                    ->setFrom($emailFrom)
                    ->setTo($emailTo)
                    ->setBody($message)
                    ->attach(\Swift_Attachment::fromPath($fileAttachement))
        ;
    }
    
    public function send()
    {
        if($this->mailer->send($this->body))
        {
            return true;
        }
        return false;
    }
}
