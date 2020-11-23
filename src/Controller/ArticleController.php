<?php

// namespace = espace de nom
// c'est le chemin du fichier actuel (App = dossier SRC et Controller = dossier Controller)

namespace App\Controller;

// j'appelle la classe ArticlesHelper (use), qui me permet de charger le tableau (array) des Articles
use App\Services\ArticlesHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class ArticleController extends AbstractController

{
    /**
     * @Route("/article/{id}", name="article_page")
     *
     */

    public function article($id)
    {
        /* je créer un objet à partir de la class : variable qui représente la classe */
        /* (à partir de cette variable je peux entrer dans la classe) */
        $ArticlesHelper = new ArticlesHelper();

        /* je créer la variable qui va appeler ma classe $ArticlesHelper et cibler ->allArticles (tout le tableau des articles)  */
        /* je vais chercher ce qu'il y a dans la classe : comme une clé -> */
        $articles = $ArticlesHelper->allArticles();

        /* je récupère un article dans le tableau des articles avec leur $id */
        $article = $articles[$id-1];


        /* Retourne le resultat de la méthode, ciblant le fichier .html.twig
        Renvoi un fichier twig compilé pour le HTML */
        return $this->render('article.html.twig', [

            'article' => $article
        ]);
    }
}


/*

// ICI LE CODE DE BENOIT

 *
 * @Route ("/article/{id}" ,name="article")
 * @param $id
 * @return Response

public function article($id):Response{

    $articles = ArticlesHelper::articles;

    $article= $articles[$id];

    return $this->render("article.html.twig",[
        "article"=> $article,
*/

?>