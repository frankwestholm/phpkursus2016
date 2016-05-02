<?php 

$drinks[]="Jack Daniels";
$drinks[]="Jim Beam";
$drinks[]="Mojito";
$drinks[]="Martini";
$drinks[]="Saku kuld";

echo $drinks[0]; // kuvab midagi eraldi välja

echo "<pre>";
print_r ($drinks); // terve massiiv toob välja
echo "<\pre>";



$rand1 = rand(0, sizeof($drinks)-1);
$rand2 = rand(0, sizeof($drinks)-1);

echo "isa lemmikjook on $drinks[$rand1] aga poeg
kallaks jooki $drinks[$rand2]";

echo"<hr>";

for ($i = 0; $i < sizeof($drinks); $i++)
{
    echo"<li>$drinks[$i]";
    echo " - " .rand(1,10) . "£";
    echo "</li>";
}
echo"</ul>";

echo "<p>";

foreach ($drinks as $key => $val)
{
    $counter++;
    echo "$counter) Masiivi element
    indeksiga $key väärtus on $val <br>";
}
 ?>