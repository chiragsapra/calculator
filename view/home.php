<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Calculator</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../public/css/main.css">
    </head>
    <body>
        <div class="container">
                <h1>Calculator</h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="formSection">
                        <p><strong>Select your Operation</strong></p>
                        <p>Please select the operation that you would like to calculate </p>
                        <form method="get">
                            <label for="n1">Number 1</label>&nbsp;<input type="text" name="num1" id="n1"/><br>
                            <label for="n2">Number 2</label>&nbsp;<input type="text" name="num2" id="n2"/><br>
                            <input type="radio" name="opt" id="add" value="Addition" />&nbsp;<label for="r1">Addition</label> <br>
                            <input type="radio" name="opt" id="sub" value="Subtraction" />&nbsp;<label for="r2">Subtraction</label> <br>
                            <input type="radio" name="opt" id="multi" value="Multiplication" />&nbsp;<label for="r3">Multiplication</label> <br>
                            <input type="radio" name="opt" id="div" value="Division" />&nbsp;<label for="r4">Division</label> <br>
                            <button class="pure-button">Result</button>
                        </form>
                    </div>
                </div>
            </div>

    </body>
</html>
