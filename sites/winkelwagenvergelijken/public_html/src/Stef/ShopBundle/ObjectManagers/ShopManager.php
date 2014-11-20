<?php

namespace Stef\ShopBundle\ObjectManagers;

use Doctrine\Entity;
use Stef\ShopBundle\Entity\Shop;
use Stef\SlugManipulation\Manipulators\SlugManipulator;
use Symfony\Component\HttpFoundation\ParameterBag;

class ShopManager extends AbstractObjectManager {

    /**
     * @var SlugManipulator
     */
    protected $slugifier;

    /**
     * @param SlugManipulator $slugifier
     */
    public function setSlugifier(SlugManipulator $slugifier)
    {
        $this->slugifier = $slugifier;
    }

    /**
     * @param ParameterBag $data
     *
     * @return Entity
     */
    function create(ParameterBag $data)
    {
        $shop = new Shop();

        if ($data->has('address')) {
            $shop->setAddress($data->get('address'));
        }

        if ($data->has('housenumber')) {
            $shop->setHousenumber($data->get('housenumber'));
        }

        if ($data->has('zip')) {
            $shop->setZip($data->get('zip'));
        }

        $shop->setSlug($this->slugifier->manipulate($shop->getAddress() . ' ' . $shop->getHousenumber()));

        return $shop;
    }
}