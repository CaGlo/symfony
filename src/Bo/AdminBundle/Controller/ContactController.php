<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Validator\Constraint\Length;
use Symfony\Component\Validator\Constraint\NotBlank;
use Symfony\Component\Validator\Constraint\Iban;
use Symfony\Component\Validator\Constraint\Image;
/**
 * Contact controller.
 *
 * 
 */
class ContactController {
    
    
      /* ******* FORM_CONTACT ACTION ******* */
    
    
    /**
     * @Route("/form_contact", name="admin.form_contact")
     * @Template()
     */
    public function form_contactAction(Request $request)
    {
         $defaultData = array('message' => 'Type your message here');
        $form = $this->createFormBuilder($defaultData)
                ->add('Civilité', 'choice', array(
                        'choices' => array('m' => 'Homme', 'f' => 'Femme'),
                        'expanded' => true,
                        'multiple' => false,
                        'constraints' => new NotBlank()
                    ))
                ->add('Nom', 'text', array('constraints' => new Length(array('min' =>12 ))))
                ->add('Prenom', 'text', array('constraints' => new Length(array('min' =>12 ))))
                ->add('Email', 'email', array('constraints' => new Length(array('min' =>100 ))))
                ->add('Iban', 'text', array('constraints' => new Iban()))
                ->add('Message', 'textarea', array('constraints' => new Image()))
                ->add('Fichier joint', 'file')
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
             // Les données sont un tableau avec les clés 
            
            $data = $form->getData();
            
            $dataSubject = "Email de".$data['Civilité']." ".$data['Prenom']." ".$data['Nom']
        }

    // ... affiche le formulaire
    }
    
}
