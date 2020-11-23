<?php

// namespace = espace de nom
// c'est le chemin du fichier actuel (App = dossier SRC et Controller = dossier Controller)

namespace App\Controller;

// j'appelle la classe ArticlesHelper (use), qui me permet de charger le tableau (array) des Articles
use App\Services\ArticlesHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class HomeController extends AbstractController

{
    /**
     * @Route("/", name="home_page")
     *
     */

    public function home()
    {
        /* je créer un objet à partir de la classe : variable qui représente la classe */
        /* (à partir de cette variable je peux entrer dans la classe) */
        $ArticlesHelper = new ArticlesHelper();

        /* ici je récupère les 3 derbiers artricles via la méthode lastArticles */
        /* je vais chercher ce qu'il y a dans la classe : comme une clé -> */
        $lastArticles = $ArticlesHelper->lastArticles();


        /* Retourne le resultat de la méthode, ciblant le fichier .html.twig
        Renvoi un fichier twig compilé pour le HTML */
        return $this->render('home.html.twig',
            [
                "articles" => $lastArticles
            ]);
    }

}


?>
