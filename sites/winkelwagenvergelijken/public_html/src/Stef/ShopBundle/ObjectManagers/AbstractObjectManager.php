<?php

namespace Stef\ShopBundle\ObjectManagers;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Entity;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\ParameterBag;

abstract class AbstractObjectManager {

    /**
     * @var ObjectManager
     */
    protected $em;

    /**
     * @var ContainerInterface
     */
    protected $serviceContainer;

    /**
     * @param ObjectManager $em
     * @param ContainerInterface $serviceContainer
     */
    function __construct(ObjectManager $em, ContainerInterface $serviceContainer)
    {
        $this->em = $em;
        $this->serviceContainer = $serviceContainer;
    }

    /**
     * @param $entity
     */
    protected function persist($entity) {
        $this->em->persist($entity);
    }

    protected function flush() {
        $this->em->flush();
    }

    /**
     * @param $entity
     */
    protected function persistAndFlush($entity) {
        $this->persist($entity);
        $this->flush();
    }

    /**
     * @param ParameterBag $data
     *
     * @return Entity
     */
    public function createAndStore(ParameterBag $data) {
        $entity = $this->create($data);
        $this->persistAndFlush($entity);

        return $entity;
    }

    /**
     * @param $serviceId
     *
     * @return object
     */
    protected function getService($serviceId) {
        return $this->serviceContainer->get($serviceId);
    }

    /**
     * @param ParameterBag $data
     *
     * @return Entity
     */
    abstract public function create (ParameterBag $data);
}