<?php
require_once ("./config.php");

function parseToXML($htmlStr)
{
    $xmlStr=str_replace('<','&lt;',$htmlStr);
    $xmlStr=str_replace('>','&gt;',$xmlStr);
    $xmlStr=str_replace('"','&quot;',$xmlStr);
    $xmlStr=str_replace("'",'&#39;',$xmlStr);
    $xmlStr=str_replace("&",'&amp;',$xmlStr);
    return $xmlStr;
}

// Connect to the database using PDO
$dbh = config::getConnexion();

// Select all the rows in the transport table
$query = "SELECT * FROM transport";
$result = $dbh->query($query);
if (!$result) {
    die('Invalid query: ' . $dbh->errorInfo()[2]);
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;
// Iterate through the rows, printing XML nodes for each
while ($row = $result->fetch(PDO::FETCH_ASSOC)){
    // Add to XML document node
    echo '<marker ';
    echo 'id="' . $row['Id_T'] . '" ';
    echo 'name="' . parseToXML($row['Nom']) . '" ';
    echo 'address="' . parseToXML($row['Adresse']) . '" ';
    echo 'lat="' . $row['lat'] . '" ';
    echo 'lng="' . $row['lng'] . '" ';
    echo 'type="' . $row['Type'] . '" ';
    echo '/>';
    $ind = $ind + 1;
}

// End XML file
echo '</markers>';

// Close PDO connection
$dbh = null;
?>
