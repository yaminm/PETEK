<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 
<script>
localStorage.setItem("lastname", "Smith");
console.log(localStorage.getItem('lastname'));
 var name=localStorage.getItem("name");
 var Emailadd=localStorage.getItem("Emailadd");
 var note=localStorage.getItem("note");

function p(){

 var name=localStorage.setItem("name","");
 var Emailadd=localStorage.setItem("Emailadd","");
 var note=localStorage.setItem("note","");


};
</script>
<?php

$name = "<script>document.write(name);</script>";
$Emailadd = "<script>document.write(Emailadd);</script>";
$note = "<script>document.write(note);</script>";

if($note!="" && $name!="" && $Emailadd!=""){
	mail("yamin.menash@gmail.com","MONEYYYY PETEK","name:"+$name+"\nmail:"+$Emailadd +"\nTHE Petek:"+$note);
			echo "
				<script type=\"text/javascript\">
				p();
				</script>
			";
}
?>


</body>
</html>