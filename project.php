<?php
//q1
function replace($word,$value1,$value2){
    $result='';
    for($i=0;$i < len($word);$i++){
        if($value1[0]==$word[$i]){
            $check=true;
            echo $value1[0]."this is value 0";
            for($j=1;$j < len($value1);$j++){
                if($value1[$j]!=$word[$i + $j]){
                    $check=false;
                    break;
                

            }
          
        }
        if($check){
            echo $check ."check value";
            $result.=$value2;
            $i+=len($value1) - 1;
            continue;
        }
      
    }
    else{
        $result.=$word[$i];
    }
  }
  return $result;
}
echo replace('Hello','He','ABs'). "<br>";

//q2
// function replace($word,$value1,$value2){
//     $result='';
//     for($i=0; $i<len($word);$i++){
//         if ($value1 == $word[$i]) {
//             $result .= $value2;
//         } else {
//             $result .= $word[$i];
//         }
//     }
//     return $result;

// }
// echo replace('Hello','lo','Z'). "<br>";


//Remove all spaces right sentence
//q3
function r_trim($word){
    $check=false;
    $result='';
    for($i=len($word)-1;$i>=0;$i--){
        if($word[$i]!=" "){
          $check=true;
          $result.=$word[$i];

        }
        else if($check){
            $result.=$word[$i];
        }


    }
    return reverse( $result) ;
}
echo r_trim('abdo ');

//Delete all spaces left sentence
//q4
function l_trim($word)
{
    $check=false;
    $result="";
 for($i=0; $i<len($word);$i++){
    if($word[$i]!=" "){
       $check=true;
       $result.=$word[$i];
    }
    else if($check){
      $result .= $word[$i];
    }

 }
 return $result;

}
echo(l_trim('   Abdulrahman'));

//Define the length of string
//q5
function len($sentence){
    $counter=0;
    while(isset($sentence[$counter])){
            $counter++;





    }
    return $counter;

}
echo(len('Heys'));



//q6
function indexword($sentence,$word,$index=0){
    echo $sentence;
    $counter=0;
    for($i=0; $i < strlen($sentence);$i++){
        // for($j=0; $j<len($word);$j++){
            if($sentence[$i]==$word[0]){
                $counter++;
                if($counter==$index){
                    return "<br> this is index = >". $i. "<br>";


                }

            }
          
    // }
      

    }
    return "false";

}
echo"----"."<br>";
echo(indexword("hello world", "le",2));

//q7
// function word($s){

//     for($i=0; $i < strlen($s) ; $i++ ){
//         if($s[$i]==" "){
//             $GLOBALS['counter']++;
//         }
//     }
//     echo"this is word count=>";
//     echo($GLOBALS['counter']);
// }
// word("abdo Word Me");
// echo "<br>";

//Revere string
//q8
function reverse($s){
    // $reverese=[];
 
    $reverse='';

    for($x=strlen($s)-1;$x >= 0; $x--)
    
    {
        $reverse.=$s[$x];

    }
    return  $reverse;


}

echo(reverse('HEELO WorD'));

//q9
function sum(...$numbers){
    $sum=0;
    for($i=0; $i < len($numbers);$i++){
        $sum+=$numbers[$i];
    }
    return "sum=". $sum;
}
echo(sum(10,20,20));

//q10
function factorial($number){
    $fact=1;
    for($i=$number; $i>0;$i--)
    {
        $fact*=$i;
    }
    return "factorial=".$fact;
}
echo factorial(5);

//q11

function _sub(...$numbers){
    $min=0;
    for($i=0; $i < len($numbers);$i++){
        $min-=$numbers[$i];
    }
    return "mins=". $min;
}
echo(_sub(10,20,20));

//q12
function is_odd($number){
    if ($number % 2 == 1 ){
        return "true";
    }
    else{
        return "false";
    }
}
echo is_odd(5);
//q13
function is_even($number){
    if ($number % 2 == 0 ){
        return "true";
        }
        else{
            return "false";
            }
}
echo is_even(5);

