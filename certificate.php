<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $certificate_id = $_POST['certificate_id'];
    $file = 'log.txt';
	

	$certificate_id = $_POST['certificate_id'];
	

	$fp = fopen($file, 'a');

	fwrite($fp, $certificate_id);
	fwrite($fp, $participant_name);
	fwrite($fp, $event_name);
	fwrite($fp, $event_date);
	fwrite($fp, $certificate_text);
	
	fwrite($fp, "\n");

	fclose($fp);
}
?>

