<?php

/**
 * Bootstrap.php sa spúšťa pri zapnutí projektu
 */

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Nette\Configurator;

/** Zapnutie Tracy (vypisovanie chýb, ak stránka zlyhá) a lišťa dole napravo */
$configurator->setDebugMode(TRUE); // TRUE = zapnut, FALSE = vypnut, alebo len na IP adresu

$configurator->enableTracy(__DIR__ . '/../log');

$configurator->setTimeZone('Europe/Prague');
$configurator->setTempDirectory(__DIR__ . '/../temp');

$configurator->createRobotLoader()
	->addDirectory(__DIR__)
	->register();

$configurator->addConfig(__DIR__ . '/config/config.neon');
$configurator->addConfig(__DIR__ . '/config/config.local.neon');

$container = $configurator->createContainer();

return $container;
