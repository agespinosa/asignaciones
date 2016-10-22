<?php
namespace AGE\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * @Route("/user/index/", name="age_user_index")
     */
    public function indexAction()
    {
        return new Response('Bienvenidos al modulo de usuarios');
    }
    /**
     * @Route("/user/articulo/{pagina}", name="age_user_articulo", requirements={"pagina": "\d+"})
     */
    public function articuloAction($pagina)
    {
        return new Response('este es mi articulo :'. $pagina);
    }
}
