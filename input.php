<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Input</title>
    <style>
        .tombol {
            display: flex;
            justify-content: flex-end;
        }

        thead {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <section>
        <form action="data.php" method="post">
            <table class="table table-hover ">
                <thead>
                    <th>
                        <h2>Profil dari</h2>
                    </th>
                </thead>
                <tr>
                    <td>NIM</td>
                    <td>
                        <div>
                            <input type="number" id="nim" name="nim" placeholder="21110110012">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        <div>
                            <input type="text" id="nama" name="nama" placeholder="Nama">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <div>
                            <input type="radio" name="jk" id="jk" value="Laki-Laki">
                            <label for="jk">Laki-Laki</label>
                        </div>
                        <div>
                            <input type="radio" name="jk" id="jk" value="Perempuan">
                            <label for="jk">Perempuan</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status" id="status" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="Nikah">Menikah</option>
                            <option value="Lajang">Lajang</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>No Hp</td>
                    <td><input id="telfon" name="telfon" type="Number" placeholder="081313962444" aria-label="Username" aria-describedby="basic-addon1"></div>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" id="alamat" cols="30" rows="3"></textarea></td>
                </tr>
            </table>
            <div class="tombol">
                <button type="submit" class="btn btn-success">Success</button>
            </div>
        </form>
    </section>


</body>

</html>