<?php 
// --------------------Question 1--------------------------

// $color = array('white', 'green', 'red', 'blue', 'black');

//  echo "The memory of that scene for me is like a frame of film forever frozen at that
//  moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The
//  new president and his first lady. - Richard M. Nixon"

// --------------------Question 2--------------------------

// $color = array('white', 'green', 'red');

// echo "<ul>";
// echo "<li>" .$color[1]."</li>";
// echo "<li>" .$color[2]."</li>";
// echo "<li>" .$color[0]."</li>";
// echo "</ul>";

// --------------------Question 3--------------------------

// $cities= array( "Italy"=>"Rome", 
//            "Luxembourg"=>"Luxembourg", 
//               "Belgium"=>"Brussels", 
//               "Denmark"=>"Copenhagen", 
//               "Finland"=>"Helsinki", 
//                "France"=>"Paris", 
//              "Slovakia"=>"Bratislava", 
//              "Slovenia"=>"Ljubljana", 
//               "Germany"=>"Berlin",
//                "Greece"=>"Athens", 
//               "Ireland"=>"Dublin", 
//           "Netherlands"=>"Amsterdam",
//              "Portugal"=>"Lisbon", 
//                 "Spain"=>"Madrid", 
//                "Sweden"=>"Stockholm", 
//        "United Kingdom"=>"London", 
//                "Cyprus"=>"Nicosia", 
//             "Lithuania"=>"Vilnius", 
//        "Czech Republic"=>"Prague", 
//               "Estonia"=>"Tallinn", 
//               "Hungary"=>"Budapest" );

// foreach($cities as $Key => $Value) {
//     echo "The capital of ".$Key. " is ". $Value ."<br>";
// }

// --------------------Question 4--------------------------

// $x = array(1, 2, 3, 4, 5);

// unset($x[3]);
// echo var_dump($x);

// --------------------Question 5--------------------------

// $color = array(4 => 'white', 6 => 'green', 11=> 'red');

// echo $color[4];

// --------------------Question 6--------------------------

// --------------------Question 7--------------------------

// $x = array(1, 2, 3, 4, 5);

// $new_value = '$'; 
// $index = 2; 
  
// array_splice( $x, $index, 0, $new_value );  
// foreach ($x as $a)  
// { 
// echo "$a" ; 
// } 

// --------------------Question 8--------------------------

// $students = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
// //  asort($students);
//  ksort($students);

//  foreach($students as $A => $value) {
//     // ascending order sort by value
//     // echo "Key=" . "$A ";
//     // echo "<br>";
//     //ascending order sort by Key
//     echo "Value=" . "$value";
//     echo "<br>";
//   }

// --------------------Question 9--------------------------

// $Array = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
// 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

// Average
// $count = count($Array);
// $sum = array_sum($Array);
// $average = $sum/$count;
// $Temp = round($average); 
// echo "Average Temperature is:" . $Temp;

// Highest five Temps

// for($t = 0; $t < 5; $t++)
// {
//     echo "$Array[$t], ";
// }

// --------------------Question 10--------------------------
// --------------------Question 11--------------------------

// $array1 = array(array(70,40), array(25, 45));
// $array2 = array("example", "com");

// print_r(array_merge($array1,$array2));

// --------------------Question 12--------------------------


// --------------------Question 13--------------------------

// foreach (range(200, 250, 4) as $number) {
//     echo "$number, ";
//  }

// echo "<br>";

// --------------------Question 14--------------------------

// $x = array("abcd","abc","de","hjjj","g","wer");

// --------------------Question 15--------------------------

// $num=range(11, 20);
// shuffle($num);

// for ($a=0; $a < 10; $a++)
// {
// echo $num[$a].' ';
// }
// echo "<br>";

// --------------------Question 16--------------------------

// $num = array(17, 16, 13, 20, 14, 19, 0, 18, 15, 11, 12);

// $maxValue = max($num);
// $maxKey = array_search($maxValue, $num);

