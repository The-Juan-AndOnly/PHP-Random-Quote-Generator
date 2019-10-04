<?php 

// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
$quotes[] = [
  'quote'=> 'Talk is cheap. Show me the code.',
  'source'=> 'Linus Torvalds',
  'citation'=> 'Twitter',
  'year'=> '2001',
  'tag'=> 'inspirational'
];

$quotes[] = [
  'quote'=> 'You miss 100% of the shots you don’t take',
  'source'=> 'Wayne Gretzky',
  'citation'=> '',
  'year'=> '',
  'tag'=> 'inspirational'
];

$quotes[] = [
  'quote'=> 'Debt is dumb, cash is King',
  'source'=> 'Dave Ramsey',
  'citation'=> '',
  'year'=> null,
  'tag'=> 'financial'
];

$quotes[] = [
  'quote'=> 'Life is 10% what happens to me and 90% of how I react to it',
  'source'=> 'Charles Swindoll',
  'citation'=> '',
  'year'=> null,
  'tag'=> 'inspirational'
];

$quotes[] = [
  'quote'=> "I'm back and done did it again",
  'source'=> 'Joe Santos Garcia',
  'citation'=> 'CodingPhase.com',
  'year'=> '',
  'tag'=> 'humor'
];

$quotes[] = [
  'quote'=> 'If you fail to plan, you are planning to fail!',
  'source'=> 'Benjamin Franklin',
  'citation'=> '',
  'year'=> '',
  'tag'=> 'inspirational'
];

$quotes[] = [
  'quote'=> 'Those who cannot remember the past are condemned to repeat it.',
  'source'=> 'George Santayana',
  'citation'=> '',
  'year'=> 1905,
  'tag'=> 'philosophy'
];

$quotes[] = [
  'quote'=> 'You better check yourself before you wreck yourself.',
  'source'=> 'Ice Cube',
  'citation'=> 'The Predator Album',
  'year'=> '1992',
  'tag'=> 'music'
];


// Get RandomQuote function that return a quote array
function getRandomQuote($something){
  $index = mt_rand(0,count($something) - 1);
  return $something[$index];
}

// PrintQuote function that calls getRandomQuote and assigns it to a variable then checks for optional keys and if present concats them to the htmlString.
function printQuote(){
  global $quotes;
  $randomQuote = getRandomQuote($quotes);
  $htmlString;
  $htmlString.='<p class="quote">'.$randomQuote['quote'].'</p>';
  $htmlString.='<p class="source">'.$randomQuote['source'];

  if (!empty($randomQuote['citation'])){
    $htmlString.='<span class="citation">'.$randomQuote['citation'].'</span>';  
  }
  if (!empty($randomQuote['year'])){
    $htmlString.='<span class="year">'.$randomQuote['year'].'</span>';
  }
  if (!empty($randomQuote['tag'])){
    $htmlString.='<sup class="citation">'.$randomQuote['tag'].'</sup>';
  }
  $htmlString.='</p>';
  // Generates a random value for hue and then sets the body background to the "hsl" value
  echo '<body style="background-color:hsl('. mt_rand(0,360) .',75%,30%)">';
  return $htmlString;
}
  