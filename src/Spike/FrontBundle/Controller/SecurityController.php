<?php
namespace Spike\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    /**
     * @Template('SpikeFrontBundle:Security:login.html.twig')
     */
    public function loginAction()
    {

    }
}