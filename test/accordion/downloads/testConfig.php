<!DOCTYPE html>
<html lang="en">
<head>
	<title>Accordion Test</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
<h1>Accordion Test</h1>
<p id="UUIDoutput"></p><!-- uuid -->
<p id="LANGoutput"></p><!-- Language -->
<p id="TITLEoutput"></p><!-- Title -->
<div id="answers"></div>

<!-- uuid -->
<script>
    var queryString = location.search.substring(1);
    var localFile = queryString;

    var obj, dbParam, xmlhttp, myObj, x, txt0 = "";
    dbParam = JSON.stringify(obj);
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            myObj = JSON.parse(this.responseText);
            txt0 += "<div style='border: 1px solid pink; background-color: rgba(100, 100, 100, 0.5); height: auto; width: 800px;'>";
            for (x in myObj) {
                txt0 += "<h2>Template ID: " + myObj[x].id + "</h2>";
            }
            txt0 += "</div>";
            document.getElementById("UUIDoutput").innerHTML = txt0;
        }
    };
    xmlhttp.open("GET", localFile, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("x=" + dbParam);
</script>

<!-- Language -->
<script>
    var queryString = location.search.substring(1);
    var localFile = queryString;

    var obj, dbParam, xmlhttp, myObj, x, txt1 = "";
    dbParam = JSON.stringify(obj);
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            myObj = JSON.parse(this.responseText);
            txt1 += "<div style='border: 1px solid purple; background-color: rgba(100, 100, 100, 0.5); height: auto; width: 800px;'>";
            for (x in myObj) {
                txt1 += "<h2>Template Name: " + myObj[x].theme + "</h2>";
            }
            txt1 += "</div>";
            document.getElementById("LANGoutput").innerHTML = txt1;
        }
    };
    xmlhttp.open("GET", localFile, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("x=" + dbParam);
</script>

<!-- Title -->
<script>
    var queryString = location.search.substring(1);
    var localFile = queryString;

    var obj, dbParam, xmlhttp, myObj, x, txt2 = "";
    dbParam = JSON.stringify(obj);
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            myObj = JSON.parse(this.responseText);
            txt2 += "<div style='border: 1px solid purple; background-color: rgba(100, 100, 100, 0.5); height: auto; width: 800px;'>";
            for (x in myObj) {
                txt2 += "<h2>Title: " + myObj[x].theme + "</h2>";
            }
            txt2 += "</div>";
            document.getElementById("TITLEoutput").innerHTML = txt2;
        }
    };
    xmlhttp.open("GET", localFile, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("x=" + dbParam);
</script>

<script>
    function questionOphalen2(myObj, questionNumber){
        var txt = "";

        // txt += "<div style='border: 5px solid gray; background-color: rgba(100, 100, 100, 0.5); height: auto; width: 800px;'>";

	    txt += '<div class="accordion" id="accordionExample'+[questionNumber]+'">';
        txt += '<div class="accordion-item">';
        txt += '<h2 class="accordion-header" id="headingOne">';
        txt += '<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne'+[questionNumber]+'" aria-expanded="true" aria-controls="collapseOne">';

        txt += myObj.chapter[questionNumber].name;

	    txt += '</button>';
        txt += '</h2>';

        txt += '<div id="collapseOne'+[questionNumber]+'" class="accordion-collapse collapse hide" aria-labelledby="headingOne" data-bs-parent="#accordionExample">';
        txt += '<div class="accordion-body">';

        function answer(number){

            txt += '<form>';
            txt += '<div class="mb-3">';
	        txt += '<label for="exampleFormControlInput1" class="form-label">' + myObj.chapter[questionNumber].elements[key2] + '</label>';
            txt += '<input type="text" class="form-control" id="exampleFormControlInput1" value="" placeholder="'+[number]+'">';
			txt += '</div>';
			txt += '</form>';

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

        txt += '</div></div></div></div>';

        txt += "</div>";
        document.getElementById("answers").innerHTML += txt;
    }

    var queryString = location.search.substring(1);
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
</script>
</body>
</html>