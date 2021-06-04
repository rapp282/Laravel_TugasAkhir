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
            <h3 class="mb-1"><b>Data Keuangan</b></h3>
            <a class="btn btn-primary mb-2" style="margin-left:90%;" href="/home/tambah"><b>Tambah</b></a>
            <table class="table table-responsive table-hover table-striped">
                <thead>
                    <th>Jumlah Dana</th>
                    <th>Pengeluaran</th>
                    <th>Penghasilan</th>
                    <th>Keuntungan</th>
                    <th>Total</th>
                    <th><center>Status</center></th>
                    <th><center>Lainnya</center></th>
                </thead>
                <tbody>
                    @foreach ($keuangan as $k)
                        <tr>
                            <td>Rp {{$k -> jumlah_dana}}</td>
                            <td>Rp {{$k -> pengeluaran}}</td>
                            <td>Rp {{$k -> penghasilan}}</td>
                            <td>
                            @php
                                $penghasilan = $k -> penghasilan;
                                $pengeluaran = $k -> pengeluaran;
                                $keuntungan = $penghasilan - $pengeluaran;
                                echo "Rp ";
                                echo $keuntungan;
                            @endphp
                            </td>
                            <td>
                            @php
                                $jumlah_dana = $k -> jumlah_dana;
                                $penghasilan = $k -> penghasilan;
                                $pengeluaran = $k -> pengeluaran;
                                $total = $jumlah_dana + $penghasilan - $pengeluaran;
                                echo "Rp ";
                                echo $total;
                            @endphp
                            </td>
                            <td>
                            @php
                                $penghasilan = $k -> penghasilan;
                                $pengeluaran = $k -> pengeluaran;
                                if ($penghasilan > $pengeluaran)
                                {
                                    echo "<center><b>Untung</b></center>";
                                }
                                else
                                {
                                    echo "<center>Rugi</center>";
                                }
                            @endphp
                            </td>
                            <td>
                                <center><a href="/home/edit/{{$k->id}}" class="btn btn-warning">Edit</a>
                                <a href="/home/hapus/{{$k->id}}" class="btn btn-danger">Hapus</a></center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
