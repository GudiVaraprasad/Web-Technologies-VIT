<?php 
$xml = new DOMDocument('1.0');
$xml -> formatOutput = true;

$books = $xml -> createElement("books");
$xml -> appendChild($books);
$parent -> appendChild("Name of the child");

$book = $xml -> createElement("Book");
$book -> setAttribute("id", 1);
$books -> appendChild($book);

$name = $xml -> createElement("Name","Java");
$book -> appendChild($name);
$price = $xml -> createElement("Price","2000");
$book -> appendChild($price);

$book = $xml -> createElement("Book");
$book -> setAttribute("id", 2);
$books -> appendChild($book);

$name = $xml -> createElement("Name","C++");
$book -> appendChild($name);
$price = $xml -> createElement("Price","1500");
$book -> appendChild($price);

echo "<xmp>".$xml->saveXML()."</xmp>";
$xml -> save("book.xml");
?>