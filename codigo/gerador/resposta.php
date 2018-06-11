<?php
include('includes/conversorPHPEleve.class.php');
include('includes/conversorPHPSearch.class.php');
include('includes/conversorPHPDAO.class.php');

if(isset($_POST)){
	
//print_r($_POST);

$conversor = new ConversorPHPEleve($_POST);

$result = $conversor->gerarClasse();

$conversorSearch = new ConversorPHPSearch($_POST);



echo "<div class='resultWrapper well'>".$result."</div>";



if(isset($_POST['DAOPHP'])){

	$conversorDAO = new ConversorDAOPHP($_POST);
	
	$resultDao = $conversorDAO->gerarClasse();
	
	echo "<br/> <div class='resultWrapper well'>".$resultDao."</div>";;
}

}
else{

	echo "Acesso Invedido";
}

?>