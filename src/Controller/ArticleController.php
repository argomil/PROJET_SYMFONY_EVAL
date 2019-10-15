<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
     * @Route("/articles", name="articles_liste")
     */
    public function listeArticles(ArticleRepository $repo)
    {
        //chercher l'ensemble des articles et on le stock
        $articles=$repo->findAll();
        return $this->render('article/index.html.twig', [
            'articles' => $articles //on va le donner dans twig
        ]);
    }

    /**
     * @Route("/article/{id}", name="article_affiche")
     */
    public function afficheArticle(Article $article)
    {
        return $this->render('article/afficheArticle.html.twig', [
            'article' => $article
        ]);
    }
        /**
     * @Route("./", name="menu_page")
     */
    public function Menu()
    {
        return $this->render('article/index.html.twig');
    }
}
