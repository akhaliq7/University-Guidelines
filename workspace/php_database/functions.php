<?php
function displayJobs(){
$conn=db();
        //prepare the statement 
        $stmt=$conn->prepare("SELECT name FROM jobsFrequency ORDER BY occurence DESC LIMIT 10");
        
        //execute the statement
        $stmt->execute();
        
        //checks to see if there are any rows
        if($stmt->rowCount()>0){
                //for all the rows
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                        echo "<p id='tagcloud'>".$row['name']."</p>";
                }
        }
        else{
                echo "There is nothing here";
        }
        $conn=null;
}

function insertJobs(){
    // global $conn;
    $conn = db();
    if(isset($_POST['submit']))
    {
        //check if values are already submitted
        
        $name= $_POST['search'];
        $occurence = 1;
        //create sql statement
        $stmt = $conn->prepare("SELECT COUNT(id) FROM jobsFrequency WHERE name = :name");
        //Execute a prepared statement with an array of insert values 
        $stmt->execute(['name' => $name]);
        //Returns a single column from the next row of a result set 
        $count = $stmt->fetchColumn(0);
    
        if($count > 0)
        {
            //if the count is less than 0 update the occurence field by 1 of the job field already in the database 
            $query=$conn->prepare("UPDATE jobsFrequency SET occurence = occurence+1 WHERE name = '$name'");
            $query->bindParam(':name', $name);
            $query->execute();
        }
        else
        {
            //if no rows are retuned then create a new job row.
            $query=$conn->prepare("INSERT INTO jobsFrequency (name,occurence) VALUES (?,?)");
            $query->bindParam(1, $name);
            $query->bindParam(2, $occurence);
            $query->execute();
        }
    }//end of post submit
    $query = null;
    $user = null;
    $conn = null;
}//end of function insert jobs
?>