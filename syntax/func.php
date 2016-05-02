<?php  

function getname($name)
{
    $names = "koer  123
kass    423434
kukk    332
kana    234234";

    $rows = explode("\n", $names);
    
       //print_r($rows);
    
    foreach ($rows as $key => $val)
    {
        $temp = explode("    ", $val);
        $surname[$temp[0]] = $temp[1];
    }
    
    print_r($surname);
    return $count;
    

}

getname("koer");

?>