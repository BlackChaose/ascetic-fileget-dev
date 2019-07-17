<?php
ini_set("display errors", true);
$arrList = array(
	[
			"name"=>"file1.txt",
			"data_create"=>"01.01.2019",
			"size"=>"1024",
			"type"=>"text",
	],
	[
			"name"=>"file2.txt",
			"data_create"=>"01.01.2019",
			"size"=>"2024",
			"type"=>"text",
	],
	[
			"name"=>"file3.txt",
			"data_create"=>"01.01.2019",
			"size"=>"421",
			"type"=>"text",
	],
	[
			"name"=>"NoName.pdf",
			"data_create"=>"10.01.2019",
			"size"=>"1524",
			"type"=>"pdf",
	],
	[
			"name"=>"Fan.fb2",
			"data_create"=>"03.01.2009",
			"size"=>"5048",
			"type"=>"fb2",
	],
	[
			"name"=>"Readme.md",
			"data_create"=>"06.07.2015",
			"size"=>"245",
			"type"=>"text",
	],
	[
			"name"=>"Manual.doc",
			"data_create"=>"01.02.2019",
			"size"=>"1024",
			"type"=>"doc",
	],
	[
			"name"=>"Datasheet.excel",
			"data_create"=>"01.01.2019",
			"size"=>"10234",
			"type"=>"excel",
	],
	[
			"name"=>"avatar.jpg",
			"data_create"=>"10.01.2019",
			"size"=>"5478125",
			"type"=>"image",
	],
	[
			"name" => "123qwaszxd",
			"data_create" => "01.01.2019",
			"size" => "18900",
			"type" => "unknown",
	]
);

$arrOk = array("status" => "ok");

if(!empty($_POST['get_files']) && $_POST['get_files'] === 'list')
{
	header('Content-Type: application/json');
	header('Status: 200');
	http_response_code(200);
	echo json_encode($arrList, true);
} else {
	header('Content-Type: application/json');
	header('Status: 200');
	http_response_code(200);
	echo json_encode($arrOk,true);
	}
