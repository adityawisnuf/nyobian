<html>
	<head>
		<title>Project</title>
		<style>
				body {
					background-color: aqua;
					font-family: sans-serif;
				}

				h1 {
					background-color: red;
					padding: 15px;
					border: 3px solid black;
					border-radius: 15px;
				}

				form {
					padding: 25px;
					margin-left: 24%;
					border: 5px solid black;
					border-radius: 20px;
					width: 50%;
					background-color: darkorange;
				}

				td {
					padding: 5px;
				}

				input[type="text"] {
					background-color: yellow;
					border: 2px solid black;
					border-radius: 7px;
					padding: 10px;
				}

				textarea {
					background-color: yellow;
					border: 2px solid black;
					border-radius: 7px;
				}

				input[type="submit"] {
					background-color: blue;
					border: 2px solid black;
					padding: 10px;
					width: 100px;
					margin-right: 100px;
					font-family: sans-serif;
					color: white;
				}
		</style>
	</head>
	<body>
        <h1 align="center">Ngajaran Nyieun Project Duudee</h1>
		<hr>
        <form>
            <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Masukan Nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" placeholder="Masukan Kelas"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea placeholder="Jl.****"></textarea></td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><input type="text" name="asal" placeholder="SMA/SMK"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="lk">Laki Laki</td>
                <td><input type="radio" name="pr">Perempuan</td>
            </tr>
            <tr>
                <td><input type="submit" value="Kirim"></td>
            </tr>
        </table>
        </form>
		<hr>
		<footer>
				<p align="center">Built by &copy Adit, Zul, Lukman, Soleh</p>
		</footer>
	</body>
</html>
