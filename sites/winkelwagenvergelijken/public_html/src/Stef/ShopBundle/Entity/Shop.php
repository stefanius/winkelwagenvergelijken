<?php

namespace Stef\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shop
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Shop
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    protected $address;

    /**
     * @var string
     *
     * @ORM\Column(name="housenumber", type="string", length=255)
     */
    protected $housenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=255)
     */
    protected $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    protected $city;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    protected $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    protected $slug;

    /**
     * @ORM\ManyToOne(targetEntity="Concern", inversedBy="shops")
     * @ORM\JoinColumn(name="concern_id", referencedColumnName="id")
     */
    protected $concern;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="monday_close", type="time")
     */
    protected $mondayClose;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tuesday_open", type="time")
     */
    protected $tuesdayOpen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tuesday_close", type="time")
     */
    protected $tuesdayClose;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wednesday_open", type="time")
     */
    protected $wednesdayOpen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wednesday_close", type="time")
     */
    protected $wednesdayClose;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="thursday_open", type="time")
     */
    protected $thursdayOpen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="thursday_close", type="time")
     */
    protected $thursdayClose;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="friday_open", type="time")
     */
    protected $fridayOpen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="friday_close", type="time")
     */
    protected $fridayClose;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="saturday_open", type="time")
     */
    protected $saturdayOpen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="saturday_close", type="time")
     */
    protected $saturdayClose;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sunday_open", type="time")
     */
    protected $sundayOpen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sunday_close", type="time")
     */
    protected $sundayClose;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    protected $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime")
     */
    protected $modified;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="monday_open", type="time")
     */
    protected $mondayOpen;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Shop
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zip
     *
     * @param string $zip
     * @return Shop
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Shop
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Shop
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Concern
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Concern
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set mondayClose
     *
     * @param \DateTime $mondayClose
     * @return Shop
     */
    public function setMondayClose($mondayClose)
    {
        $this->mondayClose = $mondayClose;

        return $this;
    }

    /**
     * Get mondayClose
     *
     * @return \DateTime 
     */
    public function getMondayClose()
    {
        return $this->mondayClose;
    }

    /**
     * Set tuesdayOpen
     *
     * @param \DateTime $tuesdayOpen
     * @return Shop
     */
    public function setTuesdayOpen($tuesdayOpen)
    {
        $this->tuesdayOpen = $tuesdayOpen;

        return $this;
    }

    /**
     * Get tuesdayOpen
     *
     * @return \DateTime 
     */
    public function getTuesdayOpen()
    {
        return $this->tuesdayOpen;
    }

    /**
     * Set tuesdayClose
     *
     * @param \DateTime $tuesdayClose
     * @return Shop
     */
    public function setTuesdayClose($tuesdayClose)
    {
        $this->tuesdayClose = $tuesdayClose;

        return $this;
    }

    /**
     * Get tuesdayClose
     *
     * @return \DateTime 
     */
    public function getTuesdayClose()
    {
        return $this->tuesdayClose;
    }

    /**
     * Set wednesdayOpen
     *
     * @param \DateTime $wednesdayOpen
     * @return Shop
     */
    public function setWednesdayOpen($wednesdayOpen)
    {
        $this->wednesdayOpen = $wednesdayOpen;

        return $this;
    }

    /**
     * Get wednesdayOpen
     *
     * @return \DateTime 
     */
    public function getWednesdayOpen()
    {
        return $this->wednesdayOpen;
    }

    /**
     * Set wednesdayClose
     *
     * @param \DateTime $wednesdayClose
     * @return Shop
     */
    public function setWednesdayClose($wednesdayClose)
    {
        $this->wednesdayClose = $wednesdayClose;

        return $this;
    }

    /**
     * Get wednesdayClose
     *
     * @return \DateTime 
     */
    public function getWednesdayClose()
    {
        return $this->wednesdayClose;
    }

    /**
     * Set thursdayOpen
     *
     * @param \DateTime $thursdayOpen
     * @return Shop
     */
    public function setThursdayOpen($thursdayOpen)
    {
        $this->thursdayOpen = $thursdayOpen;

        return $this;
    }

    /**
     * Get thursdayOpen
     *
     * @return \DateTime 
     */
    public function getThursdayOpen()
    {
        return $this->thursdayOpen;
    }

    /**
     * Set thursdayClose
     *
     * @param \DateTime $thursdayClose
     * @return Shop
     */
    public function setThursdayClose($thursdayClose)
    {
        $this->thursdayClose = $thursdayClose;

        return $this;
    }

    /**
     * Get thursdayClose
     *
     * @return \DateTime 
     */
    public function getThursdayClose()
    {
        return $this->thursdayClose;
    }

    /**
     * Set fridayOpen
     *
     * @param \DateTime $fridayOpen
     * @return Shop
     */
    public function setFridayOpen($fridayOpen)
    {
        $this->fridayOpen = $fridayOpen;

        return $this;
    }

    /**
     * Get fridayOpen
     *
     * @return \DateTime 
     */
    public function getFridayOpen()
    {
        return $this->fridayOpen;
    }

    /**
     * Set fridayClose
     *
     * @param \DateTime $fridayClose
     * @return Shop
     */
    public function setFridayClose($fridayClose)
    {
        $this->fridayClose = $fridayClose;

        return $this;
    }

    /**
     * Get fridayClose
     *
     * @return \DateTime 
     */
    public function getFridayClose()
    {
        return $this->fridayClose;
    }

    /**
     * Set saturdayOpen
     *
     * @param \DateTime $saturdayOpen
     * @return Shop
     */
    public function setSaturdayOpen($saturdayOpen)
    {
        $this->saturdayOpen = $saturdayOpen;

        return $this;
    }

    /**
     * Get saturdayOpen
     *
     * @return \DateTime 
     */
    public function getSaturdayOpen()
    {
        return $this->saturdayOpen;
    }

    /**
     * Set saturdayClose
     *
     * @param \DateTime $saturdayClose
     * @return Shop
     */
    public function setSaturdayClose($saturdayClose)
    {
        $this->saturdayClose = $saturdayClose;

        return $this;
    }

    /**
     * Get saturdayClose
     *
     * @return \DateTime 
     */
    public function getSaturdayClose()
    {
        return $this->saturdayClose;
    }

    /**
     * Set sundayOpen
     *
     * @param \DateTime $sundayOpen
     * @return Shop
     */
    public function setSundayOpen($sundayOpen)
    {
        $this->sundayOpen = $sundayOpen;

        return $this;
    }

    /**
     * Get sundayOpen
     *
     * @return \DateTime 
     */
    public function getSundayOpen()
    {
        return $this->sundayOpen;
    }

    /**
     * Set sundayClose
     *
     * @param \DateTime $sundayClose
     * @return Shop
     */
    public function setSundayClose($sundayClose)
    {
        $this->sundayClose = $sundayClose;

        return $this;
    }

    /**
     * Get sundayClose
     *
     * @return \DateTime 
     */
    public function getSundayClose()
    {
        return $this->sundayClose;
    }

    /**
     * Set mondayOpen
     *
     * @param \DateTime $mondayOpen
     * @return Shop
     */
    public function setMondayOpen($mondayOpen)
    {
        $this->mondayOpen = $mondayOpen;

        return $this;
    }

    /**
     * Get mondayOpen
     *
     * @return \DateTime 
     */
    public function getMondayOpen()
    {
        return $this->mondayOpen;
    }

    /**
     * Set housenumber
     *
     * @param string $housenumber
     * @return Shop
     */
    public function setHousenumber($housenumber)
    {
        $this->housenumber = $housenumber;

        return $this;
    }

    /**
     * Get housenumber
     *
     * @return string 
     */
    public function getHousenumber()
    {
        return $this->housenumber;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Shop
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set concern
     *
     * @param \Stef\ShopBundle\Entity\Concern $concern
     * @return Shop
     */
    public function setConcern(\Stef\ShopBundle\Entity\Concern $concern = null)
    {
        $this->concern = $concern;

        return $this;
    }

    /**
     * Get concern
     *
     * @return \Stef\ShopBundle\Entity\Concern 
     */
    public function getConcern()
    {
        return $this->concern;
    }
}
