<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <script defer src="../js/registerscript.js"></script>
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

    <!-- register section -->
    <section class="register">
    <div class="container">
            <h2 class="text-center">Register</h2>
            <center>
            <form id="form" action="../controller/registerCheck.php" method="post" enctype="multipart/form-data">
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
                    :<input id="password" type="text" name="password" value="">
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>

                <td>
                    :<input id="email" type="text" name="email" value="">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="name">Name</label>
                </td>

                <td>
                    :<input id="name" type="text" name="name" value="">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="location">Location</label>
                </td>

                <td>
                    :<input id="location" type="text" name="location" value="">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="phone">Phone</label>
                </td>

                <td>
                    :<input id="phone" type="number" name="phone" value="">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="image">Profile Picture</label>
                </td>

                <td>
                    :<input id="image" type="file" name="image" value="">
                </td>
            </tr>

            <tr>
                <td><br>
                    <button class="btn btn-small btn-small-primary" type="submit" name="submit">
                        Register
                    </button>
                </td>
                
                <td>
                    <br>
                    <a class="btn btn-red btn-red-primary" href="login.php">Login</a>
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