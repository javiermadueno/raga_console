<?php
/**
 * Created by PhpStorm.
 * User: javier.madueno
 * Date: 27/04/2017
 * Time: 17:22
 */

require_once 'vendor/autoload.php';

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

date_default_timezone_set('Europe/Madrid');

$container = new ContainerBuilder();

$loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/config'));
$loader->load('dic.xml');

$app    = $container->get('console.application');
$output = $container->get('default.output');

$commandsId = $container->findTaggedServiceIds('console.command');

foreach ($commandsId as $id => $command) {
    $app->add($container->get($id));
}

$app->run(null, $output);
