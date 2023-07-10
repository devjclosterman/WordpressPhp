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
    )