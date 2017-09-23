
<!DOCTYPE html>
<html>
<body>
<?php
function isBitten($n)
{
if($n%2==0)
{
return TRUE;
}
else
{
return FALSE;
}
}
$r=rand(1,100);
echo "The charlie eating Time ".$r."\n";
$p=isBitten($r);
if ($p==TRUE)
 echo "Charlie ate my lunch!";
else
  echo "Charlie did not eat my lunch!";
?>
</body>
</html>
