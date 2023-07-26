<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
<form action="actions.php" method="POST"><br><br>
    <input type="number" placeholder="Enter number" name="fistnumber"><br><br>
      <select name="operator"  style="width:173px;height:25px;">
        <option value="*">*</option>
        <option value="+">+</option>
        <option value="-">-</option>
         <option value="/">/</option>
</select><br><br>
    <input type="number" placeholder="Enter number" name="secnumber"><br><br>
    <button type="Submit" name="submit">Equal to</button>
   </form>
</center>


</body>
</html>