<?php
// Set proper headers for XML sitemap
header('Content-Type: application/xml; charset=UTF-8');
header('Cache-Control: public, max-age=3600'); // Cache for 1 hour

// Read and output the sitemap.xml file
$sitemap = file_get_contents(__DIR__ . '/sitemap.xml');
echo $sitemap;
?>
