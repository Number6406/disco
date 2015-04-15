<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FArtiste
 *
 * @ORM\Table(name="f_f_artiste", uniqueConstraints={@ORM\UniqueConstraint(name="artiste", columns={"artiste"})}, indexes={@ORM\Index(name="libelle", columns={"libelle"}), @ORM\Index(name="nom", columns={"nom"})})
 * @ORM\Entity
 */
class FArtiste
{
    /**
     * @var integer
     *
     * @ORM\Column(name="artiste", type="integer", nullable=false)
     */
    private $artiste;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=250, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=300, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="siteweb", type="string", length=150, nullable=false)
     */
    private $siteweb;

    /**
     * @var string
     *
     * @ORM\Column(name="myspace", type="string", length=150, nullable=false)
     */
    private $myspace;

    /**
     * @var integer
     *
     * @ORM\Column(name="dbkey", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dbkey;


}
