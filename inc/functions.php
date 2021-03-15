<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = array(
				array('quote' => '"The greatest glory in living lies not in never falling, but in rising every time we fall."', 'Name' => '-Nelson Mandela', 'Year' => null),
				array('quote' => '"The way to get started is to quit talking and begin doing."', 'Name' => '-Walt Disney', 'Year' => null),
				array('quote' => '"Your time is limited, so don\'t waste it living someone else\'s life. Don\'t be trapped by dogma – which is living with the results of other people\'s thinking."', 'Name' => 'Steve Jobs', 'Year' => '2005'),
				array('quote' => '"If life were predictable it would cease to be life, and be without flavor."', 'Name' => '-Eleanor Roosevelt', 'Year' => null),
				array('quote' => '"If you set your goals ridiculously high and it\'s a failure, you will fail above everyone else\'s success."', 'Name' => '-James Cameron', 'Year' => null),
				array('quote' => '"If you look at what you have in life, you\'ll always have more. If you look at what you don\'t have in life, you\'ll never have enough."', 'Name' => '-Oprah Winfrey', 'Year' => null),
				array('quote' => '"When you reach the end of your rope, tie a knot in it and hang on."', 'Name' => '-Franklin D. Roosevelt', 'Year' => null),
				array('quote' => '"Spread love everywhere you go. Let no one ever come to you without leaving happier."', 'Name' => '-Mother Teresa', 'Year' => null),
				array('quote' => '"Life is what happens when you\'re busy making other plans."', 'Name' => '-John Lennon', 'Year' => null),
				);
/*_______________________________________________________________________________________________________________________________________________________________*/

// THIS getRandomQuuote FUNCTION HAS A PARAMETER '$array' TO RECIEVE THE MUTIDEMENTIONAL ASSOCIATIVE ARRAY NAMED '$quotes'  
function getRandomQuuote($array)
{
	// USING THE RANDOM FUNCTION NUMBER TO GENERATE A NUMBER, 0-8, THE LENGTH OF '$quotes' ARRAY
	// THE $num VARIABLE WILL HOLD THE VALUE CREATED BY THE RANDOM FUNCTION
	$num = rand(0, 8);
	// RETURN THE '$array' PARAMETER AS AN ARRAY WITH '$num' VARIABLE AS THE INDEX
	return $array[$num];

}
/*_______________________________________________________________________________________________________________________________________________________________*/
// THIS printQuote FUNCTION HAS A PARAMETER '$array' TO RECIEVE THE MUTIDEMENTIONAL ASSOCIATIVE ARRAY RETURNED AS THE FUNCTION getRandomQuuote
function printQuote($array)
{
	 // THE $quote_ind WILL HOLD THE '$array' PARAMETER
	 $quote_ind = $array;
	 // THE $no_year VARIABLE HOLDS A EMPTY VALUE
	 $no_year = '';
	 //THIS WILL OUTPUT THE RANDOM QUOTE USING '$quote_ind' VARIABLE AND THE NAMED PARAMETERS
	 echo "<p class='quote'>" . $quote_ind["quote"] . "</p>
           <p class='source'>" . $quote_ind["Name"];
            // THIS IF STATEMENT WILL TEST IF THE "Year" KEY IS NOT NULL 
            // AND PRINT OUT THE YEAR IF IT IS NOT NULL
            // ELSE PRINT A EMPTY STRING
            if($quote_ind["Year"] != null) 
           	{
           	 echo "<span class='year'> ".$quote_ind["Year"]."</span></p>";
           	}else
           	{
           	 echo "<span class='year'> ".$no_year."</span></p>";
           	}
	
}

?>