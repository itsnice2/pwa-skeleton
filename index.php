<!doctype html>
<html lang="de">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Testseite</title>
    <link rel="manifest" href="manifest.json"/>
</head>
<body style="text-align: center">

<h1 style="font-family: 'Courier New'">¯\_(ツ)_/¯</h1>
<p id="ausgabe">Hier passiert bald etwas. Vielleicht.</p>
<button id="testbutton" onclick="doSomething()">Test (drück mich)</button>

<style>
    button{
        border: solid 1px lightgrey;
        border-radius: 7px;
        background-color: white;
        color: black;
        padding: 10px 20px;
    }

    button:hover{
        background-color: darkgrey;
		color: white;
        cursor: pointer;
    }
</style>

<script>

    function doSomething(){
		document.getElementById("ausgabe").innerHTML = 'Etwas ist passiert!';
    }

</script>
</body>
</html>
