<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Dokumen Law</title>
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
            display: black;
            margin-top: 20px;
            float: right;
        }
        label {
            font-weight: bold;
            display: black;
            font-size: 20px;
            margin-bottom: 10px;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid grey;
            border-radius: 5px;
            box-sizing: border-box;
        }
        div {
            border: 1px solid black;
            padding: 20px
            width: 90%;
            background-color: white;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    
    <div>
        <h2>Form Upload File (PDF)</h2>
        <form action="scriptuploadfile.php" method="post" enctype="multipart/form-data">
            <label for="kode">Kode Jurnal</label>
            <input type="text" name="kode" id="kode" placeholder="Masukkan Kode">
            <label for="nama">Nama Jurnal</label>
            <input type="text" name="nama" id="nama" placeholder="Masukkan Nama">
            <label for="berkas">Upload File (PDF)</label>
            <input type="file" name="berkas" id="berkas" accept=".pdf">
            <button type="submit">Upload File</button>
        </form>
    </div>
</body>
</html>

