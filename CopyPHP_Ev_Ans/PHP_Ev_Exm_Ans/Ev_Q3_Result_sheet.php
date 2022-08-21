
 <?php 

$results = array(
    
    array("id"=>1, "Name"=>"Student1","MCQ"=>40,"Descriptive"=>30,"Evidence"=>30),
    array("id"=>2, "Name"=>"Student2","MCQ"=>28,"Descriptive"=>40,"Evidence"=>40),
    array("id"=>3, "Name"=>"Student3","MCQ"=>45,"Descriptive"=>39,"Evidence"=>45)
    ); 
//  echo "<pre>";
// print_r($results);
foreach($results as $student){

    list($id, $name, $mcq, $des, $evd) = array_values($student);

    if ($mcq+$des >= 70 && $evd >= 30){
        
echo "ID: $id Name: $name written: ".($mcq+$des)." Result: PASS <br>";

    }  else {

echo "ID: $id Name: $name written: ".($mcq+$des)." Result: FAIL <br>";

    }
}

?>