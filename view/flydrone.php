<?php
//echo 'working ...';
// $command = escapeshellcmd('python testingEcec.py');
// $output = shell_exec($command);
// echo $output;
?>

<?php
$command = 'python testingEcec.py 2>&1';
$output = shell_exec($command);
echo $output;
?>
