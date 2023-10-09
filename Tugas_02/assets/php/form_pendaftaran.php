<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
    font-family: sans-serif;
    background-image: url('https://www.itera.ac.id/wp-content/uploads/2020/01/3.jpg');
    background-size: cover;
    }

        div {
        margin-top: -15px;
    }

        .container {
        width: 800px;
        margin: auto;
        margin-top: 50px;
        padding: 0 14px;
        box-sizing: border-box;
    }

        .header {
        width: 100%;
        background-color: royalblue;
        text-align: center;
        padding: 20px 0;
        color: #fff;
    }
    </style>
    <title>Data Pendaftaran</title>
</head>
<body>
    <h1>Data Pendaftaran</h1>
    <div class="container">
        <table border="1"></table>
        <tr>
            <td>Nama Lengkap </td>
                <td>  :  </td>
                <td><?php echo $_GET['nama']; ?></td>
            </tr>

            <tr>
                <td>Peran Dalam Tim  </td>
                <td>  :  </td>
                <td><?php echo $_GET['peran']; ?></td>
            </tr>

            <tr>
                <td>Nama Tim </td>
                <td>  :  </td>
                <td><?php echo $_GET['namatim']; ?></td>
            </tr>

            <tr>
                <td>Anggota Tim 1 </td>
                <td>  :  </td>
                <td><?php echo $_GET['nama1']; ?></td>
            </tr>

            <tr>
                <td>Anggota Tim 2 </td>
                <td>  :  </td>
                <td><?php echo $_GET['nama2']; ?></td>
            </tr>

            <tr>
                <td>Anggota Tim 3 </td>
                <td>  :  </td>
                <td><?php echo $_GET['nama3']; ?></td>
            </tr>

            <tr>
                <td>Anggota Tim 4 </td>
                <td>  :  </td>
                <td><?php echo $_GET['nama4']; ?></td>
            </tr>

            <tr>
                <td>Anggota Tim 5 </td>
                <td>  :  </td>
                <td><?php echo $_GET['nama5']; ?></td>
            </tr>

            <tr>
                <td>Angkatan </td>
                <td>  :  </td>
                <td><?php echo $_GET['angkatan']; ?></td>
            </tr>

            <tr>
                <td>Hobi </td>
                <td>  :  </td>
                <td><?php echo $_GET['hobi']; ?></td>
        </tr>
    </div>
    
</body>
</html>