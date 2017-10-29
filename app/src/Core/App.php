<?php
namespace Core;

use Module\Zoo\AnimalsFactory;
use Module\Zoo\Zoo;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;


/**
 * Class App
 * @package Core
 */
class App
{
    private $container;

    public function __construct()
    {
        $appRoot = dirname(__DIR__, 2);
        $this->container = new ContainerBuilder();
        $loader = new YamlFileLoader($this->container, new FileLocator($appRoot.'/config'));
        $loader->load('services.yml');
        $this->container->setParameter('app_root', $appRoot);
    }

    /**
     * Run application
     */
    public function run() : void
    {
        try{
            $this->container->get('logger')->log()->debug('Start application');

            $animals = $this->container->get('animal_factory')->getAnimals();
            $zoo = new Zoo();
            $zoo->addAnimals($animals);
            $zoo->showAnimalSkills();

            $this->container->get('logger')->log()->debug('End execution');
        } catch (\Exception $exception) {
            echo 'Application error'.PHP_EOL;
            $this->container->get('logger')->log()->error($exception->getMessage());
        }
    }


}
