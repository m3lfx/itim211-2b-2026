<?php
date_default_timezone_set('Asia/Manila');
// print time();
// $date_array = getdate(); // no argument passed so today's date will be used
// foreach ($date_array as $key => $val) {
//     print "$key = $val<br>";
// }

// print "Today's date: {$date_array['mday']}/{$date_array['mon']}/
// {$date_array['year']}<p>";

// $ts = mktime(2, 30, 0, 5, 1, 1999);
// print date("m/d/Y H.i:s<br>", $ts);

print date("j \of F Y, \a\\t h.i a", time());
$number = 1900;
printf("Decimal: %d<br>", $number);
printf("Binary: %b<br>", $number);
printf("Double: %f<br>", $number);
printf("Octal: %o<br>", $number);
printf("String: %s<br>", $number);
printf("Hex (lower): %x<br>", $number);
printf("Hex (upper): %X<br>", $number);

$red = 204;
$green = 204;
$blue = 204;
printf("#%X%X%X", $red, $green, $blue);
printf("%4d", 36);

// $test = "scallywag";
// print $test[0]; // prints "s"
// print $test[2]; // prints "a"

// $membership = 'test';
// if (strlen($membership) === 4)
//     print "Thank you!";
// else
//     print "Your membership number must have 4 digits<P>";

// $membership = "pAB7";
// if (strstr($membership, "AB"))
//     print "Thank you. Don't forget that your membership expires soon!";
// else
//     print "Thank you!";

// $membership = "mz00xyz";
// if (strpos($membership, "mz") === 0)
//     print "hello mz";

// $test = "scallywag";
// print substr($test, 6); // prints "wag"
// print substr($test, 6, 2);

// $test = "matt@corrosive.co.uk";
// if ($test = substr($test, -4) === ".uk")
//     print "Don't forget our special offers for British customers";
// else
//     print "Welcome to our shop!";


// $test = "http://www.deja.com/qs.xp?OP=dnquery.xp&ST=MS&DBS=2&QRY=developer+php";
// $delims = "?&";
// $word = strtok($test, $delims);
// while (is_string($word)) {
//     if ($word)
//         print "$word<br>";
//     $word = strtok($delims);
// }
// print($test);

$text = "\t\t\tlots of room to breath ";
print "<pre>$text</pre>";
$text = trim($text);
print $text;

$text = "\t\t\tlots of room to breath ";
$text = chop($text);
print $text;

// $text = "\t\t\tlots of room to breath ";
// $text = ltrim( $text );
// print $text;

// $membership = "mz99xyz";
// $membership = substr_replace($membership, "00", 2, 3);
// print "New membership number: $membership<p>";

// $string = "Site g@g0 g@g0 duck. ";
// $string .= "The g@g0 Guide to All Things Good in Europe";
// print str_replace("g@g0", "****", $string);

// $membership = "mz00xyz";
// $membership = strtoupper($membership);
// print "$membership<P>";

// $home_url = "WWW.CORROSIVE.CO.UK";
// $home_url = strtolower($home_url);
// if (! (strpos($home_url, "http://") === 0))
//     $home_url = "http://$home_url";
// print $home_url;
// \
// $full_name = "violet elizabeth bott";
// $full_name = ucwords($full_name);
// print $full_name;

// $full_name = "VIolEt eLIZaBeTH bOTt";
// $full_name = ucwords(strtolower($full_name));
// print $full_name;

// $start_date = "2000-01-12";
// $date_array = explode("-", $start_date);
// print $date_array[0];
// print $date_array[1];
// print $date_array[2];;
// print $start_date;

// print "<pre>\n";
// print preg_match("/aa/", "aardvark advocacy", $array) . "\n";
// print_r($array);
// print "</pre>\n";

// if (preg_match("/a?/", "zbcd", $array)) {
//     print "<pre>\n";
//     print_r($array);
//     print "</pre>\n";
// }

// $text = "post";
// if (preg_match("/p.+t/", $text, $array)) {
//     print "<pre>\n";
//     print_r($array);
//     print "</pre>\n";
// }

// $text = "pot pozt pat patent";
// if (preg_match("/^p.+t/", $text, $array)) {
//     print "<pre>\n";
//     print_r($array);
//     print "</pre>\n";
// }

// if (preg_match("/[A-Za-z_ 34]+/", "AB dkfd773sxFF", $array)) {
//     print "<pre>\n";
//     print_r($array);
//     print "</pre>\n";
// }

// if (preg_match("/[^A-Z347]+/", "AB dkfd773sxFF", $array)) {
//     print "<pre>\n";
//     print_r($array);
//     print "</pre>\n";
// }

// if (preg_match("/^p[^a-z347]+/", "pB dkfd773sxFF", $array)) {
//     print "<pre>\n";
//     print_r($array);
//     print "</pre>\n";
// }
// [A-Za-z0-9_]
// $text = "pot post pat patent";
// if (preg_match("/\bp\w+t\b/", $text, $array)) {
//     print "<pre>\n";
//     print_r($array);
//     print "</pre>\n";
// }

// $test = "Whatever you do, don't panic!";
// if (preg_match("/(don't)\s+(panic)/", $test, $array)) {
//     print "<pre>\n";
//     print_r($array);
//     print "</pre>\n";
// }
// [0-9] \d
// $test = "158.152.55.35";
// if (preg_match("/(\d+)\.(\d+)\.(\d+)\.(\d+)/", $test, $array)) {
//     print "<pre>\n";
//     print_r($array);
//     print "</pre>\n";
// }

// $test = "TUPT-23-0909";
// if (preg_match("/^[A-Z]+-\d{4}-\d{4}/", $test, $array)) {
//     print "<pre>\n";
//     print_r($array);
//     print "</pre>\n";
// }

$test = "www.example.com.ph";
if (preg_match("/www\.example(\.com|\.co\.uk)/", $test, $array)) {
    print "it is a $array[1] domain<br/>";
}

// $text = "I sell pots, plants, pistachios, pianos and parrots";
// if (preg_match("/\bp\w+s\b/", $text, $array)) {
//     print "<pre>\n";
//     print_r($array);
//     print "</pre>\n";
// }

// $text = "I sell pots, plants, pistachios, pianos and parrots potatos";
// if (preg_match_all("/\bp\w+s\b/", $text, $array)) {
//     print "<pre>\n";
//     print_r($array);
//     print "</pre>\n";
// }

// $text = "01-05-99, 01-10-99, 01-03-00";
// preg_match_all("/(\d+)-(\d+)-(\d+)/", $text, $array);
// print "<pre>\n";
// print_r($array);
// print "</pre>\n";

$test = "Our Secretary, Sarah Williams is pleased to welcome you.";
$test = "buck you";
print preg_replace("/^.+uck/", "****", $test);

// $text = "name: Matt\noccupation: coder\neyes: blue\n";
// if (preg_match_all("/^\w+:\s+(.*)$/is", $text, $array)) {
//     print "<pre>\n";
//     print_r($array);
//     print "</pre>\n";
// }

// $text = "start with this line\nand you will reach\na conclusion in the end\n";
// if (preg_match("/^(\w+).*(\w+)$/s", $text, $array)) {
//     print "<pre>\n";
//     print_r($array);
//     print "</pre>\n";
// }

// 