
<!DOCTYPE html>
<html>
<body>
<?php
$month=array ("January","February","March","April","May","June","July","August","September","October","November","December");
$arrlength = count($month);
for ($x=0; $x < $arrlength; $x++)
{
   echo $month[$x];
   echo "\n";
}
echo "after sorting month in alphabetical order";

sort($month);
for ($x=0; $x < $arrlength; $x++)
{
   echo $month[$x];
   echo "\n";
}
$month=array ("January","February","March","April","May","June","July","August","September","October","November","December");
$arrlength = count($month);
echo "using for each";
foreach ($month as $value)
{
   echo "$value";
   echo "\n";
}
echo "sorting using foreach";
sort($month);
echo "The Sorted Array elements"	. "\n";
foreach ($month as $value)
{
   echo "$value";
   echo "\n";
}
?>
</body>
</html>
