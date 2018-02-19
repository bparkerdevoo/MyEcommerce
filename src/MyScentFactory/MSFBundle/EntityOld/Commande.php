<?php
/**
 * Created by PhpStorm.
 * User: BELEMA
 * Date: 15/02/18
 * Time: 01:37
 */

namespace MyScentFactory\MSFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * //ecommerce//front
 * 
 * @ORM\Entity (repositoryClass="\MSFBundle\Repository\CommandeRepository")
 * @ORM\Table(name="commande")
 */
class Commande
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;
    /**
     * @ORM\Column(type="float")
     */
    private $montant;
    /**
     * @ORM\Column(type="string")
     */
    private $modeReglement;

    public function __construct(){
        $this->date = new \DateTime();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return mixed
     */
    public function getModeReglement()
    {
        return $this->modeReglement;
    }

    /**
     * @param mixed $modeReglement
     */
    public function setModeReglement($modeReglement)
    {
        $this->modeReglement = $modeReglement;
    }


}
