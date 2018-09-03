<?php
    // $cameraUrl is the http[s]-based path to your camera's still image. Many Axis-branded cameras use a form of http://hostname/axis-cgi/jpg/image.cgi
    // A defunct/ignored argument (of a random number) is added to this URL to better address caching issues.
	$cameraUrl = 'http://yourcamera.name/axis-cgi/jpg/image.cgi?'.rand(100,1000);
    // Files are written to the local path in a format of "name-<mm>-<dd>-<yy>-<hh>-<ss>.jpg"
    $filePath = '/path/to/your/local/files/name-' . date('m-d-y-H-i-s') . '.jpg';
	$ch = curl_init($cameraUrl);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
	$rawdata=curl_exec($ch);
	curl_close($ch);
	if(file_exists($filePath)) {
		unlink($filePath);
	}
	$fp = fopen($filePath,'x');
	fwrite($fp, $rawdata);
	fclose($fp);
?>