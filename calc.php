<?php
echo '|------Selamat datang di kalkulator cli ini.----|' ."\n";
menu:
echo "|----Menu----| ". "\n";
echo "| 1. + function ". "\n";
echo "| 2. - function ". "\n";
echo "| 3. x function ". "\n";
echo "| 4. % function ". "\n";
echo "| 5. Exit ". "\n";
$option = fwrite(STDOUT," choose function: ");
$option = trim(fgets(STDIN));
if ($option == 1) 
{
   $in = fwrite(STDOUT, "|---->enter number 1: ");
   $in1 = trim(fgets(STDIN));
   $in2 = fwrite(STDOUT, "|---->enter number 2: ");
   $in3 = trim(fgets(STDIN));
   $out = $in1 + $in3; 
 }
   elseif 
 ($option == 2) 
{
   $in = fwrite(STDOUT, "|---->enter number 1: ");
   $in1 = trim(fgets(STDIN));
   $in2 = fwrite(STDOUT, "|---->enter number 2: ");
   $in3 = trim(fgets(STDIN));
   $out = $in1 - $in3; 
}
 elseif ($option == 3) 
{
   $in = fwrite(STDOUT, "|---->enter number 1: ");
   $in1 = trim(fgets(STDIN));
   $in2 = fwrite(STDOUT, "|---->enter number 2: ");
   $in3 = trim(fgets(STDIN));
   $out = $in1 * $in3; 
 }
  elseif 
 ($option == 4) 
{
   $in = fwrite(STDOUT, "|---->enter number 1: ");
   $in1 = trim(fgets(STDIN));
   $in2 = fwrite(STDOUT, "|---->enter number 2: ");
   $in3 = trim(fgets(STDIN));
   $out = @($in1 / $in3);
     
}
 elseif ($option == 5) 
{
   exit;
 }
   else 
 {
  echo '           |---->wrong option!!!'."\n";
  goto menu;
 }
echo "|---->Function result is: $out"."\n";  
goto menu;
?> 
