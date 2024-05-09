<?php
include './debug/ChromePhp.php';
ChromePhp::log('controller.php: Hello World');
ChromePhp::log($_SERVER);

// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageURI = null) // constructor of the class
	{
		$this->load = new Load(); 
		$this->model = new Model();
		// determine what page you are on
		$this->$pageURI();
	}
    // home page function
	function home()
	{
		$data = $this->model->model3D_info();
		$this->load->view('view3DAppTest_2', $data);
	}

	function apiCreateTable()
	{
	  	// echo "Create table function";
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData()
	{
		$data = $this->model->dbGetData();
		$this->load->view('view3DAppData', $data);
	}  

	//Flickr API (Using AJAX)
	function apiGetFlickrService()
	{
		$this->load->view('viewFlickrService');
	}
	
	// API call to read JSON data from a JSON file
	function apiGetJson()
	{
		$this->load->view('viewJson');
	}

	// API call to select 3D Images
	function apiLoadImage()
	{
		// Get the brand data from the (this) Model using the dbGetBrand() Method in the Model Class
		ChromePhp::warn('controller.php: [apiLoadImage] Get the Brand Data');
		$data = $this->model->dbGetBrand();
		
		ChromePhp::log($data);
		$this->load->view('viewDrinks', $data);
	}

	function dbCreateTable()
	{
		echo "Create Table Function";
	}

	function dbInsertData()
	{
		echo "Data Insert Function";
	}

	function dbGetData()
	{
		echo "Data Read Function";
	}

}
?>    