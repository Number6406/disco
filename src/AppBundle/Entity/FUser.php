<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FUser
 *
 * @ORM\Table(name="f_f_user", indexes={@ORM\Index(name="user", columns={"user"})})
 * @ORM\Entity
 */
class FUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    private $user;

    /**
     * @var boolean
     *
     * @ORM\Column(name="suppr", type="boolean", nullable=false)
     */
    private $suppr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="inactif", type="boolean", nullable=false)
     */
    private $inactif;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=200, nullable=false)
     */
    private $prenom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cotisation", type="boolean", nullable=false)
     */
    private $cotisation;

    /**
     * @var string
     *
     * @ORM\Column(name="groupe", type="string", length=45, nullable=false)
     */
    private $groupe;

    /**
     * @var string
     *
     * @ORM\Column(name="emission", type="string", length=200, nullable=false)
     */
    private $emission;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=400, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd", type="string", length=20, nullable=false)
     */
    private $pwd;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45, nullable=false)
     */
    private $login;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alerte_progra", type="boolean", nullable=false)
     */
    private $alerteProgra;

    /**
     * @var integer
     *
     * @ORM\Column(name="dbkey", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dbkey;


}
