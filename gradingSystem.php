
<?php
//Score Assign with Associative Array
$subjectScore = [
    "Bangla 1st Paper" => 70, 
    "Bangla 2nd Paper" => 90, 
    "English 1st Paper" => 75, 
    "English 2nd Paper" => 75,
    "Mathematics" => 80,
    "Higher Math" => 60,
    "biology" => 57,
    "Physic" => 80,
    "Chemistry" => 85,
    "Islam" => 90,
    "Social Science" => 85];
    // If mark less then equal 32 and gatter then equal 0 then Failed.
    $failed = "";
    foreach ($subjectScore as $key => $value) {
        if($value <= 32 && $value >= 0){
            $failed = $value;
        }
    }

    $subjectScoreKey = array_keys($subjectScore);
    $result = 0;
    $scorePoint = 0;
    $point = 0;
    for($i=0; $i < count($subjectScore); $i++){
        $subjectValue = $subjectScore[$subjectScoreKey[$i]];
            // This condition for grading system
        if($failed <= 32 && $failed >= 0){
            echo "your are fail <br>";
            break;
        }else{
            if($subjectValue >= 80 && $subjectValue <= 100){
                $result = $subjectScoreKey[$i] . " = " . "A+";
                $point = 5;
            }elseif($subjectValue >= 70 && $subjectValue <= 79){
                $result = $subjectScoreKey[$i] . " = " . "A";
                $point = 4; 
            }elseif($subjectValue >= 60 && $subjectValue <= 69){
                $result = $subjectScoreKey[$i] . " = " . "A-";
                $point = 3.5; 
            }
            elseif($subjectValue >= 50 && $subjectValue <= 59){
                $result = $subjectScoreKey[$i] . " = " . "B";
                $point = 3; 
            }elseif($subjectValue >= 40 && $subjectValue <= 49){
                $result = $subjectScoreKey[$i] . " = " . "C";
                $point = 2; 
            }elseif($subjectValue >= 33 && $subjectValue <= 39){
                $result = $subjectScoreKey[$i] . " = " . "D";
                $point = 1; 
            }else{
                $result = "Invalit Number";
                $point = "";
            }
        }
        //sum the all subject point.
        $scorePoint += $point;
        // Show the All subject Result.
        echo $result . "
        <br>";
    }
        $overallPoint = round($scorePoint / count($subjectScore), 2);
        echo "Overall Point = " . $overallPoint;

        if($overallPoint == 5){
            $grade = "A+";
        }elseif($overallPoint >= 4 && $overallPoint <= 4.9){
            $grade = "A";
        }elseif($overallPoint >= 3.5 && $overallPoint <= 3.9){
            $grade = "A-";
        }elseif($overallPoint >= 3 && $overallPoint <= 3.4){
            $grade = "B";
        }elseif($overallPoint >= 2 && $overallPoint <= 2.9){
            $grade = "C";
        }elseif($overallPoint >= 1 && $overallPoint <= 1.9){
            $grade = "D";
        }else{
            $grade = "F";
        }

        echo "<br> Grade = " . $grade;
?>