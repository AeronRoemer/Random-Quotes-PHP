// PHP - Random Quote Generator
<?php
// Multidimensional quotes array.
$quotes = [   
   [ "quote" => "This day, anything goes",
    "source" => "Halloween by the Misfits",
    "year" => "1981"], 
    ["quote" => "No more donut shops",
      "source" => "LoC" ],
    [ "quote" => "Inhaling toxins with each breath. A caustic buildup in your chest.",
    "source" => "Insect Warfare"],
    ["quote" => "Not open to any suggestions <br> I'm content with what I have",
    "source" => "Kylesa",
    "year" => "2005",
    "album" => "To Walk a Middle Course"],
    [ "quote" => "And now you're trapped like a rat on a sinking ship",
    "source" => "Aus-Rotten",
    "album" => "...and Now Back to Our Programming"]
];
// Creates the getRandomQuuote function

function getRandomQuote($arr){
   return $arr[rand(0,4)];
}

// Creates the printQuote function and echoes html
function printQuote($arr){
   $quote = getRandomQuote($arr);
   echo "<p class='quote'>" . $quote['quote'] . "</p>\n";
   echo "<p class='source'>" . $quote['source'] . "</p>\n";
   if ($quote['year'] === true){
   echo "<span class='year'>" . $quote['year'] . "</span>\n";
   }
   if ($quote['album'] === true){
       echo "<span class='album'>" . $quote['album'] . "</span>\n";
}
}
?>
