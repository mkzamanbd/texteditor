<?php

$request = $_FILES['image'];
$upload_dir = "uploads/";
$upload_file = $upload_dir . basename($request["name"]);
$imageFileType = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));

if (move_uploaded_file($request["tmp_name"], $upload_file)) {
    echo json_encode([
        "uploaded" => true,
        "message" => "The file ". htmlspecialchars( basename( $request["name"])). " has been uploaded.",
        "url" => "http://localhost/texteditor/sample/" . $upload_file,
    ]);
} else {
    echo json_encode([
        "uploaded" => false,
        "message" => "Sorry, there was an error uploading your file.",
        "url" => "http://localhost/texteditor/sample/warning.png",
    ]);
}

?>