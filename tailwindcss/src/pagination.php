<?php
    $servername = "simpleconsultants.ai";
    $username = "changjie_sc";
    $password = "y4W~ue^etNT2";
    $dbname = "changjie_sc";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    echo "
		<style>
			table, th, td {
			  border: 1px solid black;
			}
		</style>
	";

	$sql = "SELECT * FROM `product`";
		$result = $conn->query($sql);	
		
		echo "	
			<table>
			  <tr>
				<th>ID</th>
				<th>Name</th>
			  </tr>";
		
		while($row = $result->fetch_assoc()) {
			//echo $row["name"];
			//echo $row["position"];
			
			echo "
			  <tr>
				<td>".$row["id"]."</td>
				<td>".$row["name"]."</td>
			  </tr>";
		}
		
		echo "</table>";

        $phpArray = [1, 2, 3, 4, 5];
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
</head>
<body>
    <h2>Pagination</h2>


    
    <table id="items-table" border="1" style="width: 100%; text-align: left; border-collapse: collapse;">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
            <th>Column 3</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Item 1A</td>
            <td>Item 1B</td>
            <td>Item 1C</td>
        </tr>
        <tr>
            <td>Item 2A</td>
            <td>Item 2B</td>
            <td>Item 2C</td>
        </tr>
        <tr>
            <td>Item 3A</td>
            <td>Item 3B</td>
            <td>Item 3C</td>
        </tr>
        <tr>
            <td>Item 4A</td>
            <td>Item 4B</td>
            <td>Item 4C</td>
        </tr>
        <tr>
            <td>Item 5A</td>
            <td>Item 5B</td>
            <td>Item 5C</td>
        </tr>
        <tr>
            <td>Item 6A</td>
            <td>Item 6B</td>
            <td>Item 6C</td>
        </tr>
        <tr>
            <td>Item 7A</td>
            <td>Item 7B</td>
            <td>Item 7C</td>
        </tr>
        <tr>
            <td>Item 8A</td>
            <td>Item 8B</td>
            <td>Item 8C</td>
        </tr>
        <tr>
            <td>Item 9A</td>
            <td>Item 9B</td>
            <td>Item 9C</td>
        </tr>
        <tr>
            <td>Item 10A</td>
            <td>Item 10B</td>
            <td>Item 10C</td>
        </tr>
        <tr>
            <td>Item 11A</td>
            <td>Item 11B</td>
            <td>Item 11C</td>
        </tr>
        <tr>
            <td>Item 12A</td>
            <td>Item 12B</td>
            <td>Item 12C</td>
        </tr>
    </tbody>
</table>

<div id="pagination">
    <button id="prev" onclick="prevPage()">Previous</button>
    <span id="page-number"></span>
    <button id="next" onclick="nextPage()">Next</button>
</div>



</body>
</html>

<?php if (false) { ?>
    <h1>test</h1>
<?php } ?>