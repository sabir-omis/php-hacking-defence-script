<?php
/*
SHAH DEFENCE HACKING SCRIPT  
DEVELOP BY: SABIRSHAH.BSIT@GMAIL.COM +923481903589
VERION: 1.0
######### 
How to use this?
Answer: Require or Include this file at the top of every page.
for example: index.php page of your site.
----------------------------------------
<?php require(Shah_hacking_filter.php) ?>
<!DOCTYPE html>
<head>
----------------------------------------
And than Test/TRY the URL injection on the website.

 
If your website contain external url for example: Google ads, share button, API etc.
So enter that urls in the given field, 
if you not use so still empty 
but don't remove */

//$ExternalURL_1 = "http://example.com;";
//$ExternalURL_2 = ""; 
//$ExternalURL_3 = ""; 
//$ExternalURL_4 = ""; 
//$ExternalURL_5 = ""; 
//$ExternalURL_6 = ""; 
//header("Content-Security-Policy: default-src 'self' $ExternalURL_1 $ExternalURL_2 $ExternalURL_3 $ExternalURL_4 $ExternalURL_5 $ExternalURL_6 connect-src 'none';");

header("X-XSS-Protection: 1; mode=block");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Accept-Language: utf-8, iso-8859-1;q=0.5, *;q=0.1");
$Base_Full = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

function DecodeURL($decode){
$decode = html_entity_decode($decode);
$decode = str_ireplace('%3C','<',$decode);
$decode = str_ireplace('%3E','>',$decode);
$decode = str_ireplace('%22','"',$decode);
return $decode;  }
$Base_Full = DecodeURL($Base_Full);
$PathHackingCheck = $Base_Full;
function isHackingAvailible($PathHackingCheck)
{
 if (strpos($PathHackingCheck, "*") !== false) {        return true; } 
 else if (strpos($PathHackingCheck, "'") !== false) {   return true; }
 else if (strpos($PathHackingCheck, "%20") !== false){  return true; }
 else if (strpos($PathHackingCheck, " ") !== false) {   return true; }
 else if (strpos($PathHackingCheck, "<") !== false) {   return true; }
 else if (strpos($PathHackingCheck, "[") !== false) {   return true; }
 else if (strpos($PathHackingCheck, "]") !== false) {   return true; }
 else if (strpos($PathHackingCheck, "{") !== false) {   return true; }
 else if (strpos($PathHackingCheck, "}") !== false) {   return true; }
 else if (strpos($PathHackingCheck, ">") !== false) {   return true; }
 else if (strpos($PathHackingCheck, "&lt") !== false) { return true; }
 else if (strpos($PathHackingCheck, "&gt") !== false) { return true; }
 else if (strpos($PathHackingCheck, "^") !== false) {   return true; }
 else if (strpos($PathHackingCheck, "...") !== false) { return true; }
 else if (strpos($PathHackingCheck, "`") !== false) {   return true; }
 else if (strpos($PathHackingCheck, "%27") !== false) { return true; }
 else if (strpos($PathHackingCheck, '"') !== false) {   return true; }
 else if (strpos($PathHackingCheck, '%3C') !== false) { return true; }
 else if (strpos($PathHackingCheck, '%3E') !== false) { return true; }
 else{ return false; }
}
if (isHackingAvailible($PathHackingCheck))
{
echo "Hacking found....";
header("location: http://webniam.com/404.php"); // CHANGE WHERE YOU WANT TO MOVE THE HACKER
die(); 
exit();
}
?>
