<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FUserForum
 *
 * @ORM\Table(name="f_f_user_forum")
 * @ORM\Entity
 */
class FUserForum
{
    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=45, nullable=false)
     */
    private $author;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_disco", type="integer", nullable=false)
     */
    private $userDisco;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
