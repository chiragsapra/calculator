<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Calculator Result</title>
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
                <p><strong>Your Results</strong></p>
                <p>You have calculated <b><?php print $opt; ?></b>
                    <?php if($total == "infinity"){ ?>
                    <h3> You cant divide any number with 0. </h3>
                    <?php } else if($total == "invalid"){ ?>
                    <h3> Enter a valid numbers. </h3>
                    <?php } else { ?>
                    <h3> The Result Is
                        <?php print $total; ?>. </h3>
                    <?php } ?>
                    <form method="get" action="">
                        <button>Start Over</button>
                    </form>
            </div>
        </div>

    </div>

</body>

</html>
