<h1>Changing the information.</h1>
<div class="container">
	<form action="<?= URL ?>birthday/editSave" method="post">
		<input type="text" name="person" value="<?= $birthday['person'] ?>">
		<input type="text" name="day" value="<?= $birthday['day'] ?>">
		<select name="month">
			<option value="1" <?php if ($birthday["month"] == 1) {echo "selected";} ?>>January</option>
			<option value="2" <?php if ($birthday["month"] == 2) {echo "selected";} ?>>February</option>
			<option value="3" <?php if ($birthday["month"] == 3) {echo "selected";} ?>>March</option>
			<option value="4" <?php if ($birthday["month"] == 4) {echo "selected";} ?>>April</option>
			<option value="5" <?php if ($birthday["month"] == 5) {echo "selected";} ?>>May</option>
			<option value="6" <?php if ($birthday["month"] == 6) {echo "selected";} ?>>June</option>
			<option value="7" <?php if ($birthday["month"] == 7) {echo "selected";} ?>>July</option>
			<option value="8" <?php if ($birthday["month"] == 8) {echo "selected";} ?>>August</option>
			<option value="9" <?php if ($birthday["month"] == 9) {echo "selected";} ?>>September</option>
			<option value="10" <?php if ($birthday["month"] == 10) {echo "selected";} ?>>October</option>
			<option value="11" <?php if ($birthday["month"] == 11) {echo "selected";} ?>>November</option>
			<option value="12" <?php if ($birthday["month"] == 12) {echo "selected";} ?>>December</option>
		</select>
		<input type="text" name="year" value="<?= $birthday['year'] ?>">
		<input type="submit" value="Send!">
		<input type="hidden" name="id" value="<?= $birthday['id'] ?>">
	</form>
</div>