<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use DateTime;

/**
 * Example entity.
 * 
 * Always write table name in the Table annotation.
 * Without it, this code will fail to work on Unix servers (which is case sensitive),
 * altough will continue to work in the Windows environment (which is case insensitive).
 * 
 * @ORM\Entity(repositoryClass="Application\Repository\ExampleRepository")
 * @ORM\Table(name="example")
 */
class Example
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
