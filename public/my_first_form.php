<!DOCTYPE html>
<html>
<head>
	<title>My First Form</title>
</head>

	<body>
	<form method="POST" action="/process-form.php">
	    <p>
	        <label for="username">Username</label>
	        <input id="username" name="username" type="text" placeholder="Enter your username" required>
	    </p>
	    <p>
	        <label for="password">Password</label>
	        <input id="password" name="password" type="password">
	    </p>
	    <p>
	        <input type="submit" value="login">
	        <button type="submit">Login</button>
	    </p>
	</form>

	<form method="POST" action="/process-form.php">
		<p>
			<label for="User_Login">User Login</label>
		</p>
		<p>
			<label for="username">Username</label>
		    <input id="username" name="username" type="text" placeholder="Enter your username" required>
		</p>
		 <p>	
		     <label for="password">Password</label>
		     <input id="password" name="password" type="password">
		</p>
		<p><button type="Login">Login</button></p>
	</form>
		<p>

	<form method="Post" action="/process-form.php">     
		</p>
			<label for="Compose_Email">Compose Email</label>
			<form method="POST" action="/process-form.php">
		<p>
			<label for="email">To</label>
			<input type="email" id="to_email" name="to_email" value="" placeholder="Email">
		</p>	

		<p>
			<label for="email">From</label>
			<input type="email" id="from_email" name="from_email" value="" placeholder="Your Email">
		</p>	
		<p>
			<label for="subject">Subject</label>
			<input type="text" id="text" name="Subject" value="" placeholder="Subject">
		</p>	
		<p>
			<textarea id="email_body" name="email_body" rows="5" cols="40">Content Here</textarea>
		</p>
		<p>
			<label><input type="checkbox" id="os1" name="os1" value="Save_a_copy_to_sent_form"> Save a copy to sent form</label>
		</p>

			<button type="submit">Send</button>

	</form>

	<form method="Post" action="/process-form.php">
		<h1>Multiple Choice Test</h1>
		<p>What are your favorite movies?</p>
		<p>
			<label><input type="checkbox" id="movie1" name="movie[]" value="The Dark Knight"> The Dark Knight</label>
			<label><input type="checkbox" id="movie2" name="movie[]" value="Gladiator"> Gladiator</label>
			<label><input type="checkbox" id="movie3" name="movie[]" value="?">
				?</label>
		</p>
		<p>
			<label for="airline">Which airline do you prefer?</label>
			<select id="airline" name="airline[]" multiple>
				<option value="Southwest">Southwest</option>
				<option value="American">American</option>
				<option value="Delta">Delta</option>
			</select>
		</p>
	</form>

	<h1>Select Testing</h1>
	<form method="Post" action="/process-form.php">
		<p>
			<label for="flying">Do you like to fly?</label>
			<select id="flying" name="flying">
				<option value="1">Yes</option>
				<option value="0"selected>No</option>
			</select>
		</p>
		<button type="submit">Submit</button>
		
	</form>


	</body>
</html>




	