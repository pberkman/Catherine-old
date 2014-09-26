<?php include "header.php"; ?>

<section class="right-wrapper selected">
<h3>Schedule an Appointment</h3>
<p>Please fill out the form below to schedule an appointment. I will contact you with the next available date and time based on your specifications within 24 hours.</p>
<form>
	<table >
		<tr>
			<th><label for="name">Name:</label></th>
			<td><input type="text" id="name" name="name"/></td>
		</tr>
		<tr>
			<th><label for="phone">Phone Number:</label></th>
			<td><input type="tel" id="phone" name="phone"/></td>
		</tr>
		<tr>
			<th><label for="email">Email:</label></th>
			<td><input type="email" id="email" name="email"/></td>
		</tr>				
		<tr>
			<th><label for="DOW">Check off the days you are available for an appointment </label></th>
		</tr>
		<tr>
			<td><fieldset id="DOW">
				<input type="checkbox" name="days" value="Sunday">Sunday
				<input type="checkbox" name="days" value="Monday">Monday
				<input type="checkbox" name="days" value="Tuesday">Tuesday
				<input type="checkbox" name="days" value="Wednesday">Wednesday
				<input type="checkbox" name="days" value="Thursday">Thursday
				<input type="checkbox" name="days" value="Friday">Friday
				<input type="checkbox" name="days" value="Saturday">Saturday
			<td></fieldset>
		</tr>
		<tr>
			<th><label for="details">Additional Details:</label></th>
			<td><textarea id="details" name="details"></textarea></td>
		</tr>
	</table>
</form>
</section>
<section class="clear"></section> <!--used to clear floats and keep footer on bottom-->
<?php include "footer.php"; ?>