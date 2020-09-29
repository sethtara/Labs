
<?php
$string = "Guru    Nanak   abc   def        ghi       ";
$string .=" ";
$length = strlen($string);
$word =0;
echo "revesrse : ";
for ($i=($length-1) ; $i >= 0 ; $i--)
{
    echo $string[$i];
    if($string[$i]!=" " and $string[$i-1]==" "){
        $word++;
    }
}
echo "<br>length of String :", $length;
echo "<br>the word length is ",$word;

