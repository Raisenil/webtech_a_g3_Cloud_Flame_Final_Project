<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <script defer src="../js/loginscript.js"></script>
</head>
<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="../index.php" title="Logo">
                    <img src="images/logo.jpg" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
            <ul>
					<li>
						<a href="../index.php">Home</a>
					</li>
					<li>
						<a href="catagories.php">Catagories</a>
					</li>
					<li>
						<a href="foods.php">Foods</a>
					</li>
					<li>
						<a href="book-a-table.php">Book a Table</a>
					</li>
					<li>
						<a href="login.php">Account</a>
					</li>
					<li>
						<a href="contacts.php">Contacts</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
				</ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>

    <!-- Login section -->
    <section class="login">
    <div class="container">
            <h2 class="text-center">Log in</h2>
            <center>
            <form id="form" action="../controller/loginCheck.php" method="post">
            <table>
            <tr>
                <td>
                    <label for="username">Username</label>
                </td>

                <td>
                    :<input id="username" type="text" name="username" value="">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="password">Password</label>
                </td>

                <td>
                    :<input id="password" type="password" name="password" value="">
                </td>
            </tr>

            <tr>
                <td><br>
                    <button class="btn btn-small btn-small-primary" type="submit" name="submit">
                        Login
                    </button>
                </td>
                
                <td>
                    <br>
                    <a class="btn btn-red btn-red-primary" href="registration.php">Register</a>
                </td>
            </tr>
        </table>
        </form>
        <br>
        <br>
        <div id="error"></div>
        </center>
        
    </section>
</body>
</html>