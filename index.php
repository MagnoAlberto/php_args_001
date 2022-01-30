<?php
// var_dump($argc); //number of arguments passed 
// var_dump($argv); //the arguments passed

// $numargs = func_num_args();
// echo "Number of arguments: $numargs \n";
// if ($numargs >= 2) {
//     echo "Second argument is: " . func_get_arg(1) . "\n";
// }
// $arg_list = func_get_args();
// for ($i = 0; $i < $numargs; $i++) {
//     echo "Argument $i is: " . $arg_list[$i] . "\n";
// }

// print_r(
//     json_encode(
//         parse_str(implode('&', array_slice($argv, 1)), $_GET)
//     )
// );

// parse_str(implode('&', array_slice($argv, 1)), $_GET);

// parse_str($str, $output);
// echo $output['first'];  // value
// echo $output['arr'][0]; // foo bar
// echo $output['arr'][1]; // baz

//$numargs = func_num_args();
//$args = func_get_args();

// print_r([

//     //'numargs' => $numargs, 
//     //'args' => $args, 
// ]);


// foreach(array_slice($argv, 1) as $value)
// {
//   echo "$value\n" . PHP_EOL;
// }

// foreach ($_GET as $key => $value) {
//     # code...
//     echo $key . PHP_EOL;
//     echo "$value\n" . PHP_EOL;
// }

// $options = getopt("f:hp:");
// var_dump($options);


// $rest_index = null;
// $opts = getopt('a:b:', [], $rest_index);
// $pos_args = array_slice($argv, $rest_index);
// var_dump($pos_args);

// foreach( $argv as $argument ) {
//     if( $argument == $argv[ 0 ] ) continue;

//     $pair = explode( "=", $argument );
//     $variableName = substr( $pair[ 0 ], 2 );
//     $variableValue = $pair[ 1 ];
//     echo $variableName . " = " . $variableValue . "\n";
//     // Optionally store the variable in $_REQUEST
//     $_REQUEST[ $variableName ] = $variableValue;
// }


print_r(
    (!isset($_SERVER['SERVER_SOFTWARE']) && (php_sapi_name() == 'cli' || (is_numeric($_SERVER['argc']) && $_SERVER['argc'] > 0)))
);


var_dump(...$argv);

print_r($argv);
