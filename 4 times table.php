//time tables hw
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<form  method="POST"class="col-4 mx-auto">
  <div class="mb-3">
  <label for="Number1" class="form-label">Number</label>
    <input name="Data" type="text" class="form-control" ><br>
</div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
<?php
$userInput=$_POST['Data'];
for($i=1;$i<=10;$i++)
{
    echo("<p style='text-align: center;'>$userInput"."X" . "$i" . "=" . $userInput*$i . "</p>");
}

?>
