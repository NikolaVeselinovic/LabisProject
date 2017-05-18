<!DOCTYPE html>
<html lang="en">
<head>
    <title>Unos studenta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Create model</h2>
    <form class="form-horizontal" action = "<?php $_PHP_SELF ?>" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2">Name:</label>
            <div class="col-sm-4">
                <input type="ime" class="form-control" name="ime" placeholder="Unesite ime" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Instance of model_ID:</label>
            <div class="col-sm-4">
                <input type="instance" class="form-control" name="instance"  autocomplete="on" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2">MDA Level:</label>
            <div class="col-sm-4">
                <form action="">
                <input type="radio" name="opcija1" value="M0"> M0
                <input type="radio" name="opcija1" value="M1"> M1
                <input type="radio" name="opcija1" value="M2"> M2
                <input type="radio" name="opcija1" value="M3"> M3
                </form>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" align="right">Description:</label>
            <div class="col-sm-4">
                <textarea  class="form-control" name="opis" cols="50">
                </textarea>
            </div>
        </div>

        <div class="col-sm-12">

        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" align="right">Status:</label>
            <div class="col-sm-2">
                <select>
                    <option value="finished">
                        Finished
                    </option>

                    <option value="in progres">
                        In progres
                    </option>
                </select>
            </div>
        </div>
        <div class="col-sm-12">

        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" align="right">File path:</label>
            <div class="col-sm-4">
                <input type="file" name="filepath">
            </div>
        </div>



        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" name="btn-save">Save</button>
                <a class="btn btn-success" href="/../../studenti.php">Cancel</a>
           <br>
                <a href="../index.php"> Go to previous page >> </a>
            </div>
        </div>
    </form>
</div>

</body>
</html>