<?php

/*
$message = "Hello guys how are you doing";

$myMsgArr = explode(" ", $message);
echo "<pre>";
print_r($myMsgArr);

$myMsgArr = explode(" ", $message, 3);
echo "<pre>";
print_r($myMsgArr);

$myMsgArr = explode(" ", $message, -2);     // removes last 2 elements of the actual array any return remaning elements in new array
echo "<pre>";
print_r($myMsgArr);

echo "<br><hr><br>";


$myMsg = array(
    "Hello",
    "guys",
    "how",
    "are",
    "you",
    "doing"
);

$myMsgString = implode(" -- ",$myMsg);
echo $myMsgString;

echo "<br><hr><br>";

$myMsgString = implode("<br>",$myMsg);
echo $myMsgString;
echo "<br><hr><br>";

$myMsgString = join(" - ",$myMsg);
echo $myMsgString;
echo "<br><hr><br>";

$myStr = "Jai Shree Ram";

echo "<pre>";
print_r(str_split($myStr));

echo "<pre>";
print_r(str_split($myStr,2));

echo "<pre>";
print_r(chunk_split($myStr,2," / "));
echo "<br>";
print_r(chunk_split($myStr,4," - "));

echo "<br><hr><br>";
*/
/*
$myStr = "Jai shree RAM";

echo strtolower($myStr);
echo "<br><hr>";
echo strtoupper($myStr);
echo "<br><hr>";
echo ucfirst($myStr);
echo "<br><hr>";
echo ucwords($myStr);
echo "<br><hr>";
echo lcfirst($myStr);
echo "<br><hr>";
echo strlen($myStr);
echo "<br><hr>";
echo str_word_count($myStr);
echo "<br><hr>";
print_r(str_word_count($myStr,1));
echo "<br><hr>";
print_r(str_word_count($myStr,2));

$myMessage = "Ram siya ram jai jai ram siya ram mai to ram hi Ram pukaru";
echo "<br><hr>";
echo substr_count($myMessage,"Ram");    // case sensitive, gets total word occurance in the string
echo "<br><hr>";
echo substr_count($myMessage,"ram");    // gets total word occurance in the string
echo "<br><hr>";
echo substr_count($myMessage,"ram",20); // gets word occurance count after index 20
echo "<br><hr>";
echo substr_count($myMessage,"jai",5,40);   // gets word occurance count between index 5 nd 40
echo "<br><hr>";

echo strpos($myMessage,"ram");   // case-sensitive, tells index of first occurance of word from starting
echo "<br><hr>";
echo strpos($myMessage,"jai",2);   // case-sensitive, tells index of first occurance of word after index 2
echo "<br><hr>";
echo strpos($myMessage,"ram",-51);   // case-sensitive, tells index of first occurance of word after index -51
echo "<br><hr>";
echo strrpos($myMessage,"ram");   //case-sensitive, tells index of last occurance of word
echo "<br><hr>";
echo strrpos($myMessage,"jai",14);   //case-sensitive, tells index of last occurance of word
echo "<br><hr>";
echo stripos($myMessage,"ram");   //case-insensitive, tells index of first occurance of word from begining
echo "<br><hr>";
echo stripos($myMessage,"ram",10);   //case-insensitive, tells index of first occurance of word after index 10
echo "<br><hr>";
echo stripos($myMessage,"ram",-10);   //case-insensitive, tells index of first occurance of word after index -10
echo "<br><hr>";
echo strripos($myMessage,"jai");   //case-insensitive, tells index of last occurance of word
echo "<br><hr>";

echo strstr($myMessage,"mai");   //case-sensitive, return RIGHT side strings till first occurance of substring word
echo "<br><hr>";
echo stristr($myMessage,"mai");   //case-insensitive, return RIGHT side strings till first occurance of substring word
echo "<br><hr>";
echo strstr($myMessage,"mai",true);   //case-sensitive, return LEFT side strings till first occurance of substring word
echo "<br><hr>";
echo stristr($myMessage,"mai",true);   //case-insensitive, return LEFT side strings till first occurance of substring word
echo "<br><hr>";
echo strchr($myMessage,"mai");   //case-sensitive, return RIGHT side strings till first occurance of substring word
echo "<br><hr>";
echo strchr($myMessage,"mai",true);   //case-sensitive, return LEFT side strings till first occurance of substring word
echo "<br><hr>";
echo strrchr($myMessage,"siya");   //case-sensitive, return first occurance of substring word starting from the end of string
echo "<br><hr>";
echo strpbrk($myMessage,"y");   //case-sensitive, return LEFT side strings till first occurance of Character
echo "<br><hr>";

echo substr($myMessage,15);   //returns 15 length string from begining
echo "<br><hr>";
echo substr($myMessage,-20);   //returns string after of index -20
echo "<br><hr>";
echo substr($myMessage,6,30);   //returns 30 length string after of index 6 and till index 30(excluded)
echo "<br><hr>";
echo substr($myMessage,10,-20);   //returns string after of index 10 and till index -20(excluded)
echo "<br><hr>";
echo substr($myMessage,-40,-20);   //returns string after of index -40 and till index -20(excluded)

echo str_replace("ram","rama",$myMessage);   //case-sensitive, replaces all ram by word rama of the string
echo "<br><hr>";
$theWord = ["siya","mai"];
$replacedWord = ["sia","Hum"];
echo str_replace($theWord,$replacedWord,$myMessage);   //case-sensitive, replaces all theWord elements of the string by replacedWords elements
echo "<br><hr>";
echo "<pre>";
$modWords = str_replace("siya","siyaa",$theWord);   //case-sensitive, replaces all siya elements by siyaa in array theWord and saves as new array
print_r($modWords);
echo "<br><hr>";
echo str_ireplace("ram","rama",$myMessage);   //case-insensitive, replaces all ram/Ram by word rama of the string
echo "<br><hr>";
echo substr_replace($myMessage," hello hello mike check............ ",4);   //case-isensitive, replaces whole string after index 4 by given argument string
echo "<br><hr>";
echo substr_replace($myMessage," ..... hello hello mike check hello ....",4,12);   //case-isensitive, replaces 30 index places words by given argument string after index 5 and other indexes will remain unaffected 
echo "<br><hr>";
echo substr_replace($myMessage," ..... hello hello mike check hello ....",4,-5);   //case-isensitive, replaces words by given argument string after index 5 to -5 index and other indexes will remain unaffected 
echo "<br><hr>";
echo strtr($myMessage,"abc","xyz");   //case-sensitive, replaces all a to x, b toy and c to z of the string
echo "<br><hr>";
$repArr = ["jai" => "Je","ram"=>"raam","siya"=>"siyaa"];
echo strtr($myMessage,$repArr);   //case-sensitive, replaces key values of associative array with values in the main string
*/

