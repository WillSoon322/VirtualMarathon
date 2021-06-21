<?php
// Call PHP Script from javascript

$mydata='Variables declaration in PHPs';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP & Javascript</title>
<script type="text/javascript">
	alert("<?php echo $mydata?>");
</script>
</head>

<body>
</body>
</html>