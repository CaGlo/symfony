<?php

namespace Bo\AdminBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Iban;
use Symfony\Component\Validator\Constraints\Image; 
use Bo\AdminBundle\Mailer\Contact;
/**
 * Contact controller.
 *
 * 
 */
class ContactController extends Controller {
    
    
      /* ******* FORM_CONTACT ACTION ******* */
    
    
    /**
     * @Route("/form_contact", name="admin.form_contact")
     * @Template()
     */
    public function form_contactAction(Request $request)
    {
         $defaultData = array('message' => 'Type your message here');
        $form = $this->createFormBuilder($defaultData)
                ->add('Civilite', 'choice', array(
                        'choices' => array('m' => 'Homme', 'f' => 'Femme'),
                        'required' => true,
                        'constraints' => new NotBlank()
                    ))
                ->add('Nom', 'text', array('constraints' => new Length(array('min' =>3 ))))
                ->add('Prenom', 'text', array('constraints' => new Length(array('min' =>3 ))))
                ->add('Email', 'email', array('constraints' => new Length(array('min' =>5 ))))
                ->add('Iban', 'text', array('constraints' => new Iban()))
                ->add('Message', 'textarea')
                ->add('fichierJoint', 'file', array('constraints' => array(new NotBlank(), new Image())))
                ->add('Envoyer', 'submit')
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
             // Les données sont un tableau avec les clés 

            $data = $form->getData();
            
            $subject = "Email de".$data['Civilite']." ".$data['Prenom']." ".$data['Nom'];
            $emailFrom = $data['Email'];
            $emailTo = "caglar.aslan89@gmail.com";
            $message = $data['Message'];
            $dataFile = $data['fichierJoint'];
            $path = $this->get('kernel')->getRootDir() . '/../web/uploads/';
            $dataFile->move($path, $dataFile->getClientOriginalName());
            $fileAttachement = $path . $dataFile->getClientOriginalName();
            
            
            $mailerContact = $this->get("Mailer_CaGlo");
            $mailerContact->prepareMail($subject, $emailFrom, $emailTo, $message, $fileAttachement);

            if($mailerContact->send()){
                return $this->redirect($this->generateUrl('admin.email_ok'));
            }
            else{
                throw $this->createNotFoundException('email non envoyé');
            }            
        }
        
        return array('form' => $form->createView());
    }
    
    
    
     /* ******* EMAIL_OK ACTION ******* */
    
    
    /**
     * @Route("/email_ok", name="admin.email_ok")
     * @Template()
     */
    public function email_okAction()
    {
        $this->get('session')->getFlashBag()->add(
                'notice', 'Votre e-mail a bien été envoyé !'
        );

       return array();
       
    }
}