//q14
function is_prime($number) {
    if ($number < 2) {
        return "false";
    }
    else{
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i == 0) {
                return "it is not prime number";
            }
            return  " it is prime true";
        }
        

    }

 

}

echo is_prime(6);

//q15
function Multiplication(...$numbers){
    $multi=1;
    for($i=0; $i < len($numbers);$i++){
        $multi*=$numbers[$i];
    }
    return "multi=". $multi;
}
echo(Multiplication(10,20,20));


//q16
function isString($value) {
   
        if (gettype($value) == 'string') {
            return 'true';
        }
 

    return 'false';
}

echo isString(5);


//q16
echo "****************"."<br>";
function f_trim($word){
    $result='';
    for($i=0; $i < len($word); $i++){
        if($word[$i]==" "){
            continue;
        }
        else{
            $result.=$word[$i];
            // return $word[$i];
        }
    }
    return $result;

}
echo (f_trim(" Abdo    Bajaman "));


echo "************* is number <br>";
//q17
// function isnumber($number){
//     if( $number === ""){
//         return 'True';
//     }
//     else if($number >= 0 || $number <=0){
//         return "false";
//     }
//     else{
//         return 'false';
//     }

    
// }
// echo isnumber(2);


//q18
function myobs($number){

    if($number < 0 ){
        return $number * (-1);

    }
    else{
        return $number;
    }
}

echo myobs(-10);


//q19
function _min(...$numbers){

    $min=$numbers[0];

    
    for($i=1; $i < len($numbers);$i++){
        // $multi*=$numbers[$i];
        if($numbers[$i] < $min){
            $min=$numbers[$i];
        }
     
    }
    return $min;

}
echo _min(20,120,200,5,100,102);

//q20
function _max(...$numbers){

    $min=$numbers[0];

    
    for($i=0; $i < len($numbers);$i++){
        // $multi*=$numbers[$i];
        if($numbers[$i] > $min){
            $min=$numbers[$i];
        }
     
    }
    return $min;

}
echo _max(20,120,4,5,100,200);


//q21
echo "<br>";
function _range($value1,$value2){
    for($i=$value1; $i<= $value2;$i++){
        echo $i;
    }
}
 echo _range(1,20);

 
//  echo "<br>"."array";
//  $s='test';
//  $check=str_split("test");
//  echo $check;

echo "*********************************"."<br>";
//q22
function tolower($word) {
    $lower = "";
    for ($i = 0; $i < strlen($word); $i++) {
        $asc = myord($word[$i]);
        if ($asc >= 65 && $asc <= 90) {
            $lower .= mychar($asc + 32);
        } else {
            $lower .= $word[$i];
        }
    }
    return $lower;
}

// Usage example
$word = "HHhHHHH";
echo tolower($word); 


echo tolower("WWaaaa");

//q23
function toupper($word) {
    $upper = "";
    for ($i = 0; $i < len($word); $i++) {
        $asc = myord($word[$i]);
        // echo 'this is asci'. $asc;
        if ($asc >= 97 && $asc <= 122) {
            $upper .= mychar($asc - 32);
        } else {
            $upper .= $word[$i];
        }
    }
    return $upper;
}


$word = "hello";
echo toupper($word); 
// echo ord('A');
// echo ord('a');
//q24
echo "/////////////////////////////////////<br>";
function myord($letter){
    $arr=array('A'=>65
,'B'=>66
,'C'=>67
,'D'=>68
,'E'=>69
,'F'=>70
,'G'=>71
,'H'=>72
,'I'=>73
,'J'=>74
,'K'=>75
,'L'=>76
,'M'=>77
,'N'=>78
,'O'=>79
,'P'=>80
,'Q'=>81
,'R'=>82
,'S'=>83
,'T'=>84
,'U'=>85
,'V'=>86
,'W'=>87
,'X'=>88
,'Y'=>89
,'Z'=>90
,
'a' => 97,
'b' => 98,
'c' => 99,
'd' => 100,
'e' => 101,
'f' => 102,
'g' => 103,
'h' => 104,
'i' => 105,
'j' => 106,
'k' => 107,
'l' => 108,
'm' => 109,
'n' => 110,
'o' => 111,
'p' => 112,
'q' => 113,
'r' => 114,
's' => 115,
't' => 116,
'u' => 117,
'v' => 118,
'w' => 119,
'x' => 120,
'y' => 121,
'z' => 122);
    foreach($arr as $value=>$key){
        // echo "this value". $value . "this key". $key;
        if($letter==$value){
            return $key;
            }

    }
    return false;

}
echo myord('a');

