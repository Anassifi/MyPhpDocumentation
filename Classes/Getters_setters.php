<?php

class Movie {
    //Visibility modifiers
    public $title;
    private $rating;

    function __construct($title, $rating){

        $this->title = $title;
        //this is last thing in this tuto if you want to make the constructor not able to set a different rating uncomment second line
        $this->rating = $rating;
        // $this->setRating($rating);

    }

    //Getter
    function getRating(){
        return $this->rating;
    }

    //Setter (takes only one parameter)
    function setRating($rating){
        $this->rating = $rating;

        //uncomment after finishing the basic setter and getter
        //Advanced way of limiting the user rating :
        /* if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
            
            $this->rating = $rating;

        }else{
            $this->rating = "NR";
        } */

    }
}

    $avengers = new Movie("Avengers", "PG-13");
        //Movie Rates : G, PG, PG-13, R, NR

    //uncomment the code bellow to see error, Cannot get it like that anymore cuz private
    //echo $avengers->rating;

    //Using getter function we can access
    echo $avengers->getRating();

    //Now we can update the rating too
    $avengers->setRating("DogRate");

    //print again
    echo "<br>";
    echo "===NewRating===";
    echo "<br>";
    echo $avengers->getRating();

//once you finish this go further and uncomment the if statement to limit user rating setter
