<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login | Pemrograman Web I</title>
	<link rel="stylesheet" href='./asset/css/style.css'>
</head>

<body>
	<table cellspacing="0" cellpadding="15px" id="container">
		<tr>
			<td>
				<img src="./asset/image/logo unsri.jpg" alt="Logo Unsri" class="imgcenter" />
				<h1 class="top">Halaman Login</h1>
				<form id="f_login" name="f_login" method="post" action="Welcome/do_login">
					<table>
						<tr>
							<td>
								<label for="username">
									Username
								</label>
							</td>
							<td>
								<input id="username" name="username" type="text" />
							</td>
						</tr>
						<tr>
							<td>
								<label for="password">
									Password
								</label>
							</td>
							<td>
								<input id="password" name="password" type="password" />
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" value="login" />
							</td>
						</tr>
					</table>
				</form>
			</td>
		</tr>
	</table>
</body>

</html>
