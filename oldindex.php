<!DOCTYPE html>
<html>
<body>

<?php
$filesArray = scandir('.');
foreach ($filesArray as $file) {
    echo '<a href="'.$file.'">'.$file.'</a><br>';
}
?>
</body>
</html>



