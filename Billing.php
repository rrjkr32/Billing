<html>
<head>
	<title>Billing </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php
$tota=0;
$totp=0;
$tax=0;
$ntot=0;
$error;
$c=0;
class Bill{
public $conn;

public function __construct()
{
	$this->conn=mysqli_connect("localhost","root","","billing");

}

function order($c,$cname,$cage,$one,$two,$three,$four,$five,$six,$seven,$eight,$totp,$tax,$ntot)
{
	if($cage<10)
	{
		$error="Age less than 10 cannot place order";
		return $error;
	}
	else if($c>3)
	{
		$error="Order only 3 items";

		return $error;
	}
	else if($c<3)
	{
		$error="Order only 3 items";

		return $error;
	}
	else
	{
		$sql1=mysqli_query($this->conn,"UPDATE tbl set stock=stock-$one,sold=sold+$one where sn=1");
		$sql2=mysqli_query($this->conn,"UPDATE tbl set stock=stock-$two ,sold=sold+$two where sn=2");
		$sql3=mysqli_query($this->conn,"UPDATE tbl set stock=stock-$three,sold=sold+$three where sn=3");
		$sql4=mysqli_query($this->conn,"UPDATE tbl set stock=stock-$four,sold=sold+$four where sn=4");
		$sql5=mysqli_query($this->conn,"UPDATE tbl set stock=stock-$five,sold=sold+$five where sn=5");
		$sql6=mysqli_query($this->conn,"UPDATE tbl set stock=stock-$six,sold=sold+$six where sn=6");
		$sql7=mysqli_query($this->conn,"UPDATE tbl set stock=stock-$seven,sold=sold+$seven where sn=7");
		$sql8=mysqli_query($this->conn,"UPDATE tbl set stock=stock-$eight,sold=sold+$eight where sn=8");

		$isql=mysqli_query($this->conn,"INSERT into bills (cname,cage,Pizza,Burger,Sandwich,Pastry,Patties,Cold_Drink,Coffee,Tea,Total,Tax,NetTot) values ('$cname',$cage,$one,$two,$three,$four,$five,$six,$seven,$eight,$totp,$tax,$ntot)" );
		
	}
}

}



?>

<?php
$ord=new Bill;


if(isset($_POST['submit']))
{
	$c=0;
	$cname=$_POST['cname'];
	$cage=(int)$_POST['cage'];
	$one=(int)$_POST['one'];
	$two=(int)$_POST['two'];
	$three=(int)$_POST['three'];
	$four=(int)$_POST['four'];
	$five=(int)$_POST['five'];
	$six=(int)$_POST['six'];
	$seven=(int)$_POST['seven'];
	$eight=(int)$_POST['eight'];

	if($one)$c=$c+1;
	if($two)$c=$c+1;
	if($three)$c=$c+1;
	if($four)$c=$c+1;
	if($five)$c=$c+1;
	if($six)$c=$c+1;
	if($seven)$c=$c+1;
	if($eight)$c=$c+1;
	
	$tota=$one+$two+$three+$four+$five+$six+$seven+$eight;
	$totp=($one*80)+($two*20)+($three*10)+($four*25)+($five*15)+($six*20)+($seven*15)+($eight*10);
	if($totp>100)
	{
		$tax=$totp*0.18;
	}
	else
	{
		$tax=$totp*0.10;
	}
	$ntot=$totp+$tax;

	$error=$ord->order($c,$cname,$cage,$one,$two,$three,$four,$five,$six,$seven,$eight,$totp,$tax,$ntot);

}


?>


