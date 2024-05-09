<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/database.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "Error: Cannot connect to the database";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}
	
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, idIndex TEXT, model TEXT, creationMethod TEXT, exportFile TEXT, modelName TEXT) ");
			return "Model_3D table is successfully created inside database.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	// This is a simple fix to represent, what would in reality be, a table in the database containing the brand names. 
	// The database schema would then contain a foreign key for each drink entry linking back to the brand name
	// This stuture allows us to read the list of brand names to populate a menu in a view
	public function dbGetBrand()
	{
		// Return the Brand Names
		return array("-", "Coke","Sprite", "DrPepper");
	}

	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Model_3D (Id, idIndex, model, creationMethod, exportFile, modelName) 
				VALUES (1, 'coke', 'Coke can', 'Blender 2.80', 'X3D', 'CokeCan.x3d'); " .

			"INSERT INTO Model_3D (Id, idIndex, model, creationMethod, exportFile, modelName) 
				VALUES (2, 'sprite', 'glass Sprite bottle', 'Blender 2.80', 'X3D', 'SpriteBottle.x3d'); " .

			"INSERT INTO Model_3D (Id, idIndex, model, creationMethod, exportFile, modelName)
				VALUES (3, 'pepper', 'plastic DrPepper bottle', 'Blender 2.80', 'X3D', 'DrPepperBottle.x3d'); ");
			return "X3D model data inserted successfully inside database.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM Model_3D';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['idIndex'] = $data['idIndex'];
				$result[$i]['model'] = $data['model'];
				$result[$i]['creationMethod'] = $data['creationMethod'];
				$result[$i]['exportFile'] = $data['exportFile'];
				$result[$i]['modelName'] = $data['modelName'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
	
	//Method to simulate the model data
	public function model3D_info()
	{
		// Simulate the model's data
		return array(
			'model_1' => 'Coke',
			'image3D_1' => 'CokeRender',

			'model_2' => 'Dr Pepper',
			'image3D_2' => 'DrPepperRender',

			'model_3' => 'Sprite',
			'image3D_3' => 'SpriteRender'
		);
	}
}
?>