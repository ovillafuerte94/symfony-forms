<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/contact-v1', methods: ['GET', 'POST'])]
    public function contactV1(): Response
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

        return $this->render('page/contact-v1.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
