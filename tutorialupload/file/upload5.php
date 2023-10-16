<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        body {
            width: 800px;
            margin: auto;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 90vh;
            background-color: #87cefa;
        }
        h2 {
            text-align: center;
            text-transform: uppercase;
            text-underline: under;
            text-decoration: underline black; 
        }
        button {
            padding: 10px;
            font-weight: bold;
            color: white;
            background-color: #4caf50;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapes: collapse;
            margin-top: 10px;
        }
        table thead {
            background-color: gray;
            border: 1px solid black;
            font-size: 16px;
            height: 50px;
            color: white;
        }
        table td {
            text-align: center;
            padding: 10px;
        }
        label {
            font-weight: bold;
            color: white;
            background-color: red;
            padding: 5px 10px;
            border-radius: 5px;
        }
        a {
            text-decoration: none;
            font-weight: bold;
            background-color: #4caf50;
            padding: 5px 10px;
            color: white;
        }
        a:hover {
            color: black;
        }
        div {
            border: 1px solid black;
            padding: 20px
            width: 100%;
            background-color: white;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div>
        <h2>Tabel Upload dan Download Jurnal Komunikasi</h2>
        <button onclick="document.location='halaman_tambah5.php'">Tambah Data</button>
        
        <table border="1">
            <thead>
                <tr>
                    <th style="width: 30px">No</th>
                    <th style="width: 100px">Kode</th>
                    <th >Nama</th>
                    <th style="width: 100px">Type</th>
                    <th style="width: 100px">Ukuran</th>
                    <th style="width: 100px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Kode</td>
                    <td>Judul Dokumen</td>
                    <td><label for="">PDF</label></td>
                    <td>1MB</td>
                    <td><a href="">Download</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>