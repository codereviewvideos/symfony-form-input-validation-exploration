<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\WidgetType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(WidgetType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dump('VALID');
        }

        if ($form->isSubmitted() && false === $form->isValid()) {
            dump('INVALID');
        }

        return $this->render('default/index.html.twig', [
            'form' => $form->createView()
        ]);

    }
}
