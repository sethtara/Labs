<?php
function prime($n)
{
    for($x=2; $x<$n; $x++)
    {
        if($n %$x ==0)
        {
            return 0;
        }
    }
    return 1;
}
for($y=1;$y<50;$y++){
    $z=prime($y);
    if ($z==1){
        echo $y."<br>";//for horizontal printing
    }
}