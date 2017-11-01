
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
if(isset($_POST['submit']))	{
$name = $_POST['name'];
$url = "http://localhost/rest_api_php/read.php?name=".$name;
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);
$result = json_decode($response);
print_r($result);
}
?>
    <div class="container">
<h1>Simple REST API search in PHP</h2>
<form class="form-inline" action="" method="POST">
<div class="form-group">
<label for="name">Search Item(Samsung, Sony, LG etc):</label>
<input type="text" name="name" class="form-control" placeholder="Enter Product Name" required/>
</div>
<button type="submit" name="submit" class="btn btn-default">Find</button>
</form>
</div>
</body>
</html>
