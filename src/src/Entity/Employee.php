<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployeeRepository")
 */
class Employee
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    public function getId()
    {
        return $this->id;
    }
    function getName() {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
    private $latitude;
    function getLatitude() {
        return $this->latitude;
    }

    function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    private  $longitude;
    function getLongitude() {
        return $this->longitude;
    }

    function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

    /**
     *@ORM\OneToMany(targetEntity= "App\Entity\Pack",mappedBy="Employee")
     */
    private $Pack;
    public function __construct() {
        $this->Pack=new ArrayCollection();
    }
    public function getPack(){
        return $this->Pack;
    }

}
