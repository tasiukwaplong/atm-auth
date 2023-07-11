<?php
function checkTXTFile($number) {
    $file = 'file.txt'; // Replace 'file.txt' with the path to your TXT file
    $pattern = '#ID' . $number; // Replace $number with the desired number

    while (true) {
        $content = file_get_contents($file);

        if (preg_match($pattern, $content)) {
            echo "Found a match for {$pattern} in the TXT file!\n";
            // Perform any desired actions here
        } else {
            echo "No match found for {$pattern} in the TXT file.\n";
        }

        sleep(10); // Wait for 10 seconds before checking again
    }
}

// Usage example:
checkTXTFile(40); // Pass the desired number as an argument to the function

?>

<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title>Konnect Bank</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>