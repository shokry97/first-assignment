<?php

$day="الجمعة";

if($day=="السبت")
echo "saterday";

elseif($day=="الاحد")
echo "sunday";

elseif($day=="لاثنين")
echo "monday";

elseif($day=="الثلاثاء")
echo "tuesday";

elseif($day=="الاربعاء")
echo "wednesday";

elseif($day=="الخميس")
echo "thursday";

elseif($day=="الجمعة")
echo "friday";

else echo"please input again";

//******************************************************************
echo "<hr/>";

$username="tariq";
$password=789;

if(is_string($username) && is_string($password) &&  $username != NULL && $password!= NULL ){
    if ($username=="ahmed" && $password=="123"){
        echo "welcome ahmed";
    }
    else if($username=="tariq" && $password=="789"){
        echo "welcome tariq";

    }
    else
        echo"username and password is not correct";
}
else {
    echo "username or password is not string or equal null please try again";
}

echo "<hr/>";
//******************************************************************

$test=array(1);

if(gettype($test)=="string"){
    echo $test;
}

elseif(gettype($test)=="boolean"){
    if($test== TRUE){
        echo "yes";
    }
    else echo "no";
    
}

elseif(gettype($test)=="integer"){
    $test+=5;
    echo $test;
    
}

elseif(gettype($test)=="double"){
    echo $test*7;
}

else echo "error";





