<?php

require(ROOT . "model/BirthdayModel.php");

function index() {
	$month = array('', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	render("birthday/index", array(
		'birthdays' => getAllBirthdays(),
		"month" => $month
	));
}

function create() {
	render("birthday/create");
}

function createSave() {
	if (!createBirthday()) {
		header('Location:' . URL . 'error/index');
		exit();
	}
	header('Location:' . URL . 'birthday/index');
}

function edit($id) {
	render("birthday/edit", array(
		'birthday' => getBirthday($id)
		));
}

function editSave() {
	if (!editBirthday()) {
		header('location:' . URL . 'error/index');
		exit();
	}
	header('location:' . URL . 'birthday/index');
} 

function delete($id) {
	if (!deleteBirthday($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "birthday/index");
}