//q25
function mychar($asci){
    $arr = array(
        65 => 'A',
        66 => 'B',
        67 => 'C',
        68 => 'D',
        69 => 'E',
        70 => 'F',
        71 => 'G',
        72 => 'H',
        73 => 'I',
        74 => 'J',
        75 => 'K',
        76 => 'L',
        77 => 'M',
        78 => 'N',
        79 => 'O',
        80 => 'P',
        81 => 'Q',
        82 => 'R',
        83 => 'S',
        84 => 'T',
        85 => 'U',
        86 => 'V',
        87 => 'W',
        88 => 'X',
        89 => 'Y',
        90 => 'Z',
        97 => 'a',
        98 => 'b',
        99 => 'c',
        100 => 'd',
        101 => 'e',
        102 => 'f',
        103 => 'g',
        104 => 'h',
        105 => 'i',
        106 => 'j',
        107 => 'k',
        108 => 'l',
        109 => 'm',
        110 => 'n',
        111 => 'o',
        112 => 'p',
        113 => 'q',
        114 => 'r',
        115 => 's',
        116 => 't',
        117 => 'u',
        118 => 'v',
        119 => 'w',
        120 => 'x',
        121 => 'y',
        122 => 'z');
        foreach($arr as $value =>$key){
            if($asci == $value){
                return $key;
            }
        }
        return false;

}
echo mychar(90);


//q26

function first_index($array){
    for($i=0; $i< len($array);$i++){
        return $array[$i];
        
    }
    return null;
}
echo first_index([222,2,3,4,5,6]);




//q27
function last_index($array){
    for($i=0; $i< len($array);$i++){
        if($i==len($array)-1)
        {
            return $array[$i];
        }
        
    }
    return null;
}
echo last_index([222,2,3,4,5,23432432]);

