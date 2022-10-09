<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fifth</title>
	<style>
        html, body {
            height: 100%;
            color: #A5C9CA;
        }

        html {
            display: table;
            margin: auto;
        }

        body {
            background-color: #2C3333;
            display: table-cell;
            vertical-align: middle;
            font-size: 1em;
        }

        table {
	        text-align: left;
            border-collapse: collapse;
        }

        th, td {
	        padding: 2vh 4vw 2vh 2vw;
        }

        table,th,td {
	        border: 0.2vh solid #E7F6F2;
        }
	</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "webtech";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM selecttest";
$result = $conn->query($sql);
?>
<table>
	<tr>
		<th>Roll No</th>
		<th>Name</th>
	</tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
			<tr>
				<td><?php echo $row['Roll_No']; ?></td>
				<td><?php echo $row['Name']; ?></td>
			</tr>
            <?php
        }
    } else {
        echo "0 results";
    }
    $conn->close(); ?>
</table>

<script>

</script>
</body>
</html>