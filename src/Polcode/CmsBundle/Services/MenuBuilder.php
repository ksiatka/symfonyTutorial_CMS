<?php

namespace Polcode\CmsBundle\Services;

use Knp\Menu\FactoryInterface;

class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     *
     * Add any other dependency you need
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createTopMenu(array $options)
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('Home', array('route' => 'polcode_cms_homepage'));
        $menu->addChild('Strona Domowa', array('route' => 'polcode_cms_homepage'));
        $menu->addChild('Start Page', array('route' => 'polcode_cms_homepage'));

        return $menu;
    }
    
    public function createSidebarMenu(array $options)
    {
        $menu = $this->factory->createItem('sidebar');

        if (isset($options['include_homepage']) && $options['include_homepage']) {
            $menu->addChild('Home', array('route' => 'polcode_cms_homepage'));
        }

        // ... add more children

        return $menu;
    }
}