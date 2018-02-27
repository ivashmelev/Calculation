<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Calculate</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-8">
                <div class="display">

                </div>
                <input type="number" class="form" value=""></div>
                
            </div>

        </div>
        <hr><br>
        <div class="row">

            <div class="col-md-3">
                <button id="del">Del</button>
            </div>

            <div class="col-md-3">
                <button id="division">/</button>
            </div>

            <div class="col-md-3">
                <button id="multiplacation">*</button>
            </div>

            <div class="col-md-3">
                <button id="deduction">-</button>
            </div>
        </div>

        <div class="row">

            <div class="col-md-3">
                <button id="7">7</button>
            </div>

            <div class="col-md-3">
                <button id="8">8</button>
            </div>

            <div class="col-md-3">
                <button id="9">9</button>
            </div>

            <div class="col-md-3">
                <button id="+">+</button>
            </div>
        </div>

        <div class="row">

            <div class="col-md-3">
                <button id="4">4</button>
            </div>

            <div class="col-md-3">
                <button id="5">5</button>
            </div>

            <div class="col-md-3">
                <button id="6">6</button>
            </div>

            <div class="col-md-3">
                
            </div>
        </div>

        <div class="row">

            <div class="col-md-3">
                <button id="1" onclick="inNumber()">1</button>
            </div>

            <div class="col-md-3">
                <button id="2" onclick="inNumber()">2</button>
            </div>

            <div class="col-md-3">
                <button id="3">3</button>
            </div>

            <div class="col-md-3">
                <button id="double">.</button>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <button id="0">0</button>
            </div>

            <div class="col-md-6">
                <button onclick="arraySum(out);" id="enter">enter</button>
            </div>
        </div>
        


    </div>
</body>
</html>