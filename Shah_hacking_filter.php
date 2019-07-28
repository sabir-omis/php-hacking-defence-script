<?php
/*
SHAH DEFENCE HACKING SCRIPT  
DEVELOP BY: webniam@gmail.com VN: +84396522598 PAK: +923481903589
FREE VERION: 1.0
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
/* 
Here what you want to do, If save the Send email to admin or save in database
OR 
get the IP, Time, Date and create the cookies If this user try again the hacking injection 
so you can block them for your site like this: IP: 1234567890 and Cookies: 364275 one time try to hacking the wesite. 
so after one day he come again and try another injection. and their IP: 123456789 or differing but cookies: 364275 is same, 
You can block them from at the top of header you have json file when user visit your website at the first it will be checking
if user is in block list or not. how to recognize the user so you can buy our paid version of this hacking defence script. 
You can buy our paid version have already these things.
*/
header("location: http://webniam.com/404.php"); // CHANGE WHERE YOU WANT TO REDIRECT THE HACKER
die(); 
exit();
}
?>
<!-- 
Buy now our paid version for your website: 
One time buy. 
No third party. 
No load, 
No edit, 
No changing, 
No integration, 
No installation, 
Easy to use, 
All functionality, 
Auto recognize user, 
Auto block user, 
Auto Save history. 
With strong encryption. 
99% guarantee to secure your website with all pages. 
Compatible for all version of PHP.
-- >
