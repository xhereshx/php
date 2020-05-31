<?php 
// part one 
//$numOne = 1;
//$numTwo = 5;

function compare($numOne,$numTwo){
if($numOne == $numTwo){
    return 0;
} elseif($numOne > $numTwo){
    return 1;
} elseif($numOne < $numTwo){
    return -1;
}
else{
    return 'not a number';
}

}

echo compare(-5,1);
echo'<br>';
// part two 

function giveClue($diff){
    if($diff == 0){
        return 'Success ! You find the right number.';
    }elseif($diff == 1){
        return 'The given number is too low.';
    }elseif($diff == -1){
        return 'The given number is too height.';
    }
    else{
        return 'not a number';
    }
    
}
    
    echo giveClue(0);

echo'<br>';
echo'<br>';
echo'<br>';
function getGivenNumber($prompt_msg){
    echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

    $answer = "<script type='text/javascript'> document.write(answer); </script>";
    return($answer);
}

//program
$prompt_msg = "Please write your number";
$name = getGivenNumber($prompt_msg);

$output_msg = $name;
echo($output_msg);

    //prompt function
    /* function prompt($prompt_msg){
        echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

        $answer = "<script type='text/javascript'> document.write(answer); </script>";
        return($answer);
    }

    //program
    $prompt_msg = "Please type your name.";
    $name = prompt($prompt_msg);

    $output_msg = "Hello there ".$name."!";
    echo($output_msg);*/













?>