<?php 


$fileName = basename('result.php');
$filePath = 'files/'.$fileName;
if(!empty($fileName) && file_exists($filePath)){
    // Define headers
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$fileName");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");
    
   readfile($filePath);
    exit;
}else{
    echo 'The file does not exist.';
}
?>