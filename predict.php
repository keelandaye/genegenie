<?php
session_start();

$eyes = true;
$blood = true;
$chin = true;
$dimples = true;
$hair = true;
$marfan = true;
$cystic = true;
$cysticsib = true;

//Checking inputs
//Eyes
if($_GET['meyes']) {
	$meyes = $_GET['meyes'];
} else {
	$eyes = false;
}

if($_GET['feyes']) {
	$feyes = $_GET['feyes'];
} else {
	$eyes = false;
}

//Blood
if($_GET['mblood']) {
	$mblood = $_GET['mblood'];
} else {
	$blood = false;
}

if($_GET['fblood']) {
	$fblood = $_GET['fblood'];
} else {
	$blood = false;
}

//Chin
if($_GET['mchin']) {
	$mchin = $_GET['mchin'];
} else {
	$chin = false;
}

if($_GET['fchin']) {
	$fchin = $_GET['fchin'];
} else {
	$chin = false;
}

//Dimples
if($_GET['mdimples']) {
	$mdimples = $_GET['mdimples'];
} else {
	$dimples = false;
}

if($_GET['fdimples']) {
	$fdimples = $_GET['fdimples'];
} else {
	$dimples = false;
}

//Hair
if($_GET['mhair']) {
	$mhair = $_GET['mhair'];
} else {
	$hair = false;
}

if($_GET['fhair']) {
	$fhair = $_GET['fhair'];
} else {
	$hair = false;
}

//Marfan
if($_GET['mmarfan']) {
    $mmarfan = $_GET['mmarfan'];
} else {
    $marfan = false;
}

if($_GET['fmarfan']) {
    $fmarfan = $_GET['fmarfan'];
} else {
    $marfan = false;
}

//Cystic Fibrosis
if($_GET['mcystic']) {
    $mcystic = $_GET['mcystic'];
} else {
    $cystic = false;
}

if($_GET['fcystic']) {
    $fcystic = $_GET['fcystic'];
} else {
    $cystic = false;
}

if($_GET['mcysticsib']) {
    $mcysticsib = $_GET['mcysticsib'];
} else {
    $cysticsib = false;
}

if($_GET['fcysticsib']) {
    $fcysticsib = $_GET['fcysticsib'];
} else {
    $cysticsib = false;
}

//Prediction algorithms

//Eye Colour
if ($eyes) {
	if($feyes == "brown" && $meyes == "brown") {
		$mleyes = array(88, 8, 4);
	} else if ($feyes == "brown" && $meyes == "green") {
		$mleyes = array(67, 29, 4);
	} else if ($feyes == "blue" && $meyes == "brown") {
		$mleyes = array(67, 17, 16);
	} else if ($feyes == "green" && $meyes == "green") {
		$mleyes = array(0, 92, 8);
	} else if ($feyes == "green" && $meyes == "blue") {
		$mleyes = array(0, 75, 25);
	} else if ($feyes == "blue" && $meyes == "blue") {
		$mleyes = array(0, 1, 99);
	} else if ($meyes == "brown" && $feyes == "green") {
		$mleyes = array(67, 29, 4);
	} else if ($meyes == "blue" && $feyes == "brown") {
		$mleyes = array(67, 17, 16);
	} else if ($meyes == "green" && $feyes == "blue") {
		$mleyes = array(0, 50, 50);
	}
}

// echo "<strong>Eye Colour</strong><br>";
// echo $brown."<br>";
// echo $green."<br>";
// echo $blue."<br>";
// echo $mleyes."<br>";

//blood Type

if ($blood) {
    if ($fblood == "ab" && $mblood == "ab") {
        $mlblood = array(0.0, 25, 25, 50);
    } else if ($fblood == "ab" && $mblood == "b") {
        $mlblood = array(0.0, 12.5, 37.5, 50);
    } else if ($fblood == "ab" && $mblood == "a") {
        $mlblood = array(0.0, 50, 12.5, 37.5);
    } else if ($fblood == "ab" && $mblood == "o") {
        $mlblood = array(0.0, 50.0, 50.0, 0.0);
    } else if ($fblood == "b" && $mblood == "b") {
        $mlblood = array(8.33, 0.0, 91.67, 0.0);
    } else if ($fblood == "a" && $mblood == "b") {
        $mlblood = array(6.25, 18.75, 18.75, 56.25);
    } else if ($fblood == "o" && $mblood == "b") {
        $mlblood = array(25, 0.0, 75, 0.0);
    } else if ($fblood == "a" && $mblood == "a") {
        $mlblood = array(50.0, 50.0, 0.0, 0.0);
    } else if ($fblood == "a" && $mblood == "o") {
        $mlblood = array(50.0, 50.0, 0.0, 0.0);
    } else if ($fblood == "o" && $mblood == "o") {
        $mlblood = array(100.0, 0.0, 0.0, 0.0);
    } else if ($mblood == "ab" && $fblood == "ab") {
        $mlblood = array(0.0, 33.33, 33.33, 33.33);
    } else if ($mblood == "ab" && $fblood == "b") {
        $mlblood = array(0.0, 33.33, 33.33, 33.33);
    } else if ($mblood == "ab" && $fblood == "a") {
        $mlblood = array(0.0, 33.33, 33.33, 33.33);
    } else if ($mblood == "ab" && $fblood == "o") {
        $mlblood = array(0.0, 50.0, 50.0, 0.0);
    } else if ($mblood == "b" && $fblood == "b") {
        $mlblood = array(50.0, 0.0, 50.0, 0.0);
    } else if ($mblood == "a" && $fblood == "b") {
        $mlblood = array(25.0, 25.0, 25.0, 25.0);
    } else if ($mblood == "o" && $fblood == "b") {
        $mlblood = array(50.0, 0.0, 50.0, 0.0);
    } else if ($mblood == "a" && $fblood == "a") {
        $mlblood = array(50.0, 50.0, 0.0, 0.0);
    } else if ($mblood == "a" && $fblood == "o") {
        $mlblood = array(50.0, 50.0, 0.0, 0.0);
    } else if ($mblood == "o" && $fblood == "o") {
        $mlblood = array(100.0, 0.0, 0.0, 0.0);
    }
}

