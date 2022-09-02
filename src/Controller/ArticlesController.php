<?php

namespace App\Controller;

use App\Repository\ArticlesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    public function __construct(ArticlesRepository $repo)
    {
        $this->repo = $repo;
    }

    #[Route('/article', name: 'app_articles')]
    public function index(): Response
    {
        $articles = $this->repo->findAll();
        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/articles/{id}', name: 'articles.show', methods: ['GET'])]
    public function show($id, ArticlesRepository $ARRepo): Response
    {
        $articles = $this->repo->find($id);

        return $this->render('articles/show.html.twig', ['article' => $articles]);
    }
}
