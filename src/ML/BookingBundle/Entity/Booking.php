<?php

namespace ML\BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Booking
 *
 * @ORM\Table(name="booking")
 * @ORM\Entity(repositoryClass="ML\BookingBundle\Repository\BookingRepository")
 */
class Booking
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="purchaseDate", type="datetimetz")
     */
    private $purchaseDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bookingDate", type="datetimetz")
     */
    private $bookingDate;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrNormalTicket", type="integer")
     */
    private $nbrNormalTicket;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrChildTicket", type="integer")
     */
    private $nbrChildTicket;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrSeniorTicket", type="integer")
     */
    private $nbrSeniorTicket;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrReducedTicket", type="integer")
     */
    private $nbrReducedTicket;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Booking
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Booking
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set purchaseDate
     *
     * @param \DateTime $purchaseDate
     *
     * @return Booking
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    /**
     * Get purchaseDate
     *
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * Set bookingDate
     *
     * @param \DateTime $bookingDate
     *
     * @return Booking
     */
    public function setBookingDate($bookingDate)
    {
        $this->bookingDate = $bookingDate;

        return $this;
    }

    /**
     * Get bookingDate
     *
     * @return \DateTime
     */
    public function getBookingDate()
    {
        return $this->bookingDate;
    }

    /**
     * Set nbrNormalTicket
     *
     * @param integer $nbrNormalTicket
     *
     * @return Booking
     */
    public function setNbrNormalTicket($nbrNormalTicket)
    {
        $this->nbrNormalTicket = $nbrNormalTicket;

        return $this;
    }

    /**
     * Get nbrNormalTicket
     *
     * @return int
     */
    public function getNbrNormalTicket()
    {
        return $this->nbrNormalTicket;
    }

    /**
     * Set nbrChildTicket
     *
     * @param integer $nbrChildTicket
     *
     * @return Booking
     */
    public function setNbrChildTicket($nbrChildTicket)
    {
        $this->nbrChildTicket = $nbrChildTicket;

        return $this;
    }

    /**
     * Get nbrChildTicket
     *
     * @return int
     */
    public function getNbrChildTicket()
    {
        return $this->nbrChildTicket;
    }

    /**
     * Set nbrSeniorTicket
     *
     * @param integer $nbrSeniorTicket
     *
     * @return Booking
     */
    public function setNbrSeniorTicket($nbrSeniorTicket)
    {
        $this->nbrSeniorTicket = $nbrSeniorTicket;

        return $this;
    }

    /**
     * Get nbrSeniorTicket
     *
     * @return int
     */
    public function getNbrSeniorTicket()
    {
        return $this->nbrSeniorTicket;
    }

    /**
     * Set nbrReducedTicket
     *
     * @param integer $nbrReducedTicket
     *
     * @return Booking
     */
    public function setNbrReducedTicket($nbrReducedTicket)
    {
        $this->nbrReducedTicket = $nbrReducedTicket;

        return $this;
    }

    /**
     * Get nbrReducedTicket
     *
     * @return int
     */
    public function getNbrReducedTicket()
    {
        return $this->nbrReducedTicket;
    }
}