// $minValue = min($num);
// $minKey = array_search($minValue, $num);

// echo 'Max value is ' . $maxValue. ' at array index: ' . $maxKey;
// echo "<br>";
// echo 'Min value is ' . $minValue. ' at array index: ' . $minKey;

// --------------------Question 17--------------------------

// function minimum_exceptZero(Array $num) 
// {
// return min(array_diff(array_map('intval', $num), array(0)));
// }
// print_r(minimum_exceptZero(array(12,30,5,0,100,3))."<br>");

// --------------------Question 18--------------------------


// function maysam($number, $precision, $separator){
    
// $num_part=explode($separator, $number);
// $num_part[1]=substr_replace($num_part[1],$separator,$precision,0);


//     if($num_part[0]>=0){
//     $num_part[1]=floor($num_part[1]);

//     }else{
//     $num_part[1]=ceil($num_part[1]);
//     }

// $ceil_number= array($num_part[0],$num_part[1]);
// return implode($separator,$ceil_number);
// }
// print_r(maysam(1.155, 2, ".")."<br>");
// print_r(maysam(100.25781, 4, ".")."<br>");
// print_r(maysam(-2.9636, 3, ".")."<br>");

// --------------------Question 19--------------------------

// $color = array( 
//      "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
//    "numbers" => array( 1, 2, 3, 4, 5, 6 ),
//      "holes" => array( "First", 5 => "Second", "Third"));

//      echo $color[0]["color"];


// $superheroes = array(
//     array("name" => "Peter Parker", "character" => "Spider-Man",),
//     array("name" => "Tony Stark","character" => "Iron-Man",),
//     array("name" => "Clark Kent","character" => "Super-Man",)
// );
 

// echo $superheroes[0]["name"]; // Outputs: Peter Parker
// echo "<br>";

// --------------------Question 20--------------------------


// --------------------Question 24--------------------------
// $animals = array("Dog", "Tiger", "Cat", "Lion");

// sort($animals, SORT_NATURAL | SORT_FLAG_CASE);
// foreach ($animals as $key => $val) {
//     echo "Animals(" . $key . ") : " . $val . "<br>";
// }
//********************************************************************************************* */

// $x = array(array(1,2,4),
//            array(4,5,8),
//            array(7,8,9)
//         );

// $m = array("m" => 1,
//            "n" => 4,
//            "b" => 5,
//            "g" => 7);

//         $keys = array_keys($m);

//         for($i = 0; $i < count($m); $i++) {
//             echo $keys[$i] . "(<pre>";
//             foreach($m[$keys[$i]] as $key => $value) {
//                 echo $key . " : " . $value . "<pre>";
//             }
//             echo ")<pre>";
//         }
        
// foreach($salary as $k=>$soso){
// 	//if(is_array($soso)){}
// 	//if(gettype($soso) == 'array'){}
// 	if(is_array($soso)){
// 		foreach ($soso as $key => $value) {
// 			echo $key." ".$value."<br>";
// 		}
// 	}else{
// 		echo $k." ".$soso."<br>";
// 	}
// }
//-----------------------------------------------------

$multi = array(
    array(1,"anas","IT"),
    array(2,"jinan","Kitchen"),
    array(3,"heba","sales"),
    array(4,"ahmad","HR")
);

$mutli2 = array(
    array(1,2,3,4),
    array("anas","jinan","heba","ahmad"),
    array("IT","Kitchen","sales","HR"),
    
); 


$id    = array();
$names = array();
$dept  = array();

// $multi will printed as multidimessional array contain employee info 
// array(1,"anas","IT"),

array_push($id, $multi[0][0], $multi[1][0], $multi[2][0], $multi[3][0]);
print_r($id);
echo "<br>";

array_push($names, $multi[0][1], $multi[1][1], $multi[2][1], $multi[3][1]);
print_r($names);
echo "<br>";

array_push($dept, $multi[0][2], $multi[1][2], $multi[2][2], $multi[3][2]);
print_r($dept);
echo "<br>";



?>