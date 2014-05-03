<?php
$buffer = <<<BUFFER
<?xml version="1.0" encoding="iso-8859-1"?>
<sample>
  <example>
    <name>David</name>
    <age>21</age>
  </example>
</sample>
BUFFER;

$xml = simplexml_load_string($buffer, 'SimpleXMLIterator');

$iterator = new RecursiveIteratorIterator($xml);
foreach ($iterator as $node) {
    $node[0] = strtoupper($node);
   echo  $node[0] . '<br />';
}

