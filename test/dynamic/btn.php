<div id="answers"></div>
<?php

$template = intval($_GET['template']);

$con = mysqli_connect("localhost","root","","headstart");
if (!$con) {
	die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"headstart");
$sql="SELECT * FROM vanilla526 WHERE id = '".$template."'";
$result = mysqli_query($con,$sql);


$array = array('a', 'b', 'c', 'd', 'e', 'f');

//foreach ($array as $key => $value) {
//	$current= current($array); // 'a'
//	$nextVal = next($array); // 'b'
//	echo $nextVal = next($array) . '<br/>'; // 'c'



while($row = mysqli_fetch_array($result)) {

	$totalData = count($row);
	var_dump($totalData);

//	var_dump($row[]);
	echo '<script>
    function questionOphalen2(myObj, questionNumber){
        var txt = "";

        // txt += "<div style=\'border: 5px solid gray; background-color: rgba(100, 100, 100, 0.5); height: auto; width: 800px;\'>";

        txt += \'<div class="accordion" id="accordionExample\'+[questionNumber]+\'">\';
        txt += \'<div class="accordion-item">\';
        txt += \'<h2 class="accordion-header" id="headingOne">\';
        txt += \'<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne\'+[questionNumber]+\'" aria-expanded="true" aria-controls="collapseOne">\';

        txt += myObj.chapter[questionNumber].name;

        txt += \'</button>\';
        txt += \'</h2>\';

        txt += \'<div id="collapseOne\'+[questionNumber]+\'" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExample">\';
        txt += \'<div class="accordion-body">\';

        function answer(key2, j){

            txt += \'<form>\';
            txt += \'<div class="mb-3">\';
            txt += \'<label for="exampleFormControlInput2\'+[questionNumber]+\'" class="form-label">\' + myObj.chapter[questionNumber].elements[key2] + \'</label>\';
            txt += \'<input type="text" class="form-control" id="exampleFormControlInput\'+[questionNumber]+\'" value="'; {{echo $nextVal = next($array);}}  echo '" placeholder="\'+ myObj.chapter[questionNumber].elements[key2] +\'">\';
            txt += \'</div>\';
            txt += \'</form>\';

        }

        for (var key2 in myObj.chapter[questionNumber].elements) {
            if (myObj.chapter[questionNumber].elements.hasOwnProperty(key2)) {
                answer(key2);
            }
        }

        var totalQuestions = myObj.chapter[questionNumber].elements.length;

        for(var i = 0 ; i < totalQuestions; i++){
            answer(i);
        }

        txt += \'</div></div></div></div>\';

        txt += "</div>";
        document.getElementById("answers").innerHTML += txt;
    }

    var queryString = "vanilla526_config.json"; // location.search.substring(1);
    var localFile = queryString;

    var obj, dbParam, xmlhttp, myObj;
    dbParam = JSON.stringify(obj);
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myObj = JSON.parse(this.responseText)[0];

            var totaalVragen = myObj.chapter.length;
            for(var i = 0; i < totaalVragen; i++){
                questionOphalen2(myObj, i);
            }

        }
    };
    xmlhttp.open("GET", localFile, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("x=" + dbParam);
</script>';
//}
}
mysqli_close($con);
?>