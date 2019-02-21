<?php
    if($_POST["n1"] != null && $_POST["n2"] != null){
        if($_POST["op"] == "adicao") echo ($_POST["n1"] + $_POST["n2"]);
        if($_POST["op"] == "subtracao") echo ($_POST["n1"] - $_POST["n2"]);
        if($_POST["op"] == "multiplicacao") echo ($_POST["n1"] * $_POST["n2"]);
        if($_POST["op"] == "divisao") echo ($_POST["n1"] / $_POST["n2"]);
    }
?>