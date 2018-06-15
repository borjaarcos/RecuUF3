<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PackRepository")
 */
class Pack
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
    
    private $picked_at;
    function getPicked_at() {
        return $this->picked_at;
    }

    function setPicked_at($picked_at) {
        $this->picked_at = $picked_at;
    }

    private $deliver_at;
    function getDeliver_at() {
        return $this->deliver_at;
    }

    function setDeliver_at($deliver_at) {
        $this->deliver_at = $deliver_at;
    }

    /**
     * @ORM\ManyToOne(targetEntity= "App\Entity\Employee",inversedBy="Pack")
     * @ORM\JoinColumn(nullable=true)
     */
    private $employee_id;
    function getEmployee_id(): Employee{
        return $this->employee_id;
    }
    function setRole(Employee $employee_id){
        $this->employee_id=$employee_id;
    }

}
