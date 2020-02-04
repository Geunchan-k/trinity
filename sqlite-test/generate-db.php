<?php

$db = new PDO('sqlite:test.db');

$db->exec("CREATE TABLE IF NOTE EXISTS rooms (
			id INTEGER PRIMARY KEY AUTOINCREMENT,
			name TEXT,
			capacity INTEGER,
			status VARCHAR(30))");

$rooms = array('name' => 'Room 1',
				'id' => 1,
				'capacity' => 2,
				'status' => 'Dirty');

$insert = "INSERT INTO rooms (id, name, capacity, status) VALUES (:id, :name, :capacity, :status)";

$stmt = $db->prepare($insert);

$stmt->bindParam(':id', $id);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':capacity', $capacity);
$stmt->bindParam(':status', $status);

foreach ($rooms as $r) {
	$id = $r['id'];
	$name = $r['name'];
	$capacity = $r['capacity'];
	$status = $r['status'];
	$stmt->execute();
}
