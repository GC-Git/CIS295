<?php

// Store pi in a PHP Constant as it never changes
define('VALUE_OF_PI', 3.14159);

// Circle of radius 3
$r = 3;
$myArea = areaOfACircle($r);
print 'A circle with a radius of ' . $r . ' has an area of ' . $myArea;
print '<br><br>'; // Print some html line breaks

// Circle of radius 5
$r = 5;
$myArea = areaOfACircle($r);
print 'A circle with a radius of ' . $r . ' has an area of ' . $myArea;
print '<br><br>'; // Print some html line breaks

// Circle of radius 8
$r = 8;
$myArea = areaOfACircle($r);
print 'A circle with a radius of ' . $r . ' has an area of ' . $myArea;
print '<br><br>'; // Print some html line breaks

// Cylinder of radius 3 height 8
$r = 3;
$h = 8;
$myVolume = volumeOfACylinder($r,$h);
print 'A cylinder with a radius of ' . $r . ' and height of ' . $h . ' has a volume of ' . $myVolume;
print '<br><br>'; // Print some html line breaks

// Cylinder of radius 5 height 20
$r = 5;
$h = 20;
$myVolume = volumeOfACylinder($r,$h);
print 'A cylinder with a radius of ' . $r . ' and height of ' . $h . ' has a volume of ' . $myVolume;
print '<br><br>'; // Print some html line breaks

/*
 * Function: areaOfACircle($radius)
 *
 * Returns the area of a circle of the
 * given radius.
 */
function areaOfACircle($radius) {
    $area = VALUE_OF_PI * $radius * $radius;

    return $area;
}

/*
 * Function: volumeOfACylinder()
 *
 * Returns the volume of a cylinder of the
 * given radius and height.
 */
function volumeOfACylinder($radius, $height){
    $volume = VALUE_OF_PI * areaOfACircle($radius) * $height;

    return $volume;
}

?>