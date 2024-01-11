<?php



$intero = "5\n";
print_r($intero); 

$stringa = "Ciao io sono Domenico \n";
print_r($stringa); 

$booleano =" true\n";
print_r($booleano); 


$float = "1.5\n";
print_r($float); 







$text1 = "Marco"; 
$text2 = "hai"; 
$text3 = "sete"; 
$text4 = "?"; 
$text5 = "Perchè"; 
$text6 = '$text2'; 
$text7 = 'bevuto'; 
$text8 = "tutto";



echo $text1 . ' ' .$text2 . ' ' .$text3 . ' ' .$text4.' '.$text5.' '.$text2.' '.$text7.' '.$text8 . " \n";









$words1 = [ 
    'una', 
    67, 
    'vita', 
    'colle',
    'mi', 
    'rosso', 
    [ 
      'oscura', 
      'era', 
      89, 
      [ 
        'mezzo',
        [ 
          'cammin', 
          'Nel', 
          [ 
            'selva', 
            'la', 
            [ 
              'via', 
              'una', 
              true, 
            ] 
          ], 
        ] 
      ], 
    'ritrovai', 
    'per' 
    ], 
    'diritta' 
  ]; 
  $words2 = [ 
    'elemento1' => 25.89, 
    'elemento2' => 'nostra', 
    'elemento3' => [ 
                      'Virgilio', 
                      'smarrita', 
                      'ché' 
                    ] 
  ];



print_r($words1);

echo $words1 [6] [3] [1] [1].' '.$words1 [6] [3] [0].' '. ' di'  .' '.$words1[6] [3] [1] [0].' '.  'di' .' '.$words2['elemento2'].' '.$words1[2].' '. $words1[4].' '.$words1[6][4].' '.$words1[6][5].' '.$words1[0].' '.$words1[6][3][1][2][0].' '.$words1[6][0].' '. ','.$words2['elemento3'][2].' '.$words1[6][3][1][2][1].' '.$words1[7].' '.$words1[6][3][1][2][2][0].' '.$words1[6][1].' '.$words2['elemento3'][1].' '."\n"; 








$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
  ['name' => 'Giorgia', 'surname' => 'Bianchi', 'gender' => 'F'],
  ['name' => 'Optimus', 'surname' => 'Prime', 'gender' => 'NB']
];


foreach ($users as $user) {
  $name =$user['name'];
  $surname =$user ['surname'];
  $gender =$user ['gender'];


  if ($gender ==='M'){
    echo "Buongiorno Sig. $name $surname\n";
  }elseif ($gender=== 'F'){
    echo "Buongiorno Sig.ra  $name $surname\n";
  } else {
    echo" Buongiorno signor $name $surname\n ";
    
  }


}


 

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
  ['name' => 'Giorgia', 'surname' => 'Bianchi', 'gender' => 'F'],
  ['name' => 'Optimus', 'surname' => 'Prime', 'gender' => 'NB'],
];


$numeri =[1,3,5,7,9,11,15,18,22,30,36,80];
$sommanumeri=0;
$numeripari=0;
foreach($numeri as $elemento ){
  if($elemento %2 == 0){
    $sommanumeri += $elemento;
    $numeripari++;
  }

}
$media = $sommanumeri / $numeripari;

echo $numeripari.  "\n";  
echo $media. "\n";


echo "ho trovato  $numeripari  numeri pari  e la media è $media" ;






for($i=0; $i<=100 ;$i++){
if($i %3==0 && $i %5 ==0){
  echo $i.' '."HACKADEMY \n";
}elseif ($i %5==0 ){
  echo $i.' '."JAVASCRIPT \n";

}elseif ($i %3==0 ){
  echo $i.' '."PHP \n";
 
}else {
  echo $i." \n ";
}
}
