<?php

namespace App\Services;



class ArticlesHelper{


    public $articles = [
        [
            'id' => 1,
            'title' => 'Le gouvernement a trois mois pour prouver qu’il respecte ses engagements climatiques, une première en France',
            'content' => 'Le Conseil d’Etat a donné ce délai à l’exécutif pour « justifier que la trajectoire de réduction à horizon 2030 pourra être respectée ». Une décision « historique » pour les ONG.',
            'image' => 'https://img.lemde.fr/2020/11/19/0/0/4928/3280/688/0/60/0/e96ba3d_883405059-000-8vg8p6.jpg'
        ],
        [
            'id' => 2,
            'title' => 'L’interdiction du CBD en France jugée illégale par la justice européenne',
            'content' => 'La décision de justice conclut que cette molécule présente dans le cannabis n’a « pas d’effet psychotrope ni d’effet nocif sur la santé ». Elle devrait priver de base légale de nombreux procès en France.',
            'image' => 'https://img.lemde.fr/2017/05/24/0/613/3388/2258/576/0/60/0/9ca5088_32700-2nml3k.24wet2csor.jpg'
        ],
        [
            'id' => 3,
            'title' => '« L’être humain n’accepte plus d’être malade »',
            'content' => 'Rappelant que « le vivant est avant tout incertitude », le neurobiologiste Guy Simonnet souligne qu’une « tolérance zéro maladie » ne peut qu’être la source d’une nouvelle vulnérabilité.',
            'image' => 'https://img.lemde.fr/2020/10/26/0/0/6720/4480/688/0/60/0/43a047a_363445842-201021jbalague-lemonde-covid-bichat-soins-29.jpg'
        ],
        [
            'id' => 4,
            'title' => 'Le gouvernement a trois mois pour prouver qu’il respecte ses engagements climatiques, une première en France',
            'content' => 'Le Conseil d’Etat a donné ce délai à l’exécutif pour « justifier que la trajectoire de réduction à horizon 2030 pourra être respectée ». Une décision « historique » pour les ONG.',
            'image' => 'https://img.lemde.fr/2020/11/19/0/0/4928/3280/688/0/60/0/e96ba3d_883405059-000-8vg8p6.jpg'
        ],
        [
            'id' => 5,
            'title' => 'Des « coupures très courtes » d’électricité pourraient avoir lieu cet hiver en France',
            'content' => 'Le réseau de transport d’électricité assure disposer de leviers pour éviter des coupures, mais appelle chacun à adopter des gestes d’économies d’énergie.',
            'image' => 'https://img.lemde.fr/2020/11/19/0/0/5184/3456/688/0/60/0/05ce9ea_162988352-000-1uw2ar.jpg'
        ],
    ];

    /* je créér la méthode allArticles qui va récupérer tous les articles dans le tableau aa-rray si dessus */
    public function allArticles(){

        /* je vais chercher un élément dans la classe (lui même + la classe en elle même) */
        return $this->articles;

    }

    public function lastArticles (){
        /* je coupe la tableau des articles pour ne prendre que les 3 derniers */
        $lastarticles = array_slice($this->articles, -3);

        return $lastarticles;
    }

}

/*

// ICI LE CODE DE BENOIT

 *
/* je construis une méthode last3 pour recuperer les 3 derniers articles
public function last3(){

    // j oublie surtous pas de retourner ma variable
    return $last3article= array_slice(ArticlesHelper::articles,-3);

*/

?>