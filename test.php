<?php

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\WebDriverBy;

require_once(__DIR__ . '/vendor/autoload.php');

$host = 'http://localhost:4444/wd/hub'; // this is the default
$options = new ChromeOptions();
$options->addArguments(array(
'--disable-infobars', '--ignore-certificate-errors', '--test-type', '--allow-running-insecure-content', '--window-size=1920,1080',
));
$caps = DesiredCapabilities::chrome();
$caps->setCapability(ChromeOptions::CAPABILITY, $options);

$driver = RemoteWebDriver::create(
	$host, 
	$caps
);

$driver->get("http://www.google.com");
$element = $driver->findElement(WebDriverBy::name("q")); 

if($element) {
	$element->sendKeys("TestingBot");
	$element->submit();
}

print $driver->getTitle();
sleep(30);
$driver->quit();
