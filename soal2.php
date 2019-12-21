<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<style>
body{
    background-color: #fafafa;
}
table{
    width: 100%;
    height: auto;
}

input[type=text], [type=email], [type=password]{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #f5f5f5;
  }

  .button {
    background-color: #ff9800;
    border: none;
    color: white;
    padding: 10px 20px;
    border-radius: 3px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
  }
</style>
<body>
	<div class="login">
		<form action="#" method="POST" onSubmit="validasi()">
            <table>
			<div>
                <tr>
                    <td><label>Nama Lengkap:</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="nama" id="nama" maxlength="6"/></td>
                </tr>
			</div>
			<div>
                <tr>
                    <td><label>Email:</label></td>    
                </tr>
				<tr>
                    <td><input type="email" name="email" id="email" /></td>
                </tr>
			</div>
			<div>
                <tr>
                    <td><label>Alamat:</label></td>
                </tr>
				<tr>
                    <td><input type="password" name="password" id="password" /></td>
                </tr>
			</div>
			<div>
                <tr>
                    <td><input class="button" type="submit" value="Daftar"></td>
                </tr>
            </div>
            </table>
		</form>
	</div>
</body>
<script type="text/javascript">
	function validasi() {
		var nama = document.getElementById("nama").value;
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;
		if (nama != "" && email!="" && password !="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
</script>
</html>