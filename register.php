<?php include ("header.html")
?>
<body>
<div class="register">
<form action="connect.php" method="post">
<br>
<label for="username">USERNAME</label>
<input type="text" size="30" name="n" placeholders="enter your name">
<br><br>
<label for="age">AGE</label>
<input type="number" size="3" name="a">
<br><br>
<label for="dob">DOB</label>
<input type="date" name="d">
<br><br>
<label for="gender">GENDER</label>
<input type="radio" value="male" name="g">Male
<input type="radio" value="female" name="g">Female
<br><br>
<label for="email">EMAIL</label>
<input type="email" size="40" name="e" >
<br><br>
<label for="password">PASSWORD</label>
<input type="password" maxlength="6" min="4" name="p">
<br><br>
<label for="dept">DEPARTMENT</label>
<select name="s">
<option value="AIML">AIML</option>
<option value="AIDS">AIDS</option>
<option value="CSE">CSE</option>
<option value="ECE">ECE</option>
<option value="EEE">EEE</option>
<option value="MECH">MECH</option>
</select><br><br>
<input type="submit" value="REGISTER">
<input type="reset" value="CANCEL">
</form>
</div>
</body>
<?php include ("footer.html")
?>
