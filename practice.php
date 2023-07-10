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
?>
<?php
   $results = array();
   $results[] = 9 + ( 2 * 5 ) - 11; //8
   $results[] = 18 / ( ( 3 * 6 ) - 9 ) * 3; //6
   $results[] = 3 * ( ( 24 / 2) - ( 3 * 4 ) * ( 2 * 6 ) ); //36

   echo $results[0] . "\n";
   echo $results[1] . "\n";
   echo $results[2] . "\n";
   print_r( $results )

//Comparision operators//
//Both have to be true for the logical &&
//Logical || operator
//One has only has to be true for this to give a truthy
?>
<?php 
$results = array();
$a = 5 > 9; // false
$b = 10 == 10; // true
$results['c'] = $a && b; // false
$results['d'] = $a || $b; // true 
$results['e'] = $b && $results['c']; //false
// $b && $a && $b 
$results['f'] = $a || $results['d']; // true
// $a || $a || $b

var_dump( $results );// var_dump gives more information than print_r


//////////////////////////////////////////
if ( $a > $b ) {
    echo '$a is greater than $b';
} else if ( $b > $a ){
    echo '$b is greater than $a';
} else {
    echo '$a and $b appear to be equal';
};
//////////////////////////////////////////
if ( 10 < 1 ) {
    echo "we stopped at if.";
} else if ( 10 < 4 ) {
    echo "we stopped at the first else if";
} else if ( 10 < 11 ) {
    echo "we stopped at the second else if.";
} else if ( 10 < 20 ) {
    echo "we stopped at the 3rd else if.";
} else {
    echo "None of the conditions are true, we never stopped, so this is the else.";
}

$user_logged_in = false;
if( $user_logged_in ) {
    echo "Welcome - only logged-in users can see this!";
} else {
    echo "Hello. Please log in to see this secret message.";
}

///Alternative syntax
if( condition to check ) :

    // code to execute if the condition is true

elseif ( different condition ) :
    //different code to execute 

else: 
    //catchall code    

endif;
?>

<!-- ///////////////////Example of homepage  -->
<?php if ( $home_page ) : ?>
    <header>
        <h1>Welcome to the home page of my website!</h1>
        <p>Have a look around.</p>
    </header>

    <?php endif; ?>

    <!-- this is called yoda conditionals {put variables on right side}-->
    <p>Good</p>

    <?php if ( 10 == $i ) { /* do something */ } ?>
    
    <p>Bad</p>

    <?php if ( $i == 10 ) { /* do something */ } ?>

    <!-- Conditional tags in wordpress, will return
     true of false based on condtion or state -->

     