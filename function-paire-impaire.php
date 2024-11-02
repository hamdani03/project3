<!DOCTYPE html>
<html>
    <head>
	    <title>P/I</title>
	
	</head>
    <body>
	    <?php 
		   $n=$_GET['numbre'];
		   function verdict($x){
			   if($x%2==0){
				   echo $x." est un nombre paire"."<br>";
			   }
			   else{
				   echo $x." est un nombre impaire"."<br>";
			   }
			   
		   }
		   verdict($n);
		
		?>
		
	   
	   
	</body>
</html>