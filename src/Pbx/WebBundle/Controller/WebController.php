<?php

/**
 * This file is part of PBX.
 *
 * (c) Aaron Bolanos <aaron@bolanos.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pbx\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller,
    Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\Response,
    FOS\UserBundle\Model\UserInterface,
    Sensio\Bundle\FrameworkExtraBundle\Configuration\Template,
    Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
    Sensio\Bundle\FrameworkExtraBundle\Configuration\Method,
    Pbx\WebBundle\Entity\User;


/**
 * @Route("/")
 */
class WebController extends Controller
{
    protected $data;

    public function __construct()
    {
        // Load Default Data
        $this->data = array(
            'title' => 'PBX Project',
        );
    }

    /**
     * @Route("/", name="pbx_web_home")
     * @Template()
     */
    public function homeAction(Request $request)
    {
        $this->data['title'] = 'Home';
        return $this->render('PbxWebBundle:Web:home.html.twig', $this->data);

    }

}