<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Home</title>
    <style>
        #flex1{
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            position: absolute;
            margin-top: 0px;
            margin-left: 10px;
            width: 300px;
            height: 625px;
            border-radius: 20px 0px 0px 20px;
            z-index: 5;
            background-color: #2f455c;
        }
        #flex2{
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            position: relative;
            width: 1005px;
            margin-top: 15px;
            margin-left: 320px;
            height: 625px;
            border-radius: 0px 20px 20px 0px;
            z-index: 500;
            padding: 50px;
        }
        #a{
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
        }
        #a2:hover{
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            background: white;
            transition: 0.5s;
            color: #2f455c;
        }
        a{
            text-decoration: none;
            color: white;
        }
        #a3{
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
        }
        #a3:hover{
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            background: #dc3545;
            transition: 0.5s;
            color: white;
        }
    </style>
</head>
<body style="background-color:#eeeeee">
    <div class="container-fluid">
        <div id="flex1" class="container" style="padding-top: 190px;">
            <div class="container">
                <div id="a" class="container">
                    <a id="a2" style="padding: 20px 162px 20px 36px ; margin-left: -36px;" href="/dashboard">Dashboard</a>
                </div>
                <div id="a" class="container" style="margin-top: 36px;">
                    <a id="a2" style="padding: 20px 170px 20px 36px ; margin-left: -36px;" href="/home">Keuangan</a>
                </div>
                <div id="a" class="container" style="margin-top: 36px;">
                    <a id="a2" style="padding: 20px 226px 20px 36px ; margin-left: -36px;" href="/info">info</a>
                </div>
                <div id="a" class="container" style="margin-top: 200px;">
                    <a id="a3" style="padding: 20px 197px 20px 36px ; margin-left: -36px;" href="/logout">Logout</a>
                </div>
            </div>
        </div>
        <div id="flex2" class="container bg-white">
            <h3 class="mb-5"><b>Info</b></h3>
            <a class="btn btn-primary mb-2 mt-4" href="/home"><b>Tambah</b></a>
            <p style="position : relative; margin-top: -57px; "><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            - Tombol ini digunakan untuk <strong>menambahkan</strong> data yang akan ditampilkan</h5></p>
            <a class="btn btn-warning mb-2 mt-4" href="/home"><b>Edit</b></a>
            <p style="position : relative; margin-top: -57px; "><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            - Tombol ini digunakan untuk <strong>mengedit</strong> suatu data yang ditampilkan</h5></p>
            <a class="btn btn-danger mb-2 mt-4" href="/home"><b>Hapus</b></a>
            <p style="position : relative; margin-top: -57px; "><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            - Tombol ini digunakan untuk <strong>menghapus</strong> suatu data yang dipilih</h5></p>
            <p class="mb-2 mt-4"><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            - Pada halaman <strong>Dashboard</strong> kita bisa melihat seluruh data yang terdapat pada tabel, seperti &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong>total</strong> dan <strong>rata-rata</strong></h5></p>
            <p class="mb-2 mt-4"><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            - Pada halaman <strong>Keuangan</strong> kita bisa melihat seluruh data yang berada pada <strong>database</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            yang ditampilkan pada tabel</h5></p>
            <p class="mb-2 mt-4"><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            - Halaman <strong>Logout</strong> digunakan untuk <strong>kembali</strong> ke halaman <strong>login</strong></h5></p>
        </div>
    </div>
</body>
</html>
