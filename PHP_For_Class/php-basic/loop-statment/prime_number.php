
<form method='post'>
enter a number<input type="text" name="fname">

<input type="submit" name="submit">
</form>
<?php
$b=$_POST["fname"];
$c=0;
if(isset($_POST["submit"]))
{
if($b==0 || $b==1)
{
  echo "Not Prime or Composite";
  exit();
}
for($i=2;$i<$b;$i++)
{
  if($b%$i==0)
  $c++;
break;
}
if($c==0)
// echo '<script>alert("prim number")</script>';
echo "$b prime number";
else
  echo "$b not a prime number";
}?>