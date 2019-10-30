<!Doctype html>
<html>
    <head>
    <title>Armstrong</title>
    </head>
    <body>
    <form action="Armstrong.php" method="post">
    <h1>Enter any number</h1>
    <input type="number" placeholder="eg. 153" name="input">
    <input type="submit" value="Check" name="submit">
    </form> 
    </body> 
</html>
<?php
if(isset($_POST['submit']))
{
    $number=$_POST['input'];
    $num1=$number;
    $digits=0
    while($num1!=0)
    {
        $num1/=10;
        $digits++;
        $num1=floor($num1);
    }
    $num1=$number;
    $sum=0;
    while($num1!=0)
    {
        $rem=$rem%10;
        $num1/=10;
        $sum=$sum+($rem ** $digits)
        $num1=floor($num1);

    }
    if($number==$sum)
    echo("<p>This is a armstrong number</p>");
    else
    echo("<p>This is not a armstrong number</p>");
}