// echo strcmp("Hello", "Hello");      // case-sensetive, No different alphabet found in both arguments hence 0
// echo "<br><hr>";
// echo strcmp("2Hello", "10Hello");      // first different alphabet encountered is 2 and 1 and  2(50) < 1(49) of str2 hence (50 - 49 = 1)
// echo "<br><hr>";
// echo strcmp("Hello", "hello");      // first different alphabet encountered is H and h and  H(72) < h(104) of str2 hence (72-104 = -32)
// echo "<br><hr>";
// echo strcmp("Shyam", "Ram");      // first different alphabet encountered is S and R and  S(83) > R(82) of str2 hence (83-82 = 1)
// echo "<br><hr>";

// strncmp function compares only first given no. of characters of arguments

// echo strncmp("Congratulations","Congratulations",3);      // case-sensetive, No different alphabet found on first 3 indexes of given strings hence 0
// echo "<br><hr>";
// echo strncmp("CongratulAtions","Congratulations",10);      // first different alphabet encountered in first 10 indexe places is A and a on same index place and  A(65) < a(97) of str2 hence (65-97 = -32)
// echo "<br><hr>";

// strncasecmp function is a case insensitive function and compares only first different character's index of string 1 to the same index elemnt of string 2

// echo strcasecmp("ram", "Ram");          // case-insensetive,, No different alphabet found in both arguments hence 0
// echo "<br><hr>";
// echo strcasecmp("Hello", "Hello");      // No different alphabet found in both arguments hence 0
// echo "<br><hr>";
// echo strcasecmp("Hello", "hel lo");      // first different alphabet encountered is l and space and  l(108) > space(32) of str2 hence (108 - 32 = 76)
// echo "<br><hr>";
// echo strcasecmp("HeAlo", "Hello");      // first different alphabet encountered is A and l and  A(97) < l(108) of str2 hence (97-108 == -11)
// echo "<br><hr>";
// echo strcasecmp("Hello", "Hello guyz");      // returns -1 because "Hello" is shorter than "Hello guyz", and thus considered "less than" it in a lexicographical comparison.
// echo "<br><hr>";
// echo strcasecmp("Hello World", "Hello");      // returns 1 because "Hello World" is larer than "Hello" in length, and thus considered "more than" it in a lexicographical comparison.
// echo "<br><hr>";
// echo strcasecmp("2Hello", "10Hello");      // first different alphabet encountered is 2 and 1 and  2(50) < 1(49) of str2 hence (50 - 49 = 1)
// echo "<br><hr>";

