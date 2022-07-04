<?php include "include/head.php"; ?>
<?php
//$db = new database\Database($db_host, $db_user, $db_pass, $db_name, $db_port);
//$tests = $db->getTests();

// test
// ID INT
// Naam VARCHAR(50)
// Adres VARCHAR(50)

$id = -1;
$view = null;
if (isset($_GET['id']))
	$id = $_GET['id'];
if (isset($_GET['view']))
	$view = $_GET['view'];


if (isset($_POST['cancel'])) {
	home();
}

if (isset($_POST['delete']) && isset($_POST['id'])) {
	$db->deleteTest($_POST['id']);
	home();
}

if (isset($_POST['add'])) {
	$db->setTest(null, $_POST['naam'], $_POST['adres']);
	home();
}

if (isset($_POST['save'])) {
	$db->setTest($_POST['id'], $_POST['naam'], $_POST['adres']);
	home();
}

function home()
{
	header('Location: ./');
	exit();
}

switch ($view) {
	case 'edit':
		$test = $db->getTestByID($id);
		?>
		<h3>Test gegevens wijzigen</h3>
		<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $test->getID(); ?>">
			<div class="form-group mt-2">
				<label for="naam">Naam:</label>
				<input type='text' class='form-control' id='naam' name='naam' value='<?php echo $test->getNaam(); ?>'>
			</div>
			<div class="form-group mt-2">
				<label for="adres">Adres:</label>
				<input type='text' class='form-control' id='adres' name='adres' value='<?php echo $test->getAdres(); ?>'>
			</div>
			<br/>
			<button type="submit" name="save" class="btn btn-success">Bewaren</button>
			<button type="submit" name="cancel" class="btn btn-primary">Annuleren</button>
		</form>
		<?php
		break;
	case 'delete':
		$test = $db->getTestByID($id);
		?>
		<h3>Test verwijderen</h3>
		<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group mt-2">
				<label for="naam">Naam:</label>
				<input type='text' class='form-control' id='naam' value='<?php echo $test->getNaam(); ?>' disabled>
			</div>
			<div class="form-group mt-2">
				<label for="adres">Adres:</label>
				<input type='text' class='form-control' id='adres' value='<?php echo $test->getAdres(); ?>' disabled>
			</div>
			<br/>
			<button name="delete" type="submit" class="btn btn-danger">Verwijderen</button>
			<button name="cancel" type="submit" class="btn btn-primary">Annuleren</button>
		</form>
		<?php
		break;
	case 'add':
		?>
		<h3>Nieuwe Test</h3>
		<form action="" method="post">
			<div class="form-group mt-2">
				<label for="naam">Naam:</label>
				<input type='text' class='form-control' id='naam' name='naam' placeholder='Naam'>
			</div>
			<div class="form-group mt-2">
				<label for="adres">Adres:</label>
				<input type='text' class='form-control' id='adres' name='adres' placeholder='Adres'>
			</div>
			<br/>
			<button type="submit" name="add" class="btn btn-success">Toevoegen</button>
			<button type="submit" name="cancel" class="btn btn-primary">Annuleren</button>
		</form>
		<?php
		break;
	default:
		?>
		<h3>Tests</h3>

		<?php foreach ($tests as $testData) { echo "<h3 style='color: red;'>{$testData->getNaam()}</h3>"; } ?>

		<table>
		<tr>
			<th>Naam</th>
			<th>Adres</th>
			<th class="d-flex justify-content-center"><a class='mx-1' href='?view=add'><button class='btn btn-primary min-height-0 btn-sm'><i class="fa-solid fa-plus"></i></button></a></th>
		</tr>
		<?php

		foreach ($tests as $testData) {
			$output = "./view?f=her," . $testData->getID();

			echo "<tr>";
			echo "<td>" . $testData->getNaam() . "</td>";
			echo "<td>" . $testData->getAdres() . "</td>";
			echo "<td class='px-0 d-flex justify-content-center'>
				<a class='mx-1' href='?id={$testData->getID()}&view=edit'><button class='btn btn-primary min-height-0 btn-sm'><i class='fa-solid fa-pen-to-square'></i></button></a>
				<a class='mx-1' href='?id={$testData->getID()}&view=delete'><button class='btn btn-danger min-height-0 btn-sm'><i class='fa-solid fa-trash-can'></i></button></a>
			</td>";
			echo "</tr>";
		}
		echo "</table>";
}
?>