// echo "<strong>Blood Type</strong><br>";
// echo $o."<br>";
// echo $a."<br>";
// echo $b."<br>";
// echo $ab."<br>";
// echo $mlblood."<br>";

//Cleft Chins

if ($chin) {
	if($fchin == "y" && $mchin == "y") {
		$mlchin = 100;
	} else if($fchin == "y" || $mchin == "y") {
		$mlchin = 75;
	} else {
		$mlchin = 0;
	}
}
// echo "<strong>Cleft Chin</strong><br>";
// echo $chin."<br>";
// echo $mlchin."<br>";

//Dimples

if ($dimples) {
	if($fdimples == "y" && $mdimples == "y") {
		$mldimples = 100;
	} else if($fdimples == "y" || $mdimples == "y") {
		$mldimples = 50;
	} else {
		$mldimples = 0;
	}
}
// echo "<strong>Dimples</strong><br>";
// echo $dimples."<br>";
// echo $mldimples."<br>";

//Hair Type

if ($hair) {
    if ($fhair == "curly" && $mhair == "curly") {
        $mlhair = array(100, 0, 0);
    } else if ($fhair == "curly" && $mhair == "wavy") {
        $mlhair = array(50, 50, 0);
    } else if ($fhair == "wavy" && $mhair == "wavy") {
        $mlhair = array(25, 50, 25);
    } else if ($fhair == "straight" && $mhair == "wavy") {
        $mlhair = array(0, 50, 50);
    } else if ($fhair == "curly" && $mhair == "straight") {
        $mlhair = array(0, 100, 0);
    } else if ($fhair == "straight" && $mhair == "straight") {
        $mlhair = array(0, 0, 100);
    } else if ($mhair == "curly" && $fhair == "curly") {
        $mlhair = array(100, 0, 0);
    } else if ($mhair == "curly" && $fhair == "wavy") {
        $mlhair = array(50, 50, 0);
    } else if ($mhair == "wavy" && $fhair == "wavy") {
        $mlhair = array(25, 50, 25);
    } else if ($mhair == "straight" && $fhair == "wavy") {
        $mlhair = array(0, 50, 50);
    } else if ($mhair == "curly" && $fhair == "straight") {
        $mlhair = array(0, 100, 0);
    } else if ($mhair == "straight" && $fhair == "straight") {
        $mlhair = array(0, 0, 100);
	}
}
// echo "<strong>Hair Type</strong><br>";
// echo $straight."<br>";
// echo $wavy."<br>";
// echo $curly."<br>";
// echo $mlhair."<br>";

//Marfan
if ($marfan) {
	if($fmarfan == "y" && $mmarfan == "y") {
		$mlmarfan = 75;
	} else if($fmarfan == "y" || $mmarfan == "y") {
		$mlmarfan = 50;
	} else {
		$mlmarfan = 0;
	}
}

//Cystic Fibrosis
if($mcystic == "y" && $fcystic == "y") {
    $mlcystic = 100;
} else if (($mcystic == "y" || $fcystic == "y") && ($mcysticsib == "y" || $fcysticsib == "y")) {
    if($mcystic == "y" && $fcysticsib == "y") {
        $mlcystic = 25;
    } else if ($fcystic == "y" && $mcysticsib == "y") {
        $mlcystic = 25;
    } else {
       $mlcystic = 2.5; 
    }
} else if ($mcysticsib == "y" && $fcysticsib == "y") {
    $mlcystic = 6.25;
} else if(($mcystic == "n" || $fcystic == "n") && ($mcysticsib == "y" || $fcysticsib == "y")) {
    $mlcystic = 0.625;
} else if ($mcystic == "y" || $fcystic == "y") {
    $mlcystic = 2.5;
} else {
    $mlcystic = 0.0625;
}


//Setting session variables
$_SESSION['eyes'] = $eyes;
$_SESSION['mleyes'] = $mleyes;

$_SESSION['blood'] = $blood;
$_SESSION['mlblood'] = $mlblood;

$_SESSION['chin'] = $chin;
$_SESSION['mlchin'] = $mlchin;

$_SESSION['dimples'] = $dimples;
$_SESSION['mldimples'] = $mldimples;

$_SESSION['hair'] = $hair;
$_SESSION['mlhair'] = $mlhair;

$_SESSION['marfan'] = $marfan;
$_SESSION['mlmarfan'] = $mlmarfan;

$_SESSION['cystic'] = $cystic;
$_SESSION['mlcystic'] = $mlcystic;

$_SESSION['detail'] = "false";

echo '<script type="text/javascript">
          window.location = "/results.php"
      </script>';
die();
?>