// echo strncasecmp("Independence", "independence",7);      // case-insensetive, No different alphabet found in first 7 index place alphabets of both argument strings hence 0
// echo "<br><hr>";
// echo strncasecmp("Indepandence", "Independence",7);          // first different alphabet encountered in first 7 indexe places of both strings is a and e on same index place and  a(97) < e(101) of str2 hence (97-101 = -4)
// echo "<br><hr>";
// echo strncasecmp("Indepandence", "Ind ependence",7);      // first different alphabet encountered is e and space and  e(101) > space(32) of str2 hence (101 - 32 = 69)
// echo "<br><hr>";
// echo strncasecmp("2Indepandence", "10Independence",7);      // first different alphabet encountered is 2 and 1 and  2(50) < 1(49) of str2 hence (50 - 49 = 1)
// echo "<br><hr>";

// echo strnatcmp("Independence", "Independence");      // case-sensetive, No different alphabet found in both argument strings hence 0
// echo "<br><hr>";
// echo strnatcmp("Independense", "Indepandence");      // case-sensetive, first different alphabet encountered in both strings is s and c and  human puts s after c in dictionary so right value of scale ( from -1,0,1 ) is assigned i.e 1
// echo "<br><hr>";
// echo strnatcmp("Indepandence", "Independence");          // first different alphabet encountered in both strings is a and e on same index place and human puts a before e in dictionary so left value of scale ( from -1,0,1 ) is assigned i.e -1
// echo "<br><hr>";
// echo strnatcmp("2Indepiandence10", "2Indepe5ndence5");      // will return 1, since "i" is lexicographically greater than "5", the first string is considered greater than the second.
// echo "<br><hr>";
// echo strnatcmp("2Indepandence", "10Independence");      // returns -1 because "2" is less than "10", indicating that "2Indepandence" is less than "10Independence" in natural order comparison.
// echo "<br><hr>";

// echo strnatcasecmp("Independence", "independence");      // case-insensetive, No different alphabet found in both argument strings hence 0
// echo "<br><hr>";
// echo strnatcasecmp("Indepandence", "Independence");          // first different alphabet encountered in both strings is a and e on same index place and human puts a before e in dictionary so left value of scale ( from -1,0,1 ) is assigned i.e -1
// echo "<br><hr>";
// echo strnatcasecmp("2Indepiandence10", "2Indepe5ndence5");      // due to the numerical comparison of 10 and 5, strnatcasecmp will return a positive value i.e 1
// echo "<br><hr>";
// echo strnatcasecmp("2Indepandence", "10Independence");      // returns -1 because "2" is less than "10", indicating that "2Indepandence" is less than "10Independence" in natural order comparison.
// echo "<br><hr>";

/*

If the length if argument A is shorter than length of argument B, it will gives -1
similarly if the length if argument A is equal to length of argument B, it will then go for ASCII value check
similarly if the length if argument A is larger than length of argument B, it will gives 1

if first argument First different Alphabet has greater Ascii value than second 
argument's respective alphabet then it will return positive value and vice-versa

substr_compare function compares substrings of main string with case sensitivity false by default

*/

