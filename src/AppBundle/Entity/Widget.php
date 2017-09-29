<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 * @ORM\Table(name="widget")
 */
class Widget
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\column(type="string")
     * @Assert\NotBlank(message="This is a required field")
     */
    private $name;

    /**
     * @ORM\column(type="string")
     * @Assert\NotBlank(message="This is a required field")
     */
    private $another;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return Widget
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAnother()
    {
        return $this->another;
    }

    /**
     * @param mixed $another
     * @return Widget
     */
    public function setAnother($another)
    {
        $this->another = $another;

        return $this;
    }
}
