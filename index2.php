<?php
if(isset($_POST['but']))
{

    $K=1;
    $X=strtoupper($_POST['text']);

    $alph=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    $N=count($alph);
    $b="";
    $n=strlen($X);

    for($i=0;$i<$n;$i++)
        for($j=0;$j<$N;$j++)
        {
            if($X[$i]==$alph[$j]) {
                $b= $b . $alph[ ($j+$K) % $N];
            }}

    echo $b;

}
?>