// echo substr_compare("Hello World","World",6);   // compare the substring from index 6 of main_argument value (i.e "World") with searched_word_argument value which is ("World") hence return 0 
// echo "<br><hr>";
// echo substr_compare("Hello World","World",4);   // compare the substring from index 4 of main_argument value (i.e "o World") with searched_word_argument value which is ("World") hence result will be 24 [o(111) - W(87) = 24]
// echo "<br><hr>";
// echo substr_compare("Hello World","Worldwide",6,5);   // compare the next 5 alphabets fom index 4(included) of main_argument value (i.e "World") with searched_word_argument value having first 5( index 0 to 4) value as("World") returning same length of both words hence return 0
// echo "<br><hr>";
// echo substr_compare("Hello World ","Worldwide",6,6);   // compare the next 6 alphabets fom index 6(included) of main_argument value (i.e "World ") with searched_word_argument value having first 6(index 0 to 5) value as("Worldw") hence length is same but space(32) of first argument is less than w(119) of second value word so 32-119 = -87
// echo "<br><hr>";
// echo substr_compare("Hello World","Hello World",3,4);   // compare the next 4 alphabets fom index 3(included) of main_argument value (i.e "lo W") with searched_word_argument value having first 4(index 0 to 3) value as("Hell") hence length is same but l(108) of first argument is more than H(72) of second value word so 108-72 = 36
// echo "<br><hr>";
// echo substr_compare("Hello World","rld",-3,3);   // compare the next 3 alphabets fom index -3(included) of main_argument value (i.e "rld") with searched_word_argument value having first 3(index 0 to 2) value as("rld") hence length is same as well as the substrins so outout will be 0
// echo "<br><hr>";
// echo substr_compare("Hello WorlD","rld",-3,3,FALSE);   // compare the next 3 alphabets fom index -3(included) of main_argument value (i.e "rlD") with searched_word_argument value having first 3(index 0 to 2) value as("rld") and 5th parameter of case-insensitivity is false also hence length is same but case od D is different from d hence D(68) is less than d(100) so 68-100 = -32 well be the outout.
// echo "<br><hr>";
// echo substr_compare("Hello WorlD","rld",-3,3,TRUE);   // compare the next 3 alphabets fom index -3(included) of main_argument value (i.e "rld") with searched_word_argument value having first 4(index 0 to 2) value as("rld") and 5th parameter of case-insensitivity is true hence D and d is ignored in the substings making them equal and hence return 0
// echo "<br><hr>";

// below 2 cases are contradictory in processing the output, based on length of both strings (lexicographically) vs ASCII value based output
/*
echo substr_compare("Hello World","Worldwide",6,6);   // compare the next 6 alphabets fom index 6(included) of main_argument value (i.e "World") with searched_word_argument value having first 6(index 0 to 5) value as("Worldw") hence first string is smaller in length than 1st one so return -1
echo "<br><hr>";
*/

