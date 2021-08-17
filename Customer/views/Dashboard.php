<?php 
   session_start();
   //echo $_SESSION[''];
   if($_COOKIE['flag']==1)
   {
   	echo isset($_POST['cancelOrder']);
   	//$_SESSION['temp']=1;
?>

<!DOCTYPE html>
<html style="background-color:#FFB266;">
   <head>
      <title></title>
   </head>
   <body >
      <form method="POST" action="" >
         <table align= "center" border="0" width=100% height=700px style="background-color:#FF8000;">
            <tr height=70px>
               <!-- r1-->
               <td rowspan="3" style="background-color:#FF8000;" width=80 align= "center" >
                  <img src="picture/manu.png" height="40px" width="40px" ><br><br>
                  <a href="Dashboard.php"><img src="picture/home.png" height="30px" width="30px" ></a><br>
                  <a href="Profile.php"><img src="picture/profile.png" height="40px" width="40px" ></a>
                  <a href="Help.php"><img src="picture/help.png" height="40px" width="40px" ></a><br>Help<br>
                  <a href="../logics/logoutCheck.php"><img src="picture/logout.png" height="60px" width="60px" ></a>
               </td>
               <td colspan="5" style="background-color:#FFB266;">
                  <h1 align="center"  style="color:white;"><?php echo "Wellcome ".$_COOKIE['name']; ?></h1>
               </td>
            </tr>
            <tr height=70px>
               <!-- r2-->
               <td colspan="3" style="background-color:white;">
                  <h2 id="htotal"> Total Price: <?php echo $_SESSION['total'];?></h2>
                  Total Order Placed: <?php echo $_SESSION['totalOrder'];?>
               </td>
               <td style="background-color:white;">
                  <input type="button" name="placeOrder" value="  Place Order  " style="background-color:#66CC00;" onclick="placeOrCancel('p')">
                  <input type="button" name="cancelOrder" value=" Cancel Order " style="background-color:red;" onclick="placeOrCancel('c')">
               </td>
               <td style="background-color:cyan;">
                  <h3 align="center" style="color:#008000;"> Enjoy Up to 10% Discount.</h3>
               </td>
            </tr>
            <tr>
               <!-- r3-->
               <td style="background-color:white;" width="210px">
                  <img src="picture/foods/food1.jpg" height="200px" width="200px">
                  <b style="color:#FF8000;"> Chow Mein 200 TK.</b>
                  <br>
                  <input type="button"name="a1" style="color:green;" onclick="update(200,'f1','+')" id="a1" value="Add to Cart">
                  <input type="button"name="d1" style="color:red;" onclick="update(-200,'f1','-')" id="d1" value=" - ">
                  <!--<input type="hidden" name="h1" value="<?=$_POST['f1']?>"-->
                  <p id="f1"><?php echo $_SESSION['f1']; ?></p>
               </td>
               <td style="background-color:white;" width="210px">
                  <img src="picture/foods/food2.jpg" height="200px" width="200px">
                  <b style="color:#FF8000;"> Pasta 220 TK.</b>
                  <br>
                  <input type="button"name="a1" style="color:green;" onclick="update(220,'f2','+')" id="a1" value="Add to Cart">
                  <input type="button"name="d1" style="color:red;" onclick="update(-220,'f2','-')" id="d1" value=" - ">
                  <p id="f2"><?php echo $_SESSION['f2']; ?></p>
               </td>
               <td style="background-color:white;" width="210px">
                  <img src="picture/foods/food3.jpg" height="200px" width="200px">
                  <b style="color:#FF8000;"> Baked Fish 500 TK.</b>
                  <br>
                  <input type="button"name="a1" style="color:green;" onclick="update(500,'f3','+')" id="a1" value="Add to Cart">
                  <input type="button"name="d1" style="color:red;" onclick="update(-500,'f3','-')" id="d1" value=" - ">
                  <p id="f3"><?php echo $_SESSION['f3']; ?></p>
               </td>
               <td style="background-color:white;" width="210px">
                  <img src="picture/foods/food4.jpg" height="200px" width="200px">
                  <b style="color:#FF8000;"> Burger 250 TK.</b>
                  <br>
                  <input type="button"name="a1" style="color:green;" onclick="update(250,'f4','+')" id="a1" value="Add to Cart">
                  <input type="button"name="d1" style="color:red;" onclick="update(-250,'f4','-')" id="d1" value=" - ">
                  <p id="f4"><?php echo $_SESSION['f4']; ?></p>
               </td>
               <td rowspan="2" style="background-color:white;">
                  <img src="picture/foods/juice2.jpg" height="500px" width="300px">
                  <b style="color:#FF8000;"> Juice 50 TK.</b>
                 <br>
                  <input type="button"name="a1" style="color:green;" onclick="update(50,'f5','+')" id="a1" value="Add to Cart">
                  <input type="button"name="d1" style="color:red;" onclick="update(-50,'f5','-')" id="d1" value=" - ">
                  <p id="f5"><?php echo $_SESSION['f5']; ?></p>
               </td>
            </tr>
            <tr>
               <!-- r4-->
               <td style="background-color:#FF8000;">
               </td>
               <td style="background-color:white;">
                  <img src="picture/foods/food5.jpg" height="200px" width="200px" >
                  <b style="color:#FF8000;"> Potato Fries 90 TK.</b>
                 <br>
                  <input type="button"name="a1" style="color:green;" onclick="update(90,'f6','+')" id="a1" value="Add to Cart">
                  <input type="button"name="d1" style="color:red;" onclick="update(-90,'f6','-')" id="d1" value=" - ">
                  <p id="f6"><?php echo $_SESSION['f6']; ?></p>
               </td>
               <td style="background-color:white;">
                  <img src="picture/foods/food6.jpg" height="200px" width="200px">
                  <b style="color:#FF8000;"> Pizza 9" 500 TK.</b>
                  <br>
                  <input type="button"name="a1" style="color:green;" onclick="update(500,'f7','+')" id="a1" value="Add to Cart">
                  <input type="button"name="d1" style="color:red;" onclick="update(-500,'f7','-')" id="d1" value=" - ">
                  <p id="f7"><?php echo $_SESSION['f7']; ?></p>
               </td>
               <td style="background-color:white;" width="210px">
                  <img src="picture/foods/food7.jpg" height="200px" width="200px">
                  <b style="color:#FF8000;"> Sandwich 120 TK.</b>
                  <br>
                  <input type="button"name="a1" style="color:green;" onclick="update(120,'f8','+')" id="a1" value="Add to Cart">
                  <input type="button"name="d1" style="color:red;" onclick="update(-120,'f8','-')" id="d1" value=" - ">
                  <p id="f8"><?php echo $_SESSION['f8']; ?></p>
               </td>
               <td style="background-color:white;">
                  <img src="picture/foods/food8.jpg" height="200px" width="200px">
                  <b style="color:#FF8000;"> Burger & Fries 300 TK.</b>
                  <br>
                  <input type="button"name="a1" style="color:green;" onclick="update(300,'f9','+')" id="a1" value="Add to Cart">
                  <input type="button"name="d1" style="color:red;" onclick="update(-300,'f9','-')" id="d1" value=" - ">
                  <p id="f9"><?php echo $_SESSION['f9']; ?></p>
               </td>
            </tr>
            <tr>
               <td height="200"></td>
               <td align="center"><a href="Payment.php">Payment</a></td>
               <td align="center"><a href="Review.php">Review</a></td>
               <td align="center"><a href="Aboutus.php">About Us</a></td>
               <td align="center"><a href="Contuct.php">Contuct</a></td>
               <td align="center"><a href="Polyce.php">Polyce</a></td>
            </tr>
            <tr>
               <td colspan="6"  align="center">Copyright&copy2021</td>
            </tr>
         </table>
      </form>
      <script>
     function update(price,id,sign)
	{
		//let email = document.getElementById('email').value;
		tem=parseInt(document.getElementById(id).innerHTML);
		//id2="'"+id+"'";
		console.log(price+" "+id);
		
		//var a=[price,id]
		if(sign=='+')
		{
			tem+=1;
			//sessionStorage.setItem("f1",tem);
			const json = {
			'price':price,
			'id':id,
			'quantity':tem
			};
			const data=JSON.stringify(json);
			document.getElementById(id).innerHTML=tem;
			const http = new XMLHttpRequest();
			http.open('POST', 'total.php', true);
			http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");//maybe for post req
			http.send(`data=${data}`);
			http.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('htotal').innerHTML =' Total Price: '+(this.responseText);
					//console.log(this.responseText);
				}
			}
		}
		else if(sign=='-' && tem>0)
		{
			tem-=1;
			const json = {
			'price':price,
			'id':id,
			'quantity':tem
			};
			const data=JSON.stringify(json);
			document.getElementById(id).innerHTML=tem;
			const http = new XMLHttpRequest();
			http.open('POST', 'total.php', true);
			http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");//maybe for post req
			http.send(`data=${data}`);
			http.onreadystatechange = function(){

				if(this.readyState == 4 && this.status == 200){
					document.getElementById('htotal').innerHTML =' Total Price: '+(this.responseText);
					//console.log(this.responseText);
				}
			}
		}
	}
	function placeOrCancel(action){
		//document.getElementById(id).innerHTML=tem;
		const http = new XMLHttpRequest();
		http.open('POST', 'placeOrCancelOrder.php', true);
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");//maybe for post req
		http.send(`action=${action}`);
		http.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				//document.getElementById('htotal').innerHTML =' Total Price: '+(this.responseText);
				console.log(this.responseText);
				//const r = JSON.parse(this.responseText);
				//document.getElementById('f1').innerHTML = r.f1;
				location.reload();

			}
		}
	}

      </script>
   </body>
</html>
<?php  
   }
   else
   {
   	//$_SESSION['flag']=0;
   echo"<h1> Invalid Request! Go Back..</h1>";
   }
   
?>