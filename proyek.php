<html>
	<head>
		<title>Project</title>
		<style>
				body {
					background-color: whitesmoke;
					font-family: sans-serif;
				}

				header{
					background-color: #123;
					color: white;
					border-bottom: orange 5px outset;
					min-height: 70px;
				}	
				
				header form{
					float: left;
					padding: 0 20px 0 20px;
					margin-top: 15px;
				}
					
				header li{
					float: right;
					display: inline;
					padding: 0 20px 0 20px;
					margin-top: 45px;
				}
				
				header a{
					text-decoration: none;
					color: gold;
					text-transform: uppercase;
				}
				
				header a:hover{
					color: gray;
					font-weight: bold;
				}

				section{
					height: 66%;
				}
				
				section form {
					padding: 25px;
					margin-top: 30px;
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
				
				footer{
					background-color: #123;
					min-height: 70px;
					color: white;
				}
		</style>
	</head>
	<body>
		<header>
			<ul>
                <li><a href=""><font>HOME</font></a></li>
                <li><a href=""><font>Zulbejul</font></a></li>
					<form class="jam" name="Tick">
						<input type="text" size="12" name="Clock">
					</form>
        <script type="text/javascript">
            function show()
            {
                var Digital=new Date()   
                var hours=Digital.getHours()
                var minutes=Digital.getMinutes()
                var seconds=Digital.getSeconds()
                var dn="AM"
                if (hours>12){
                    dn="PM"
                    hours=hours-12
                }
                if (hours==0)
                    hours=12
                if (minutes<=9)
                    minutes="0"+minutes
                if (seconds<=9)
                    seconds="0"+seconds
                document.Tick.Clock.value=
                    hours+":"+minutes+":"+seconds+" "+dn
                setTimeout("show()",1000) 
            }
            show()
        </script>
            </ul>
            
			</header>
		<section>
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
		</section>
		<footer>
				<p align="center">Built by &copy Adit, Zul, Lukman, Soleh</p>
		</footer>
	</body>
</html>
