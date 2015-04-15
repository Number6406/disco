<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FPiste
 *
 * @ORM\Table(name="f_f_piste", indexes={@ORM\Index(name="cd", columns={"cd"}), @ORM\Index(name="artiste", columns={"artiste"}), @ORM\Index(name="piste", columns={"cd", "disque", "piste"})})
 * @ORM\Entity
 */
class FPiste
{
    /**
     * @var integer
     *
     * @ORM\Column(name="piste", type="integer", nullable=false)
     */
    private $piste;

    /**
     * @var integer
     *
     * @ORM\Column(name="cd", type="integer", nullable=false)
     */
    private $cd;

    /**
     * @var integer
     *
     * @ORM\Column(name="disque", type="integer", nullable=false)
     */
    private $disque;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=300, nullable=false)
     */
    private $titre;

    /**
     * @var integer
     *
     * @ORM\Column(name="artiste", type="integer", nullable=false)
     */
    private $artiste;

    /**
     * @var integer
     *
     * @ORM\Column(name="langue", type="integer", nullable=false)
     */
    private $langue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="anim", type="boolean", nullable=false)
     */
    private $anim;

    /**
     * @var boolean
     *
     * @ORM\Column(name="paulo", type="boolean", nullable=false)
     */
    private $paulo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="star", type="boolean", nullable=false)
     */
    private $star;

    /**
     * @var integer
     *
     * @ORM\Column(name="dbkey", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dbkey;


}
