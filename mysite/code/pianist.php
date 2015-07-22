<?php
//mysite/code/Pianist.php
class Pianist extends DataExtension{
 
    //Other code from above here
 
    function onBeforeWrite() { 
 
        if (!$this->owner->exists()) {
            $email = new Email(); 
            //$data = $this->owner->getAllFields();
 
            $toAddress = Email::getAdminEmail();
            $email->setTo($toAddress); 
 
            $email->setSubject('New Pianist has just registered'); 
            $email->setFrom($data['Email']);
 
            //$email->setTemplate('NewPianistEmail');
            //$email->populateTemplate($data);
 
            $email->send();
        }
    }
 
}