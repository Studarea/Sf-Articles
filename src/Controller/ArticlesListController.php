<?php

// namespace = espace de nom
// c'est le chemin du fichier actuel (App = dossier SRC et Controller = dossier Controller)

namespace App\Controller;

// j'appelle la classe ArticlesHelper (use), qui me permet de charger le tableau (array) des Articles
use App\Services\ArticlesHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class ArticlesListController extends AbstractController

{
    /**
     * @Route("/articles", name="articles_page")
     *
     */

    public function articles()
    {

        /* je créer un objet à partir de la classe : variable qui représente la classe */
        /* (à partir de cette variable je peux entrer dans la classe) */
        $ArticlesHelper = new ArticlesHelper();

        /* je vais chercher ce qu'il y a dans la classe : comme une clé -> */
        $articles = $ArticlesHelper->allArticles();


        /* Retourne le resultat de la méthode, ciblant le fichier .html.twig
        Renvoi un fichier twig compilé pour le HTML */
        return $this->render('articleslist.html.twig', [

            // ici je fait le lien avec la variable à mon fichier html.twig'
            'articles' => $articles
        ]);

    }
}



?>