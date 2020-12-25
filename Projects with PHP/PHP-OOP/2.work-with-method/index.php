<?php 
include 'header.php';
include 'function.php';
?>





<form action="" method="post">
	<table>
		<tr>
			<td>Enter the first number : </td>
			<td><input type="number" name="num1"></td>
		</tr>

		<tr>
			<td>Enter the secont number : </td>
			<td><input type="number" name="num2"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="calculation" value="calculate"></td>
		</tr>
	</table>
</form>

<?php 

if (isset($_POST['calculation'])) {
	$numOne = $_POST['num1'];
	$numTwo = $_POST['num2'];

	if (empty($numOne) or empty($numTwo)) {
		echo "<span style='color:red'>Field must not be empty.</span>";
	} else {
		
	
	$cal = new Calculation;
	$cal->add($numOne,$numTwo);
	$cal->sub($numOne,$numTwo);
	$cal->mul($numOne,$numTwo);
	$cal->div($numOne,$numTwo);
}
}

?>




























<?php include 'footer.php'; ?>