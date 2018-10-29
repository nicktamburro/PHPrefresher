<?php

$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo "This is where we say $txt";
echo "Now give us " $x x $y " dollars!";

echo "We could also do it like this: " . $txt . "okay?";

//but when we do this:
function getMoney(){
	//this won't work, functions CAN'T see global variables from their scope
	echo "We want $x dollars, baby!"
}

//this will fail
getMoney()

//but this is all good:
echo "And now give us $y more dollars";

?>