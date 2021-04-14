<?php
    $file_url="SOP_Student.pdf";
    header('Content-Type:application/octet-stream');
    header("Content-Transfer-encoding:utf-8");
    header("Content-Disposition:attachment;filename=\"".basename($file_url)."\"");
    readfile($file_url);
?>