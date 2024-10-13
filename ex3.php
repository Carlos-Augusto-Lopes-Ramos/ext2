<?php

    function toGetZipFile($id) {

        $url = "https://drive.google.com/uc?export=download&id=" . $id;

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="fisico.rar"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');

        $urlDownload = curl_init($url);
        curl_setopt($urlDownload, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($urlDownload, CURLOPT_FOLLOWLOCATION, true);
        $arquivo = curl_exec($urlDownload);
        curl_close($urlDownload);

        exit();
    }
    
    $idArquivo = "1rwqo7oppHTpbYGIm_xjY2-_R5PoG7Mpv";

    toGetZipFile($idArquivo);

?>