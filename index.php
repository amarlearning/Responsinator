<!DOCTYPE html>
<html>
<head>
<meta name="description" content="Hello, My name is Amar Pandey and I am a computer science engineer.I expect to graduate with a Bachelors degree in May 2017." />
<meta name="keywords" content="Hello, my name is Amar Pandey and I am a computer science engineer.I expect to graduate with a Bachelors degree in May 2017.

 I love Web Design/Development.

The languages I use are: PHP, HTML, CSS, Java(Script) 
and last but not least English!

I like designs that are clean/simple but still include a lot of functionality." />
<meta name="author" content="Amar Prakash Pandey">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow" />
<meta name="revisit-after" content="1 days" />
<title>Responsinator | Project</title>
<!-- Amar Prakash Pandey | Portfolio | Kickstart --><cmt>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<script type="text/javascript" src="bootstrap.min.js"></script>

<script type="text/javascript" src="script.js"></script>
<style type="text/css" href="style.css"></style>
</head>
<body style="background-color:#444">


<!--<h1>Responsinator</h1>
<center>
<div class="header">
	<h3>Enter the Url</h3>
<form>
<input type="text" id="name" placeholder="www.amarpandey.ml"><br><br>
<input class="style" type="button" value="Small" onclick="small()">&nbsp;&nbsp;
<input class="style" type="button" value="Medium" onclick="medium()"><br><br>
<input class="style" type="button" value="Large" onclick="large()">&nbsp;&nbsp;
<input class="style" type="button" value="Full" onclick="full()">
<br><br>
<br>

</form>
</div>-->
<div class="header">
<div class="left"><br>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name = $_POST['see'];
?>

<form method="POST" action="index.php">
<input type="text" id="name" placeholder="<?php echo $name ?>" name="see">&nbsp;&nbsp;&nbsp;
<input class="button" value="GO" type="submit">
</form>
</div>
<div class="right"><br>
<button class="button-part" id="small">Small</button>&nbsp;&nbsp;&nbsp;
<button class="button-part" id="medium">Medium</button>&nbsp;&nbsp;&nbsp;
<button class="button-part" id="large">Large</button>&nbsp;&nbsp;&nbsp;
<button class="button-part" id="full">Full</button>&nbsp;&nbsp;&nbsp;
<button class="button-part" id="dance">Dance</button>&nbsp;&nbsp;&nbsp;
<button class="button-part" id="increase" >Increase</button>&nbsp;&nbsp;&nbsp;
<button class="button-part" id="decrease">Decrease</button>

</div>
</div>
<div class="iframe">
<iframe src="<?php echo "http://".$name ?>"></iframe>
</div>

<?php } else { ?>
<form method="post" action="index.php">
<input type="text" id="name" placeholder="www.amarpandey.ml" name="see">&nbsp;&nbsp;&nbsp;
<input class="button" value="GO" type="submit">
</div>
<div class="right"><br>
<button class="button-part" id="small">Small</button>&nbsp;&nbsp;&nbsp;
<button class="button-part" id="medium">Medium</button>&nbsp;&nbsp;&nbsp;
<button class="button-part" id="large">Large</button>&nbsp;&nbsp;&nbsp;
<button class="button-part" id="full">Full</button>&nbsp;&nbsp;&nbsp;
<button class="button-part" id="dance">Dance</button>&nbsp;&nbsp;&nbsp;
<button class="button-part" id="increase" >Increase</button>&nbsp;&nbsp;&nbsp;
<button class="button-part" id="decrease">Decrease</button>

</div>
</div>
<div class="iframe">
<iframe src="http://www.amarpandey.ml"></iframe>
</div>

<?php } ?>
</body>
</html>
