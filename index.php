<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php
// Define your website name
$websiteName = "Your Website Name";

// Get the full-length page title (for SEO)
$pageTitleFull = "Long Page Title That Exceeds the Limit for SEO Purposes";

// Define the separator
$titleSeparator = " | ";

// Concatenate the full-length page title and website name for SEO
$titleFull = $pageTitleFull . $titleSeparator . $websiteName;

// Define the maximum title length for Google Search Console
$maxTitleLength = 60; // Example maximum title length

// Truncate the title for Google Search Console
$pageTitleConsole = "Long Page Title That Exceeds the Limit";

// Concatenate the website name, separator, and truncated page title for Google Search Console
$titleConsole = $pageTitleConsole . $titleSeparator . $websiteName;
if (strlen($titleConsole) > $maxTitleLength) {
    $titleConsole = substr($titleConsole, 0, $maxTitleLength) . "...";
}
?>


<title><?php echo $titleFull; ?></title>
</head>
<body>
    <h1>Test Meta Title in Github</h1>
</body>
</html>
