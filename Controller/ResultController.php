<?php

namespace bet\resultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\vendor\doctrine\orm\lib\Doctrine\ORM\Query\ResultSetMapping;
use Symfony\vendor\doctrine\orm\lib\Doctrine\ORM\Tools\EntityGenerator;

class ResultController extends Controller
{
    public function indexAction($name)
    {
	
	$em = $this->getDoctrine()->getManager();
//$rsm = new ResultSetMapping();
	$query_execute = "CREATE TABLE IF NOT EXISTS bets ('match_id' int(11) NOT NULL DEFAULT '0', 'odds' longtext COLLATE utf8_unicode_ci, PRIMARY KEY ('match_id')) ENGINE=MyISAM DEFAULT CHATSET=utf8 COLLATE=utf8_unicode_ci;";
	$statement = $em->getConnection()->prepare($query_execute);
	$result = $statement->fetchAll();
        return $this->render('resultsBundle:Result:index.html.twig', array('name' => $name));
    }
}
