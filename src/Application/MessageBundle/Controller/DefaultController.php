<?php

namespace Application\MessageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@ApplicationMessage/Default/index.html.twig');
    }
}