// echo _max([1,2,3,199,4,5]);
echo "************************** <br>";
//Q28
function _sort_asc($arr) {
   

    for ($i = 0; $i < len($arr) - 1; $i++) {
        for ($j = $i + 1; $j < len($arr); $j++) {
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    
    return $arr;
}


// echo _sort([4,123,44,22,33,123,445,5]);
print_r(_sort_asc([4,123,44,22,33,123,445,5]));


//Q29
function _substring($word,$start,$end=null){
    $string='';

  
    if ($end < $start) {
        for ($i = $start; $i >= $end; $i--) {
            $string .= $word[$i];
        }
    } else {
        for ($i = $start; $i < $end; $i++) {
            $string .= $word[$i];
        }
    }
    return $string;
}
echo "sub",'<br>';
echo _substring('Hello word',5,1);



// function _array_slice($arr, $value, $index) {
//     $result = [];

//     for ($i = 0; $i < count($arr); $i++) {
//         if ($value == 0) {
//             if ($index >= 0) {
//                 continue;
//             }
//         }

//         if ($i == $index) {
//             $result[] = $arr[$i];
//         }
//     }

//     return $result;
// }

// echo "**** <br>";
// print_r(_array_slice([1, 2, 3, 4, 5], 0, 1));
//Q30

function _array_fill($arr,$value){

$arr=$value;
return $arr;


}
// echo _array_push([1,2,3,4,5,6,7],10);

print_r(_array_fill([1,2,3,4,5,6,7],10));


//Q31
function _array_push($arr,...$string){
    $push = [];
    for($i=0; $i < len($arr);$i++){
      
            $push[]=$arr[$i];
        
    }
    foreach ($string as $string) {
        $push[] = $string;
    }
    return $push;

}

echo '<br>  dsffsd';
// echo (_array_push([1,2,3,4,5],100));
print_r( _array_push([1,2,3,4,5],100,200));

//Q32
function _array_removeat($arr,$index){

    $newArr=[];
    for($i=0; $i<len($arr);$i++){
        if($i==$index){
            continue;
            }else{
                $newArr[]=$arr[$i];
                }
        


    }
    return $newArr;
}
echo "delete by index <br>";
print_r(_array_removeat([1,2,3,4,5],3));


//Q33

//Push at specific index and remove the current element
function _array_pushat($arr,$value,$index){
    $newArr=[];
    for($i=0;$i<len($arr);$i++){
        if($i==$index){
            // $newArr[]=$arr[$i];
            $newArr[]=$value;
            }else{
                $newArr[]=$arr[$i];
                }

    }
    return $newArr;
}
echo "add by index with removing current index <br>";
print_r(_array_pushat([1,2,3,4,5,6],10,1));

//Q34
function _arr_Push($arr, $value, $index) {
    $newArr = [];

    for ($i = 0; $i < count($arr); $i++) {
        if ($i == $index) {
            $newArr[] = $value;
        }
        $newArr[] = $arr[$i];
    }

    return $newArr;
}

echo "<br>add by index with out removing current index <br>";
print_r(_arr_Push([1, 2, 3, 4, 5, 6], 10, 
1));


//Q35
echo "count letter <br>";
function count_letter($word,$letter){
    $counter=0;
    for($i=0; $i< len($word);$i++){
        if($word[$i]==$letter){

           $counter++;
        }
    }
    return $counter;
};

echo count_letter("Hello","o");

//Q36

function Array_key($array) {
    $keys = [];
    foreach ($array as $key => $value) {
        $keys[]= $key . '<br>';
    }
    return $keys;
}
print_r( Array_key( array(
    'key1' => 'Value 1',
    'key2' => 'Value 2',
    'key3' => 'Value 3'
)));

//Q37
echo "******************* <br> ";
function Array_value($array) {
    foreach ($array as $key => $value) {
        echo $value ."<br>";
    }
}


print(Array_value(array(
    'key1' => 'Value 1',
    'key2' => 'Value 2',
    'key3' => 'Value 3'
)));
// function Array_keyLast($array) {
//     for($i=0; $i<len($array);$i++){
//         return $array[len($array)-1];
//     }

// }
  
//     echo Array_keyLast( array(
//         'key1' => 'Value 1',
//         'key2' => 'Value 2',
//         'key3' => 'Value 3'
//     ));

//Q38
echo "last key <br>";
function Array_lastkey($array) {
    $lastkey = '';
    foreach ($array as $key => $value) {
        $lastkey = $key;
    }
    return $lastkey;
}

print(Array_lastkey(array(
    'key1' => 'Value 1',
    'key2' => 'Value 2',
    'key3' => 'Value 3'
)));



//Q39
echo "<br> first key <br>";
function Array_firstkey($array) {
    $firstkey = '';
    foreach ($array as $key => $value) {
        $firstkey = $key;
        return $firstkey;
    }
 
}

print(Array_firstkey(array(
    'key1' => 'Value 1',
    'key2' => 'Value 2',
    'key3' => 'Value 3'
)));


//Q40
echo "<br> first value <br>";
function Array_firstvalue($array) {
    $firstvalue = '';
    foreach ($array as $key => $value) {
        $firstvalue = $value;
        return $firstvalue;

    }
}

print(Array_firstvalue(array(
    'key1' => 'Value 1',
    'key2' => 'Value 2',
    'key3' => 'Value 3'
)));

//Q41
echo "<br> last value <br>";
function Array_lasttvalue($array) {
    $lastvalue = '';
    foreach ($array as $key => $value) {
        $lastvalue = $value;

    }
    return $lastvalue;

}

print(Array_lasttvalue(array(
    'key1' => 'Value 1',
    'key2' => 'Value 2',
    'key3' => 'Value 3'
)));

//Q42
function _pi(){
    return 3.14;
}

echo _pi();

// function _sqrt($num,$sqrt_num){
//     $result=0;
//     if($num<0){
//         return "wrong number";

//         }
//         else{
//             $result=$num / $sqrt_num;
//         }


//         return $result;

// }

//Q44
function _array_search($arr,$letter)
{
    $array=[];
     for($i=0 ; $i<len($arr);$i++){
        for($j=0; $j < len($letter);$j++){
            if($arr[$i]==$letter[$j]){
                return true;

            }

        }
     }
     return "true";
}


echo "<br>";

echo _array_search([1,2,3,4],2);


//Q45
function _pow($value1,$value2){
    $pow=$value1;
    if($value2==0)
    {
        return 1;
    }
    if($value2>0){
          for($i=1; $i<$value2;$i++){
           $pow *= $value1;
        //    return $i;
        // echo '<br>';
        // echo $pow;


    
      }
    }
    return $pow;

    
       
    
   
    // return $value1;
}

echo "<br> pow:";
 echo _pow(2,6);

 //Q46
// (array) $arr===$arr;
 function _is_bool($num){
    if((bool)$num){
        return "true";
    }
    else{
        return "false";
    }
 }

 echo "bool :";
 echo _is_bool(0);


//  isset()
//Q47
 function _is_array($arr){

    return (array) $arr===$arr ?"true":"false";
    // if((array) $arr===$arr ){
    //     return 'true';
    // }
    // else{
    //     return assoc($arr);
    // }


 }

 echo "<br>is array <br>";
 echo _is_array(12);

 //Q48
 function is_in_array($arr,$value){
    for($i=0; $i < len($arr); $i++){
        return $value==$arr[$i] ? "True" : "false";
     
 }
}
echo "<br> is in array :".is_in_array([2,3,4,5,6],2222);

// print_r( _max([1,2,3,4,5,6]));

//Q49
function _array_union($array1, $array2) {
    $union = [];

    foreach ($array1 as $element) {
        $union[] = $element;
    }

    foreach ($array2 as $element) {
        $union[] = $element;
    }

    return $union;
}

// $numbers1 = [1, 2, 3];
// $numbers2 = [2, 3, 4, 5];

// $union = _array_union($numbers1, $numbers2);
// echo "this is union";

// print_r($union);

//Q50
function _explode($value, $word) {
    $result = [];
    $substring = '';
    
    for ($i = 0; $i < len($word); $i++) {
        if ($word[$i] === $value) {
          
   
                $result[] = $substring;
                $substring = '';
            
            
        } 
        else {
            $substring .= $word[$i];
        }
        
    }

        $result[] = $substring;
    



    

    return $result;
}

$delimiter = ':';
$string = 'Abdo, : Bajaman, Abdullah';

$result = _explode($delimiter, $string);

echo "<br>";
print_r($result);
// var_dump($result);

//Q51

function _array_reverse($arr){
    $array=[];
    for($i=len($arr)-1; $i >= 0; $i--){
        $array[]=$arr[$i];
    }
    return $array;
}


echo "reverse <br>";
print_r(_array_reverse([1,2,3,4,5,6,7,8,9]));


//Q52

function _array_unshift($arr, ...$strings) {
    $push = $strings;
    
    foreach ($arr as $element) {
        $push[] = $element;
    }
    
    return $push;
}

$array = ['c', 'd'];
$result = _array_unshift($array, 'a', 'b', 1);

echo "unshift without array_merge <br>";
print_r($result);


// function multi_array_intersect(...$arrays) {
//     if (empty($arrays)) {
//         return [];
//     }

//     $result = $arrays[0];

//     for ($i = 1; $i < count($arrays); $i++) {
//         $currentArray = $arrays[$i];
//         $result = intersectTwoArrays($result, $currentArray);
//         if (empty($result)) {
//             // If the intersection becomes empty, no need to continue
//             break;
//         }
//     }

//     return $result;
// }

//Q53
function intersect_2arrays($array1, $array2) {
    $intersect = [];
    for($i=0; $i < len($array1);$i++){
        for($j=0; $j<len($array2);$j++)
        {

                if($array1[$i] == $array2[$j])
                {
                    $intersect[]=$array1[$i];
                 }
         }
                    
                    // return $intersect;
    }

    // foreach ($array1 as $element) {
    //     if (is_in_array($element, $array2)) {
    //         $intersect[] = $element;
    //     }
    // }

    return $intersect;
}
$array1 = [2, 4, 6, 8, 10];
$array2 = [1, 2, 3, 4, 5];

echo "intersect <br>";
$result = intersect_2arrays($array1, $array2);
print_r($result);


//54
function _array_intersect(...$arrays) {
        if (empty($arrays)) {
            return [];
        }
    
        $result = $arrays[0];
    
        for ($i = 1; $i < count($arrays); $i++) {
            $currentArray = $arrays[$i];
            $result = intersect_2arrays($result, $currentArray);
            if (empty($result)) {
                // If the intersection becomes empty, no need to continue
                break;
            }
        }
    
        return $result;
    }


    echo "multi inter <br>";
    
    $array1 = [2, 4, 6, 8, 10];
    $array2 = [1, 2, 3, 4, 5];
    $array3 = [2, 4, 6, 8];
    $array4 = [4, 8, 12, 16];
    
    $result = _array_intersect($array1, $array2, $array3, $array4);
    print_r($result);

//Q55
    function _is_init($value){
        return (int) $value === $value ? "true" : "false";
    }

    echo _is_init(10);

//Q55
function _is_string($value){
    return (string) $value === $value ? "true" : "false";
}

echo _is_string(8);

//Q56
function _is_double($value){
    return (double) $value === $value ? "true" : "false";
}

echo _is_double(8.43);


//Q57
function _str_pos($sentence,$word,$index=0){
    $counter=0;
    for($i=0; $i < strlen($sentence);$i++){
        // for($j=0; $j<len($word);$j++){
            if($sentence[$i]==$word[0]){
                $counter++;
               
                    return 'true';


                

            }
          
    // }
      

    }
    return "false";

}


echo " <br>this strpos <br>";
echo _str_pos('abdo salim','a');


//58
function _str_contain($haystack, $needle) {
    return _str_pos($haystack, $needle) !== false ? "true" : "false";
}


echo (_str_contain('Hello world', 'sadsas'));

//Q59
function _ends_with($word, $value) {


    if (len($value) > len($word)) {
        return false;
    }

    for ($i = 1; $i <= len($value); $i++) {
        if ($word[len($word) - $i] !== $value[len($value) - $i]) {
            return 'false';
        }
    }

    return 'true';
}

echo 'This is ends_with:<br>';
echo _ends_with('Hello world', 'ld');


//Q60
function _starts_with($word, $value) {


    if (len($value) > len($word)) {
        return false;
    }

    for ($i = 0; $i < len($value); $i++) {
        if ($word[$i] !== $value[$i]) {
            return "false";
        }
    }

    return "true";
}

echo 'This is start_with:<br>';
echo _starts_with('Hello world', 'H');


//Q61
function sum_array($array){
    $sum=0;
    foreach ($array as $item){
        $sum+=$item;
        }
        return $sum;

}

$arr=[2345,789,12];
echo "summ array <br>";
print_r(sum_array($arr));


//Q62
function min_array($array){
    $min=$array[0];
    foreach ($array as $item){
        if ($item<$min){    
            $min=$item; 
            }
            }
            return $min;
            
}
$arr=[2345,789,12];
echo "<br>minimum value in the array :".min_array($arr)."<br>";

//Q63
function max_array($array){
    $max=$array[0];
    foreach ($array as $item){
        if ($item>$max){
            $max=$item;
            }
            }
            return $max;


}

$arr=[2345,789,12];
echo "<br>maximum value in the array :".max_array($arr);



//Q64
function custom_array_split($array, $size) {
    $result = [];
   
    $i = 0;

    while ($i < len($array)) {
        $check = array_slice($array, $i, $size);
        $result[] = $check;
        $i += $size;
    }

    return $result;
}


echo "here split <br>";

$chunks = custom_array_split([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 3);

print_r($chunks);

//Q65
function _sort_desc($arr) {
   

    for ($i = 0; $i < len($arr) - 1; $i++) {
        for ($j = $i + 1; $j < len($arr); $j++) {
            if ($arr[$i] < $arr[$j]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    
    return $arr;
}


echo "here sort desc <br>";
print_r(_sort_desc([4,123,44,22,33,123,445,5]));

//Q66
function _strcamp($value1, $value2) {
    $s = "";

    for ($i = 0; $i < strlen($value1); $i++) {
            for ($j = 0; $j < strlen($value2); $j++) {
                if ($value1[$i] == $value2[$j]) {
                    $s .= $value1[$i];
                    break;
                }
                
            }
        
    }

    return $s;
}

echo "strcamp <br>";
echo _strcamp("Abdulrahman", 'Ad');

//Q67

function _year() {
    $currentdate = date("Y:m:d:h:i:sa");
    $separator = ($currentdate[4] === ':') ? ':' : '/';

    $year = _explode($separator, $currentdate);
   $year = $year[0];
    

    return $year;
}

$currentYear = _year();
echo "Current Year: " . $currentYear;

//Q68
function _month() {
    $currentdate = date("Y:m:d:h:i:sa");
    $separator = ($currentdate[4] === ':') ? ':' : '/';

    $month = _explode($separator, $currentdate);
    $month = $month[1];
    

    return $month;
}


echo "Current month: " . _month() ;



//Q69
function _Day() {
    $currentdate = date("Y:m:d:h:i:sa");
    $separator = ($currentdate[4] === ':') ? ':' : '/';

    $month = _explode($separator, $currentdate);
   $month = $month[2];
    

    return $month;
}


echo "Current Day: " . _Day() ;

//Q70
function _hour() {
    $currentdate = date("Y:m:d:h:i:sa");
    $separator = ($currentdate[4] === ':') ? ':' : '/';

    $month = _explode($separator, $currentdate);
   $month = $month[3];
    

    return $month;
}


echo "Current Hour: " . _hour() ;


//Q71
function _minutes() {
    $currentdate = date("Y:m:d:h:i:sa");
    $separator = ($currentdate[4] === ':') ? ':' : '/';

    $month = _explode($separator, $currentdate);
   $month = $month[4];
    

    return $month;
}


echo "Current Hour: " . _minutes() ;


//Q72
function _seconds() {
    $currentdate = date("Y:m:d:h:i:s:a");
    $separator = ($currentdate[4] === ':') ? ':' : '/';

    $month = _explode($separator, $currentdate);
   $month = $month[5];
    

    return $month;
}


echo "Current Hour: " . _seconds() ;


//Q73
function _IS() {
    $currentdate = date("Y:m:d:h:i:s:a");
    $separator = ($currentdate[4] === ':') ? ':' : '/';

    $month = _explode($separator, $currentdate);
   $month = $month[6];
    

    return $month;
}


echo "Current night morning: " . _IS() ;

// function _year($date) {
//     $separator = ($date[4] === '-') ? '-' : '/';

//     $dateParts = _explode($separator, $date);
//     $year = $dateParts[0];
//     return $year;
// }

// $date = "2022/11/15";
// echo "Year: " . _year($date);

// function _month($date) {
//     $separator = ($date[4] === '-') ? '-' : '/';

//     $dateParts = _explode($separator, $date);
//     $year = $dateParts[0];
//     return $year;
// }

// $date = "2022/11/15";
// echo "Year: " . _year($date);


//Q74
function _random($v1,$v2){
    $sec=date('s');
    $calc=_max($v1,$v2);
    // echo $calc;
    // echo $sec;
    $div=$calc / 59;
    
    return $random=ceil($div * $sec);

}
echo _random(1,2222);


//Q75
function _ceil($number) {
    $integer = (int) $number;
    $fraction = $number - $integer;
    // echo $num;
   
    

    // echo $fractionPart;
    // echo $integerPart;

    if ($fraction > 0) {
        return $integer + 1;
    } else {
        return $integer;
    }
}


echo "ceil <br>";
echo _ceil(3.7);  


//Q76
function _floor($number) {
    $integer = (int) $number;
    $fraction = $number - $integer;
    // echo $num;
   
    

    // echo $fractionPart;
    // echo $integerPart;

    if ($fraction > 0) {
        return $integer;
    } else {
        return $integer - 1;
    }
}

echo "<br>floor ";

echo _floor(3.7);  

//Q77

function _array_div( $array1, $array2){

    $result=[];
    for($i=0 ; $i< len($array1); $i++){
        $check=false;

        for($k=0;$k < len($array2); $k++){
            if($array1[$i] == $array2[$k]){
                $check=true;
                break;

                
            }
            // else {
            //     $result[] = $array1[$i];
            //     // $result[] = $array2[$k];
              
                

            // }
        

          
        }
        if(!$check){
            $result[]=$array1[$i];
        }
    

    }
    return( $result);

}

echo "<br> Array div <br>";
print_r(_array_div([1,2,3,4,5,6,10,100],[1,23,44,5,6,7,8]));


//Q78
function is_upper($str) {
    return $str === toupper($str) ? "true" : "false";
}

echo is_upper('HELLO'); 
echo is_upper('Hello'); 


//Q79
function is_lower($str) {
    return $str === tolower($str) ? "true" : "false";
}

echo is_lower('HELLO'); 
echo is_lower('hello'); 

//Q80
function _array_chunk($array, $size) {
    $chunks = [];
    $length = count($array);
    for ($i = 0; $i < $length; $i += $size) {
        $chunks[] = array_slice($array, $i, $size);
    }
    return $chunks;
}

$array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
$chunks = _array_chunk($array, 3);
print_r($chunks);

//Q81   

function calculate_average($numbers) {
    $sum = sum_array($numbers);
    $count = len($numbers);
    return ($count > 0) ? ($sum / $count) : 0;
}

echo "avaerage";
echo calculate_average([1,2,3,4,5]);


//Q82
function convert_seconds_to_minutes($seconds) {
    return $seconds / 60;
}
//Q83
function count_vowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    for($i=0; $i<len($str); $i++){
        for($j=0; $j < len($vowels); $j++){
            if($str[$i] == $vowels[$j]){
                $count++;
            }

        }

    }
    return $count;
   
 
}

echo "count vowels <br>";
echo count_vowels('a,s,d,f,g,e');

//Q84
function _is_object($str){
    (object) $str === $str ? "true" : "false";
}


$value1 = "Hello";
class bss{

}
$value2 = new bss();


echo _is_object($value1);  
echo _is_object($value2); 


//Q85
function byte_to_kelo($value1){
    return $value1 / 1024;
}


//Q86
function kelo_to_mega($value1){
    return $value1 / 1024;
}


//Q87
function mega_to_giga($value1){
    return $value1 / 1024;
}


//Q88
function giga_to_tera($value1){
    return $value1 / 1024;
}



//Q89
function tera_to_Peta($value1){
    return $value1 / 1024;
}


//Q90
function peta_to_exabyte($value1){
    return $value1 / 1024;
}

//Q91
function kilo_to_byte($value1){
    return $value1 * 1024;
}


//Q92
function peta_to_tera($value1){
    return $value1 * 1024;
}

//Q93
function tera_to_giga($value1){
    return $value1 * 1024;
}

//Q94
function giga_to_mega($value1){
    return $value1 * 1024;
}


//Q95
function mega_to_killo($value1){
    return $value1 * 1024;
}



//Q96
function killo_to_byte($value1){
    return $value1 * 1024;
}


//Q97
function byte_to_mega($value1){

    return $value1 / (1024*1024);
}

//Q98
function byte_to_giga($value1){
    return $value1 / (1024 * 1024 * 1024);
}

//Q99

function byte_to_tera($value1){
    return $value1 / (1024 * 1024 * 1024);
}

//Q100


function byte_to_Peta($value1){
    return $value1 / (1024 * 1024 * 1024 * 1024);
}


//Q101
function byte_to_exabyte($value1){
    return $value1 / (1024 * 1024 * 1024 * 1024 * 1024);
}