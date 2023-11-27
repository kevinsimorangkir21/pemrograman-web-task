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
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $data = array(
                    array("121140000", "Lorem", "lorem@example.com", "Jl. Merdeka 123"),
                    array("121140000", "Ipsum", "ipsum@example.com", "Jl. Kemerdekaan 456"),
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
