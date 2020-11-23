<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

// J'ai créé une base de données en modifiant la variable DATABASE_URL
// du fichier .env.local (que j'ai créé en copiant le fichier .env)
// puis en utilisant la ligne de commande doctrine:database:create

// J'ai créé une classe Book qui est une entité car elle possède l'annotation
// @ORM\Entity

/**
 * @ORM\Entity()
 */
class Book

{

    /* Exo demandé :

    Créer une table book qui contient :
    un titre, un  auteur, un nombre de pages, une date de publication,
    une indication pour savoir si le livre est en vente ou non, et un résumé

    */

    // J'ai créé autant de propriétés que de colonnes voulues dans la table
    // et j'ai mappé les propriétés avec des annotations et la classe ORM (attention
    // de ne pas oublier le use correspondant)

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;


    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $number_page;


    /**
     * @ORM\Column(type="date", length=120)
     */
    private $date;


    /**
     * @ORM\Column(type="string", length=50)
     */
    private $for_sale;


    /**
     * @ORM\Column(type="text")
     */
    private $summary;

}


?>