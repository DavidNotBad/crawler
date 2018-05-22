#!/usr/bin/env php
<?php
require_once './vendor/autoload.php';
use Symfony\Component\DomCrawler\Crawler;

$html = file_get_contents('./index.html');

$crawler = new Crawler($html);

//$res = $crawler->filterXPath('descendant-or-self::body/p');

$res = $crawler->filter('body > p');
dump($res);