/*
echo similar_text("Jai Shree Ram","Jai Shree Ram",$char_match_persentage);
echo "<br>The match percentage is : $char_match_persentage";
echo "<br><hr>";
echo similar_text("Jai Shree Ram","Jai Shree ram",$char_match_persentage);
echo "<br>The match percentage is : $char_match_persentage";
echo "<br><hr>";
echo similar_text("Jai Shree Ram","Jai Siyaram",$char_match_persentage);
echo "<br>The match percentage is : $char_match_persentage";
echo "<br><hr>";
echo similar_text("Jai Shree Ram","Har Har Mahadev",$char_match_persentage);
echo "<br>The match percentage is : $char_match_persentage";
*/
/*
echo strrev("Hello");
echo "<br>".strrev("he is a good person");
echo "<br>".strrev("nosrep doog a ton si eh");
echo "<br><hr>";
echo str_shuffle("raja");   // results different shuffled character sequences of given string

echo "<br><hr>";
echo  str_pad("JAI SHREE RAM ",(strlen("JAI SHREE RAM ")+10),"@");
echo "<br><hr>";
echo  str_pad("JAI SHREE RAM ",(strlen("JAI SHREE RAM ")+10),"-",STR_PAD_RIGHT);
echo "<br><hr>";
echo  str_pad(" JAI SHREE RAM",(strlen(" JAI SHREE RAM")+10),"+",STR_PAD_LEFT);
echo "<br><hr>";
echo  str_pad(" JAI SHREE RAM ",(strlen(" JAI SHREE RAM ")+7),".",STR_PAD_BOTH);

echo "<br><hr>";
echo str_repeat("Jai Siyaram <br>", 5);

echo "<br><hr>";
$myWord = "..Hello Gyuz....@@@";
echo "the word is $myWord and it's length is : ".strlen($myWord);
$my_trimmed_Word = trim($myWord,".@");
echo "<br>After triming the word is $my_trimmed_Word and it's length is : ".strlen($my_trimmed_Word);
$my_ltrimmed_Word = ltrim($myWord,".@");
echo "<br>After left triming the word is $my_ltrimmed_Word and it's length is : ".strlen($my_ltrimmed_Word);
$my_rtrimmed_Word = rtrim($myWord,".@");
echo "<br>After right triming the word is $my_rtrimmed_Word and it's length is : ".strlen($my_rtrimmed_Word);
$my_chopped_Word = chop($myWord,".@");   // always removes right side given character
echo "<br>After chopping the word is $my_chopped_Word and it's length is : ".strlen($my_chopped_Word);

echo "<br><hr><br>";
$myTaggedStr = "This is <b> Bold </b> and this one is <i> itallic </i>";
echo $myTaggedStr."<br><hr><br>";
$unTaggedMsg = strip_tags($myTaggedStr);    // stripped tagged string can be seen in inspect->sources
echo $unTaggedMsg;

echo "<br><hr><br>";
$myNormalStr = "This is Raja and i am learning Php.";
echo $myNormalStr."<br><hr><br>";
$myWordWrappedMsg = wordwrap($myNormalStr,0,"<br>");    // BREAK tag will get applied after given word irrespective to number of character given
echo $myWordWrappedMsg;
echo "<br><hr><br>";
$myWordWrappedMsg1 = wordwrap($myNormalStr,2,"<br>",TRUE);    // True argument affects output and BREAK tag will get applied after given number of character
echo $myWordWrappedMsg1;

*/
/*

echo "<br><hr>";
$meraStr = "This is a 'Secret Word' and it should be 'Safe' with 100 percent efforts.";
echo $meraStr;
echo "<br><hr>";
$meraSlashedMsg =  addslashes($meraStr);    // used to avoid dependency injection ( kinda encryption)
echo $meraSlashedMsg;
echo "<br><hr>";
$meraUnSlashedMsg = stripcslashes($meraSlashedMsg); // used to remove slashes
echo $meraUnSlashedMsg;
echo "<br><hr>";
$meraCSlashedMsg1 = addcslashes($meraStr,"ei"); // used to add slashes before each given character
echo $meraCSlashedMsg1;
echo "<br><hr>";
$meraCSlashedMsg2 = addcslashes($meraStr,"A..Z"); // used to add slashes before each given character from A to Z
echo $meraCSlashedMsg2;
echo "<br><hr>";
$meraCSlashedMsg3 = addcslashes($meraStr,"a..m"); // used to add slashes before each given character from a to m
echo $meraCSlashedMsg3;
echo "<br><hr>";
$meraUnCSlashedMsg1 = stripcslashes($meraCSlashedMsg3); // used to add slashes before each given character from a to m
echo $meraUnCSlashedMsg1;       // not so effective
echo "<br><hr>";
$meraUnCSlashedMsg2 = stripslashes($meraCSlashedMsg3); // used to add slashes before each given character from a to m

echo "<br><hr>";
$meraPersonalMsg = "This is 'very' <b>Suspicious</b>";
$myHtmlEncodesMsg = htmlentities($meraPersonalMsg); // shows the html quotes, tags in their respective html codes in the inspect->source 
echo $myHtmlEncodesMsg;

echo "<br><hr>";
$meraPersonalMsg2 = '<a href="www.rajababu.com">Raja Babu</a>';
$myHtmlEncodesMsg2 = htmlentities($meraPersonalMsg2); // shows the html quotes, tags in their respective html codes in the inspect->source 
echo $myHtmlEncodesMsg2;

echo "<br><hr>";
$meraPersonalMsg2 = '<a href="www.rajababu.com">click to go to rajababucom</a>';
$myHtmlEncodesMsg2 = htmlentities($meraPersonalMsg2,ENT_QUOTES); // shows the html quotes, tags in their respective html codes in the inspect->source 
echo $myHtmlEncodesMsg2;

echo "<br><hr>";
$meraPersonalMsgNo11 = '<a href="www.rajababu.com">click to go to rajababucom</a>';
$meraPersonalMsgNoQt = htmlentities($meraPersonalMsgNo11,ENT_NOQUOTES); // shows the html quotes(except double quotes), tags in their respective html codes in the inspect->source 
echo $meraPersonalMsgNoQt;


$meraPersonalMsgNoQt121 = html_entity_decode($myHtmlEncodesMsg); // shows the html quotes(except double quotes), tags in their respective html codes in the inspect->source 
$meraPersonalMsgNoQt122 = html_entity_decode($myHtmlEncodesMsg2); // shows the html quotes(except double quotes), tags in their respective html codes in the inspect->source 
$meraPersonalMsgNoQt123 = html_entity_decode($myHtmlEncodesMsg2); // shows the html quotes(except double quotes), tags in their respective html codes in the inspect->source 
$meraPersonalMsgNoQt124 = html_entity_decode($meraPersonalMsgNoQt); // shows the html quotes(except double quotes), tags in their respective html codes in the inspect->source 

echo "<br><hr>";
echo "<br><hr>";
echo $meraPersonalMsgNoQt121;
echo "<br><hr>";
echo "<br><hr>";
echo $meraPersonalMsgNoQt122;
echo "<br><hr>";
echo "<br><hr>";
echo $meraPersonalMsgNoQt123;
echo "<br><hr>";
echo "<br><hr>";
echo $meraPersonalMsgNoQt124;

echo "<br><hr>";
$meraPersonalMsgNo001 = '<a href="www.rajababu.com">Youtube</a>';
$meraPersonalMsgNoQt001 = htmlspecialchars($meraPersonalMsgNo001,ENT_NOQUOTES); // works same as htmlentities 
echo $meraPersonalMsgNoQt001;


$meraPersonalMsgNoQt121 = htmlspecialchars_decode($meraPersonalMsgNoQt001); // decodes the htmlspecialchars_decode
echo "<br><hr>";
echo "<br><hr>";
echo $meraPersonalMsgNoQt121;

echo "<pre>";
echo "<br><hr><br>";
print_r (get_html_translation_table());
echo "<br><hr><br>";
print_r (get_html_translation_table(HTML_SPECIALCHARS));
echo "<br><hr><br>";
print_r (get_html_translation_table(HTML_ENTITIES));

*/

