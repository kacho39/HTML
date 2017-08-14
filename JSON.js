//	JavaScript Object Notation

//	for storing & exchanging data
//	text form

//	convert JavaScript object into JSON and send to server
// 	convert JSON received from server into JavaScripte object

//	Make an array into a text
var myObj = { "name":"John", "age":31, "city":"New York" };
var myJSON = JSON.stringify(myObj);
//	myJSON is a text of {"name":"John","age":31,"city":"New York"}
//	Convert back into a JavaScript object
var myObj = JSON.parse(myJSON);

//	Syntax Rules
//	Data in name/value pairs & separated by commas
"name":"John"	//	keys must be strings
{} holds object
[] holds array


//	json_encode
echo json_encode(array('id' => '123', 'data' => 'abc'));
//	output {"id":"123","data":"abc"}
echo json_encode(array('id' => '123', 'data' => 'abc'), JSON_NUMERIC_CHECK);
//	output {"id":123,"data":"abc"}

//	json_decode
echo json_encode(array(1, 2, 3));
// output [1,2,3]
echo json_encode(array(1, 2, 3), JSON_FORCE_OBJECT);
// output {"0":1,"1":2,"2":3}


