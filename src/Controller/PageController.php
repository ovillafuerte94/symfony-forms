<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{
    #[Route('/contact-v1', methods: ['GET', 'POST'])]
    public function contactV1(Request $request): Response
    {
        $form = $this->createFormBuilder()
            ->add('email', TextType::class)
            ->add('message', TextareaType::class, [
                'label' => 'Comment, suggestion or message'
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Sent'
            ])
            ->setMethod('POST')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            dd($form->getData(), $request);
        }

        return $this->render('page/contact-v1.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/contact-v2', methods: ['GET', 'POST'])]
    public function contactV2(Request $request): Response
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            dd($form->getData());
        }

        return $this->render('page/contact-v2.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/contact-v3', methods: ['GET', 'POST'])]
    public function contactV3(Request $request): Response
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            dd($form->getData());
        }

        return $this->render('page/contact-v3.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
