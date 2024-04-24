
<?php
//www.dzcoding.com
// Create a seo friendly urls
function SEO($input){ 
    //SEO - friendly URL String Converter    
    $input = str_replace(" ", " ", $input);
    $input = str_replace(array("'", "-"), "", $input); //remove single quote and dash
    $input = mb_convert_case($input, MB_CASE_LOWER, "UTF-8"); //convert to lowercase
    $input = preg_replace("#[^a-zA-Z]+#", "-", $input); //replace everything non an with dashes
    $input = preg_replace("#(-){2,}#", "$1", $input); //replace multiple dashes with one
    $input = trim($input, "-"); //trim dashes from beginning and end of string if any
    return $input; 
}

//usage
//echo seo('text');
//example
$text = 'ConVeRt @Me## IntO** Seo&&  FriendlY+Url';
echo 'Text : '.$text;
echo '<br>';
echo 'Result : '.seo($text);
