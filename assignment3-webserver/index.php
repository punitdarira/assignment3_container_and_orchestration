<?php
// Path to the JSON or configuration file
$file_path = 'config.json';

// Check if the file exists
if (file_exists($file_path)) {
    // Read the file content
    $content = file_get_contents($file_path);
    
    // Set the content type to JSON
    header('Content-Type: application/json');
    
    // Output the content
    echo $content;
} else {
    // Output an error message if the file does not exist
    echo json_encode(['error' => 'File not found']);
}
?>