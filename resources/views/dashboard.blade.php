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
            height: 120px;
            border-radius: 0px 20px 0px 0px;
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
        .card{
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
        #flex3{
            width: 1005px;
            margin-top: 10px;
            margin-left: 320px;
            height: 495px;
            z-index: 800;
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
            <h3 style="margin-bottom: 20px;"><b>Dashboard</b></h3>
        </div>
        <div id="flex3" class="container-fluid">
            <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
                <div class="card-header">Total Dana</div>
                <div class="card-body">
                    <h3 class="card-text">
                        @php
                            echo "Rp ";
                            echo $jumlah_dana;
                        @endphp
                    </h3>
                </div>
            </div>
            <div class="card text-white bg-danger mb-3" style="max-width: 20rem; margin-top : -125px; margin-left: 330px">
                <div class="card-header">Total Pengeluaran</div>
                <div class="card-body">
                    <h3 class="card-text">
                        @php
                            echo "Rp ";
                            echo $pengeluaran;
                        @endphp
                    </h3>
                </div>
            </div>
            <div class="card text-white bg-success mb-3" style="max-width: 20rem; margin-top : -125px; margin-left: 660px">
                <div class="card-header">Total Penghasilan</div>
                <div class="card-body">
                    <h3 class="card-text">
                        @php
                            echo "Rp ";
                            echo $penghasilan;
                        @endphp
                    </h3>
                </div>
            </div>
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Total Keuntungan</div>
                <div class="card-body">
                    <h3 class="card-text">
                        @php
                            $total_untung= $penghasilan - $pengeluaran;
                            echo "Rp ";
                            echo $total_untung;
                        @endphp
                    </h3>
                </div>
            </div>
            <div class="card text-white bg-warning mb-3" style="max-width: 20rem; margin-top : -125px; margin-left: 330px">
                <div class="card-header">Sisa Dana</div>
                <div class="card-body">
                    <h3 class="card-text">
                        @php
                            $sisa_dana= $jumlah_dana - $pengeluaran;
                            echo "Rp ";
                            echo $sisa_dana;
                        @endphp
                    </h3>
                </div>
            </div>
            <div class="card text-white bg-secondary mb-3" style="max-width: 20rem; margin-top : -125px; margin-left: 660px">
                <div class="card-header">Rata-Rata Penghasilan</div>
                <div class="card-body">
                    <h3 class="card-text">
                    @php
                        $rata = $penghasilan / $row;
                        echo "Rp ";
                        echo $rata;
                    @endphp
                    </h3>
                </div>
            </div>
            <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                <div class="card-header">-</div>
                <div class="card-body">
                    <h3 class="card-text">
                        Rp
                    </h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
