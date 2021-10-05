<!-- 1. Write php program, which changes the color of the first character of a word in a sentence. -->

<?php
$sentence = 'Gudi Varaprasad from Web Technologies class is doing this assignment';
$sentence = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$sentence);
echo $sentence;
?>