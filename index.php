<?php

public function insert(\PDO $pdo) : void {

	// create query template
	$query = "INSERT INTO senator(senatorId, senatorName, senatorNumLives) VALUES (:senatorId, :senatorName, :senatorNumLives)";
	$statement = $pdo->prepare($query);

	// bind the member variables to the place holders in the template
	$parameters = ["senatorId" => $this->senatorId->getBytes(), "senatorName" => $this->senatorId->getBytes(), "senatorNumLives" => $this->senatorNumLives];
	$statement->execute($parameters);
}

public function delete(\PDO $pdo) : void {

	// create query template
	$query = "DELETE FROM senator WHERE senatorId = :senatorId";
	$statement = $pdo->prepare($query);

	// bind the member variables to the place holder in the template
	$parameters = ["senatorId" => $this->senatorId->getBytes()];
	$statement->execute($parameters);
}

public function update(\PDO $pdo) : void {

	// create query template
	$query = "UPDATE senator SET senatorID = :senatorId, senatorName = :senatorName, senatorNumLives = :senatorNumLives";
	$statement = $pdo->prepare($query);


	$parameters = ["senatorId" => $this->senatorId->getBytes(),"senatorName" => $this->senatorName,
	"senatorNumLives" => $this->senatorNumLives];
	$statement->execute($parameters);
}