echo "<br><hr><br>";
print_r(md5("Raja"));       // converts Raja into 32 bit hex code
echo "<br><hr><br>";
print_r(md5("Raja", FALSE));       // converts Raja into 32 bit hex code
echo "<br><hr><br>";
echo "The Length of md5 hex code is : ".strlen(md5("Raja", FALSE));
echo "<br><hr><br>";
print_r(md5("Raja", TRUE));       // converts Raja into 16 bit binary code
echo "<br><hr><br>";
echo "The Length of md5 Binary code is : ".strlen(md5("Raja", TRUE));

echo "<br><hr><hr><br>";
print_r(sha1("Raja"));       // converts Raja into 40 bit hex code
echo "<br><hr><br>";
print_r(sha1("Raja", FALSE));       // converts Raja into 40 bit hex code
echo "<br><hr><br>";
echo "The Length of sha1 hex code is : ".strlen(sha1("Raja", FALSE));
echo "<br><hr><br>";
print_r(sha1("Raja", TRUE));       // converts Raja into 20 bit binary code
echo "<br><hr><br>";
echo "The Length of sha1 Binary code is : ".strlen(sha1("Raja", TRUE));

echo "<br><hr><hr><br>";
$uuencoded_pass = convert_uuencode("Raja");
echo $uuencoded_pass."<br>";
echo "<br><hr><br>";
echo "The Type of uuencoded is : ";
var_dump($uuencoded_pass)."<br>";
echo "<br><hr><br>";
$uudecoded_pass = convert_uudecode($uuencoded_pass);
print_r($uuencoded_pass)."<br>";
echo "<br><hr><br>";
echo "The Type of uudecodede is : ";
var_dump($uudecoded_pass)."<br>";

echo "<br><hr><hr><br>";
$bin2hexWord = bin2hex("Raja");
echo $bin2hexWord."<br>";
echo "<br><hr><br>";
echo "The Type of bin2hex is : ";
var_dump($bin2hexWord)."<br>";
echo "<br><hr><br>";
$hex2binWord = hex2bin($bin2hexWord);
print_r($hex2binWord)."<br>";
echo "<br><hr><br>";
echo "The Type of hex2bin is : ";
var_dump($hex2binWord)."<br>";

echo "<br><hr><hr><br>";
$meraChar = "R";
$stringToAsciiVal = ord($meraChar);   // converts character to respective ASCII decomal value
echo "ASCII value of $meraChar is : ".$stringToAsciiVal."<br>";
echo "<br><hr><br>";
echo "The Type of ord function output on $meraChar is : ";
var_dump($stringToAsciiVal)."<br>";
echo "<br><hr><br>";

$AsciiToStringVal = chr($stringToAsciiVal);     // converts given ASCII decomal value into respective character value
print_r($AsciiToStringVal)."<br>";
echo "<br><hr><br>";
echo "The Type of chr function output on is : ";
var_dump($AsciiToStringVal)."<br>";
echo "<br><hr><hr><br>";

$myHexa = 0x48;
echo $myHexa."<br>";        // On normal printing of a Hexa code it shows the respective Decimal value
$AsciiToStringVal2 = chr($myHexa);     // converts given ASCII hexa value into respective character value
echo $AsciiToStringVal2."<br>";
echo "<br><hr><br>";
echo "The Type of chr function output is : ";
var_dump($AsciiToStringVal2)."<br>";

?>