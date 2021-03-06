<?php
declare(strict_types = 1);

namespace CMS\Plugins;


//use Interop\Container\ContainerInterface;
use CMS\ServiceContainerInterface;
use Illuminate\Database\Capsule\Manager as Capsule;

class DbPlugin implements PluginInterface
{

    public function register(ServiceContainerInterface $container)
    {
      
        $capsule= new Capsule();
        $config = include __DIR__ .'/../../config/db.php';
        $capsule->addConnection($config['development']);
        $capsule->bootEloquent();
        
       

    }
}