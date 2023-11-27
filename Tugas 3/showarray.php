<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tampilkan Array</title>
</head>
<body>
    <h1>Tampilkan Array</h1>
    <table border="1">
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $data = array(
                    array("12345", "John Doe", "johndoe@example.com", "Jl. Merdeka 123"),
                    array("67890", "Jane Doe", "janedoe@example.com", "Jl. Kemerdekaan 456"),
                );

                foreach ($data as $row) {
                    echo "<tr>";
                    echo "<td>{$row[0]}</td>";
                    echo "<td>{$row[1]}</td>";
                    echo "<td>{$row[2]}</td>";
                    echo "<td>{$row[3]}</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
