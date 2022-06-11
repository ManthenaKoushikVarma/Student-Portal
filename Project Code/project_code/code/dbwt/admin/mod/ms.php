<html>
<head>
<title>Modify</title>
<link rel="stylesheet" href="/dbwt/css.css">
</head>
<body>
<div class="intro"><h1>MODIFY STAFF</h1></div><br/>
<form method="post" action="msp.php">
  <label>ID number:</label>
  <input type="text" name="id" required /><br/>
  <label>First Name:</label>
  <input type="text" name="firstname" required /><br/>
  <label>Last Name:</label>
  <input type="text" name="lastname" required /><br/>
  <label for="dob">Birthday:</label>
  <input type="date" id="dob" name="dob" required><br/><br/>
  <label>Gender:</label>
     <input type="radio" id="male" name="gender" value="Male" required>
     <label for="male">Male</label>
     <input type="radio" id="female" name="gender" value="Female" required>
     <label for="female">Female</label><br/><br/>
<label>Subject:</label>
   <select name="subject">
    <option value="maths">Mathematics</option>
    <option value="physics">Physics</option>
    <option value="chemistry">Chemistry</option>
	 <option value="english">English</option>
	<option value="Sanskrit">Sanskrit</option>
  </select>
  <label>Email ID:</label>
  <input type="text" name="email" required /><br/>
  <label>Phone Number:</label>
  <input type="text" name="phoneno" required maxlength="10" /><br/>
   <input type="submit" value="Modify"/>
  </form>  
</body>
</html>