<div class="jumbotron">
<h1 align="center"> CENTRAL PERK </h1>
<h2 align="center"> Invoice</h2>
	<form action="" method="POST">

		<div class="row">
				<div class="col-sm-2"></div>
		<div class="col-sm-4 " >
			<b>Cutomer name:</b><input type="text" name="cname" required="true" value="<?php echo isset($_POST['cname']) ? $_POST['cname'] : '' ?>" ></div>
			<div class="col-sm-3"><b>Cutomer Age:</b><input type="number" name="cage" required="true" value="<?php echo isset($_POST['cage']) ? $_POST['cage'] : '' ?>" >
			</div>
			<div class="col-sm-3">
			</div>

			
		</div>
	
	<div class="row">

		<!---<div class="col-sm-2"></div>
		<div class="col-sm-4 " >
			<b>Customer Name:</b><input type="text" name="cname" required="true"></div>
			<div class="col-sm-3"></div><div class="col-sm-3"></div>-->
			
			


		

		<div class="col-sm-2"></div>
		<div class="col-sm-4 " >
			<b>Item</b></div>
			<div class="col-sm-3">
			<b>Price</b></div>
			<div class="col-sm-3">
			<b>Quantity</b></div>
			

			

		<div class="col-sm-2"></div>
		<div class="col-sm-4 " >
			1.Pizza</div>
			<div class="col-sm-3">
			Rs.80</div>
			<div class="col-sm-3">
			<input type="number" name="one" value="<?php echo isset($_POST['one']) ? $_POST['one'] : 0 ?>" ></div>
			

			<div class="col-sm-2"></div>
		<div class="col-sm-4 " >
			2.Burger</div>
			<div class="col-sm-3">
			Rs.20</div>
			<div class="col-sm-3">
			<input type="number" name="two" value="<?php echo isset($_POST['two']) ? $_POST['two'] : 0 ?>" ></div>
			

			<div class="col-sm-2"></div>
		<div class="col-sm-4 " >
			3.Sandwich</div>
			<div class="col-sm-3">
			Rs.10</div>
			<div class="col-sm-3">
			<input type="number" name="three" value="<?php echo isset($_POST['three']) ? $_POST['three'] : 0 ?>" ></div>
			

			<div class="col-sm-2"></div>
		<div class="col-sm-4 " >
			4.Pastry</div>
			<div class="col-sm-3">
			Rs.25</div>
			<div class="col-sm-3">
			<input type="number" name="four" value="<?php echo isset($_POST['four']) ? $_POST['four'] : 0 ?>" ></div>
			

			<div class="col-sm-2"></div>
		<div class="col-sm-4 " >
			5.patties</div>
			<div class="col-sm-3">
			Rs.15</div>
			<div class="col-sm-3">
			<input type="number" name="five" value="<?php echo isset($_POST['five']) ? $_POST['five'] : 0 ?>" ></div>
			

			<div class="col-sm-2"></div>
		<div class="col-sm-4 " >
			6.Cold Drink</div>
			<div class="col-sm-3">
			Rs.20</div>
			<div class="col-sm-3">
			<input type="number" name="six" value="<?php echo isset($_POST['six']) ? $_POST['six'] : 0 ?>" ></div>
			

			<div class="col-sm-2"></div>
		<div class="col-sm-4 " >
			7.Coffee</div>
			<div class="col-sm-3">
			Rs.15</div>
			<div class="col-sm-3">
			<input type="number" name="seven" value="<?php echo isset($_POST['seven']) ? $_POST['seven'] : 0 ?>" ></div>
			

			<div class="col-sm-2"></div>
		<div class="col-sm-4 " >
			8.Tea</div>
			<div class="col-sm-3">
			Rs.10</div>
			<div class="col-sm-3">
			<input type="number" name="eight" value="<?php echo isset($_POST['eight']) ? $_POST['eight'] : 0 ?>" ></div></div>
			<br>
			<br>
			<br>

			<div class="row">
			<div class="col-sm-2"></div>
		<div class="col-sm-4 " >
			<b>Total</b></div>
			<div class="col-sm-3" name="tota">
			<b><?php echo "Rs.".@$totp ?><b></div>
			<div class="col-sm-3" name="totp">
			<b><?php echo @$tota ?></b></div>

			</div>


				<div class="row">
					<div class="col-sm-2"></div>

					<div class="col-sm-4 " >
						<b>Tax</b></div>

						<div class="col-sm-3" name="tax">
						<b> <?php echo "Rs.".@$tax ?> </b> </div>

						<div class="col-sm-3"">
						</div>


					</div>

					<div class="row">
			<div class="col-sm-2"></div>
					<div class="col-sm-4 " >
						<b>Net Total</b></div>
						<div class="col-sm-3" name="tax">
						<b><?php echo "Rs.".@$ntot ?></b></div>
						<div class="col-sm-3"">
						</div>
					</div>
				<br><br>
			<div class="col-sm-6"></div><div class="col-sm-6"><input type="submit" name="submit" value="Place" ></div>
			
			<div class="row">
				<div class="col-sm-5"></div><div class="col-sm-7"> <?php echo @$error ?> </div> </div>
		
		

	
	</form>

</div>





</body>
</html>