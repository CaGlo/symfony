<?php

namespace Bo\AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Bo\AdminBundle\Entity\ProduitCategorie;

/**
 * ProduitCategorie controller.
 *
 * @Route("/produitcategorie")
 */
class ProduitCategorieController extends Controller
{

    /**
     * Lists all ProduitCategorie entities.
     *
     * @Route("/", name="produitcategorie")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BoAdminBundle:ProduitCategorie')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a ProduitCategorie entity.
     *
     * @Route("/{id}", name="produitcategorie_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BoAdminBundle:ProduitCategorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProduitCategorie entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
}
