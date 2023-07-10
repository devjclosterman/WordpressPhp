<?php
    $username = get_logged_in_user();
    echo "Hello $username!"
?>

<?php
    $age = 34;
    echo 'Joe is ' . $age . ' years old';


//escape characters must be in double quotes
    echo "This is line one \n";
    echo "This is line two";

$colors = array('red', 'blue', 'green', 'yellow');
echo $colors[1];
print_r( $colors );

$jason = array(
    'name' => 'Jason Closterman',
    'age' = 37,
    'job' => 'LinkedIn Learning',
    )

    print_r( $jason )
    echo $jason['job'];

    //multi-dimensional array
    $brothers = array(
        'joe' => array(
        'name' => 'Joe Casabona',
        'age' => 34,
        'job' => 'LinkedIn Learning',
        ),
        'phil' => array(
            'name' => 'Phil Casabana',
            'age' => 33,
            'job' => 'Gallery Curator',
        ),
        'bob' => array(
            'name' => 'Phil Casabana',
            'age' => 33,
            'job' => 'Gallery Curator',
        ),
        'rob' => array(
            'name' => 'Phil Casabana',
            'age' => 33,
            'job' => 'Gallery Curator',
        ),  
    );

    print_r( $brothers );
    echo $brothers['rob']['job'];

$a = 2;    
echo $a + 2; //output 4

//Modules operator
$a = 2;
$b = 3;
echo $b % $a; //Will print out 1;

//Dont forget PEMDAS 

echo 3**2;//9
echo 5**2 * ( 6 + 3 ) - 1; //224

<?php
   $results = array();
   $results[] = 9 + ( 2 * 5 ) - 11; //8
   $results[] = 18 / ( ( 3 * 6 ) - 9 ) * 3; //6
   $results[] = 3 * ( ( 24 / 2) - ( 3 * 4 ) * ( 2 * 6 ) ); //36

   echo $results[0] . "\n";
   echo $results[1] . "\n";
   echo $results[2] . "\n";
   print_r( $results )