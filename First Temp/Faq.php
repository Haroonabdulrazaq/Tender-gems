<html>
    <head>
        <title>Faq Form Data</title>
    </head>
    <body>


<?php

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$data= $name.",".$email.",".$message;
$file="file.csv";


file_put_contents($file, $data.PHP_EOL,FILE_APPEND);


?>
<script>
    alert(" Message submitted")
</script>
</body>
</html>