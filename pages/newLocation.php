<?php

if(isset($_POST['name'])) {

    //Validate input
    $inputName = htmlspecialchars($_POST['name']);
    $inputDescription = htmlspecialchars($_POST['description']);
    $inputPostal = htmlspecialchars($_POST['postal_code']);
    $inputNumber = htmlspecialchars($_POST['house_number']);

	//Register categorie
	$location = Location::register($inputName, $inputDescription, $inputPostal, $inputNumber);
	if($location) {
        App::redirect("home");
    }
}
?>

<div class="container">
    <h1>
        Voeg een nieuwe locatie toe
    </h1>

<?php

$form = Location::addLocationForm()->getHTML();
echo $form;

?>
</div>