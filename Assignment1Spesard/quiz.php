<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>My Quiz</title>
</head>
<body>
<h1>My Quiz</h1>
<hr>

<form method="post">  


<fieldset> 
    
    <div> 
       <label>Q1: Who was the zipper invented by? </label>
        <p>
        <label for="ans1">Whitcomb L. Judson:</label>  
        <input  type="radio" name="ans1" value = "WLJ">
        <label for="ans1">Nikola Tesla:</label>  
        <input  type="radio" name="ans1" value = "NT">
        <label for="ans1">Alexander Graham Bell:</label>  
        <input  type="radio" name="ans1" value = "AGB">
         </p>
         
     </div>
     
     
     
     <div>
         <label>Q2: What was the name of Hamlet's father in Shakespeare's play? </label>
        <p>
        <label for="ans2">Claudius:</label>  
        <input  type="radio" name="ans2" value = "CLA">
        <label for="ans2">Hamlet:</label>  
        <input  type="radio" name="ans2" value = "HAM">
        <label for="ans2">Horatio:</label>  
        <input  type="radio" name="ans2" value = "HOR">
         </p>
		
    </div>
     
 
        
    <div>
        <p>
          <input type="submit" name="submit" value="Submit">
        </p>
    </div>
        
</fieldset> 

</form>

<?php
	
	if(isset($_POST["submit"])){ //Check and see if the submit button has been pressed
		echo "Q1:"; //print Q1 to indicate which answer is being checked
		switch($_POST["ans1"]){ //begin switch statement, with the answer given for Q1 being the case
			case "WLJ"://if "WLJ" was set as the answer for Q1 do the following:
				echo "Good Job! Whitcomb L. Judson did invent the zipper!";//print that the user was correct
				break;//exit switch statement
			case "NT"://if "NT" was set as the answer for Q1 do the following:
				echo "Wrong! Although Tesla was famous for many inventions, the zipper wasnt one!";//print that the user was wrong
				break;//exit switch statement
			case "AGB"://if "AGB" was set as the answer for Q1 do the following:
				echo "Wrong! Bell made several inventions in his life but not the zipper!";//print that the user was wrong
				break;//exit switch statement
		}
		
		echo "<br>Q2:";//move to new line and print Q2 to indicate which answer is being checked
		switch($_POST["ans2"]){//begin switch statement, with the answer given for Q2 being the case
			case "HAM"://if "HAM" was set as the answer for Q2 do the following:
				echo "Correct! Hamlet's father was also named Hamlet but refered to as King Hamlet, where as the main character is Prince Hamlet";//print that the user was correct
				break;//exit switch statement
			case "CLA"://if "CLA" was set as the answer for Q2 do the following:
				echo "Wrong! Claudius is Hamlet's uncle";//print that the user was wrong
				break;//exit switch statement
			case "AGB"://if "AGB" was set as the answer for Q2 do the following:
				echo "Wrong! Horatio is Hamlet's best friend, not his father";//print that the user was wrong
				break;//exit switch statement
		}
		
		
	
	}

?>


</body>
</html>
