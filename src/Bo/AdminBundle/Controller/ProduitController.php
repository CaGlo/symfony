<?php

namespace Bo\AdminBundle\Controller;

use Bo\AdminBundle\Entity\Produit;
use Bo\AdminBundle\Entity\ProduitCategorie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Mapping as ORM;


/**
 * ProduitController
 *
 * @ORM\HasLifecycleCallbacks()
 */

class ProduitController extends Controller {

    
    
    /* ******* PRODUITS  ACTION ******* */
        
    /**
     * @Route("/produits", name="admin.produits");
     * @Template()
     */
    public function produitsAction() {
        $em = $this->getDoctrine()->getManager();
        
        //$produits=$em->getRepository('BoAdminBundle:Produit')->findAll();
        $query = $em->getRepository('BoAdminBundle:Produit')->createQueryBuilder('p')
                ->orderBy('p.prix', 'ASC');
        $produits = $query->getQuery()->execute();
                
        return array(
            'produits' => $produits
        );
    }

    
    
    /* ******* PRODUIT_FIXTURES ACTION ******* */
    
    /**
     * @Route("/produit_fixtures", name="admin.produit_fixtures")
     * @Template()
     */
    public function produit_fixturesAction() {
        $em = $this->getDoctrine()->getManager();

        for ($i = 0; $i < 3; $i++) {
            $produit = new Produit();
            $produit->setNom('test' . $i);
            $produit->setPrix('' . $i);
            $produit->setDescription('produit ' . $i);

            $em->persist($produit);
        }

        $em->flush();

        $this->get('session')->getFlashBag()->add(
                'notice', 'Insertion de 3 produits OK !'
        );

        return $this->redirect($this->generateUrl('admin.produits'));
    }

    
    
    
    /* ******* PRODUIT_FIXTURES 2 ACTION ******* */
    
    
    /**
     * @Route("/produit_fixtures2", name="admin.produit_fixtures2")
     * @Template()
     */
    public function produit_fixtures2Action() {
        
        /* ******* Instanciation de l'Entity Manager ******* */
        
        $em = $this->getDoctrine()->getManager();
        
        /* ******* Instanciation des objets PRODUIT et CATEGOTRIE ******* */
        
        $pro = new Produit();
        $cat = new ProduitCategorie();
       
        /* ******* Enregistrement de PRODUIT ******* */
        
        $pro->setNom('legolas');
        $pro->setPrix('100');
        $pro->setDescription('lego legolas');
        $pro->setProduitCategorie($cat);
       
        /* ******* Enregistrement de CATEGORIE ******* */
       
        $cat->setNom('lego');
        $cat->setDescription('Jouet');
        
        /* ******* Renseignement et exécution des requêtes ******* */
        
        $em->persist($pro);
        $em->persist($cat);
        $em->flush();
        
        /* ******* ENVOI MESSAGE FLASH ******* */
        
        $this->get('session')->getFlashBag()->add(
                'notice', 'Insertion de produit et catégorie OK !'
        );
        
        /* ******* RETURN AVEC REDIRECTION ******* */

        return $this->redirect($this->generateUrl('admin.produits'));
    }
    
    
    
    
    
    /* ******* PRODUIT_NEW ACTION ******* */
    
    
    /**
     * @Route("/produit_new", name="admin.produit_new")
     * @Template()
     */
    
//    public function produit_newAction()
//    {
//        /* ******* Instanciation de l'Entity Manager ******* */
//        
//        $request = $this->getRequest();
//        $em = $this->getDoctrine()->getManager();
//        
//        /* ******* Instanciation de PRODUIT ******* */
//        
//        $produit = new Produit();
//        
//        /* ******* Déclaration FORMULAIRE / CHAMPS ******* */
//        
//        $form = $this->createFormBuilder($produit)
//                ->setMethod('POST')
//                ->setAction($this->generateUrl('admin.produit_new'))
//                ->setRequired(false)
//                ->add('nom', 'text', array('label' => 'nom'))
//                ->add('prix', 'text', array('label' => 'prix'))
//                ->add('description', 'textarea', array('label' => 'description'))
//                ->add('Enregistrer', 'submit')
//                ->getForm();
//        
//        $form->handleRequest($request);
//        
//         // Vérifie si tous les champs sont renseignés
//        // ET que la péthode POST est respéctée
//        if($form->isValid())
//        {
//            $em->persist($produit);
//            $em->flush();
//            
//            return $this->redirect($this->generateUrl('admin.produits'));
//        }
//        
//        return array('form' => $form->createView());
//    }
    
    
    /* ******* PRODUIT_DELETE ACTION ******* */
    
    
    /**
     * @Route("/produit_delete/{id}", name="admin.produit_delete")
     * @Template()
     */
    
    public function produit_deleteAction($id)
    {
        
        /* ******* Instanciation de l'Entity Manager ******* */
        $em = $this->getDoctrine()->getManager();
        
         /* ******* SELECT du produit avec l'id = $id  ******* */
        $produit = $em->getRepository('BoAdminBundle:Produit')->find($id);
        
         /* ******* Push dans l'EM la requête remove et le flush pour exécuter cette requête  ******* */
        $em->remove($produit);
        $em->flush();
        
        /* ******* ENVOI MESSAGE FLASH ******* */
        
        $this->get('session')->getFlashBag()->add(
                'notice', 'Suppression OK !'
        );
        
        /* ******* RETURN AVEC REDIRECTION ******* */

        return $this->redirect($this->generateUrl('admin.produits'));
        
    }
    
    
    
     /* ******* PRODUIT_FORM ACTION REMPLACE EDIT ET NEW ******* */
    
    
    /**
     * @Route("/produit_form/{id}", name="admin.produit_form", defaults={"id" = "0"})
     * @Template()
     */
    
    public function produit_formAction($id)
    {
        /* ******* Instanciation de l'Entity Manager ******* */
        
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        
        
        if($id>0)
        {
            /* ******* SELECT du produit avec l'id = $id  ******* */
            $produit = $em->getRepository('BoAdminBundle:Produit')->find($id);
            
        }else   /* ******* Instanciation de PRODUIT SI Création (id=0)******* */
        {
            $produit = new Produit();
        }
        
        
        /* ******* Déclaration FORMULAIRE / CHAMPS ******* */
        
        $form = $this->createFormBuilder($produit)
                ->setMethod('post')
                ->setAction($this->generateUrl('admin.produit_form', array('id' => $id)))
                ->add('nom', 'text', array('label' => 'nom'))
                ->add('prix', 'text', array('label' => 'prix'))
                ->add('description', 'textarea', array('label' => 'description'))
                ->add('isDisponible', 'checkbox', array(
                    'label' => 'isDisponible',
                    'required' => false,
                ))
                ->add('fileImgUpload','file')
                ->add('produitCategorie', 'entity', array('class' => 'BoAdminBundle:ProduitCategorie',
                    'property' => 'nom',
                    ))
                ->add('Enregistrer', 'submit')
                ->getForm();
        
        $form->handleRequest($request);
        
         // Vérifie si tous les champs sont renseignés
        // ET que la péthode POST est respéctée
        if($form->isValid())
        {
            $produit->uploadFiles();
            $em->persist($produit);
            $em->flush();
            
            return $this->redirect($this->generateUrl('admin.produits'));
        }
        
        return array('form' => $form->createView());
    }
    
    

}
