<?php
//retrieve the Json file and converted it into php array
$j = file_get_contents('data.json');
$j = json_decode($j, true);

//print_r ($j);

//format the id
$i = count($j);
++$i;

// insert my variables into an array stored in a variable called $add
$add = $_POST;
$add['id'] = $i;
$name = $add['name'];
//print_r ($add);

// Store the image on my service
$t = $_FILES['pic']['tmp_name'];
$f = "img/$i.jpg";
move_uploaded_file( $t, $f);


// append my new array into the json array
array_push($j, $add);
// print_r ($j);







// take my updated json array, format it back into Json and Overwrite it into the Json file
$j = json_encode($j);
file_put_contents('data.json', $j);




header('location:header.php');
?>


