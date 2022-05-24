<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParsingController extends Controller
{
    public function parsing()
    {
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => "http://www.gismeteo.ua/city/daily/5093/",
            CURLOPT_HEADER => 1,
            CURLOPT_FOLLOWLOCATION => 1,
        ));
        $data = curl_exec($ch);
        curl_close($ch);
        
        $dom = new \DOMDocument();
        //libxml_use_internal_errors(true);
        @ $dom->loadHTML($data);
        //libxml_use_internal_errors(false);
        $nodes = $dom->getElementsByTagName('section')->item(2); 
        $arr = array();
        
        $node = $nodes->getElementsByTagName('a')->item(1);
        $main = array();
        $main = $node->getElementsByTagName('span');

        //$main = $node->getElementsByTagName('div')->item(0);
        //$mainn = $main->getElementsByTagName('div')->item(0);
        //$mmm = $mainn->getElementsByTagName('span')->item(0);
        //$mainnn = $mainn->getElementsByTagName('div')->item(2);
        //$mainnnn = $mainnn->getElementsByTagName('div')->item(0);
        //$mainnnnn = $mainnnn->getElementsByTagName('div')->item(0);
        //$mainnnnnn = $mainnnnn->getElementsByTagName('div')->item(0);
        //$mainnnnnnn = $mainnnnnn->getElementsByTagName('span')->item(0);

        //var_dump($main);
        //echo $main->textContent;

        
        //$title_text = $nodes->textContent;
        //echo $title_text;
        //foreach($node as $el) {
            //$arr[] = $el->getAttribute('href');
            //$title_text = $node->textContent;
           // $title_text = $node;
            //$arr[] = $title_text; 
        //}

        //print_r($arr); 

        return view('sections.parsing', ['data' => $main]);
    }
}
