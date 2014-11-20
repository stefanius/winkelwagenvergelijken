<?php

namespace Stef\ShopBundle\Tests\ObjectManagers;

use Doctrine\Common\Persistence\ObjectManager;
use Stef\ShopBundle\ObjectManagers\ShopManager;
use Stef\SlugManipulation\Manipulators\SlugManipulator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\ParameterBag;

class ShopManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ShopManager
     */
    protected $manager;

    protected function setUp()
    {
        parent::setUp();
        /**
         * @var ObjectManager
         */
        $entityManager = $this->getMockBuilder('\Doctrine\Common\Persistence\ObjectManager')
            ->disableOriginalConstructor()
            ->getMock();

        /**
         * @var ContainerInterface
         */
        $serviceContainer = $this->getMockBuilder('Symfony\Component\DependencyInjection\ContainerInterface')
            ->disableOriginalConstructor()
            ->getMock();

        $this->manager = new ShopManager($entityManager, $serviceContainer);
        $this->manager->setSlugifier(new SlugManipulator());
    }

    /**
     * @dataProvider provider
     *
     * @param array $input
     * @param array $expected
     */
    public function testManager(array $input, array $expected)
    {
        $pb = new ParameterBag($input);

        $entity = $this->manager->create($pb);

        $this->assertEquals($expected['slug'], $entity->getSlug());
    }

    public function provider() {
        return [
            [[
                'address'     => 'Koningskade',
                'housenumber' => '66',
                'zip'         => '1234AA'

            ], [
                'address'     => 'Koningskade',
                'housenumber' => '66',
                'zip'         => '1234AA',
                'slug'        => 'koningskade-66'
            ]],
        ];
    }
}
