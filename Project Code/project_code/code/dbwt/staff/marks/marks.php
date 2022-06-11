<html>
<head>

<title>Marks</title>
<link rel="stylesheet" href="/dbwt/css.css">
</head>
<body>
<div class="intro"><h1>Marks</h1></div><br/>

<form method="post" action="marksp.php">
  <label>Year:</label><br/>
      <input type="radio"  name="year" value="1" required>
     <label for="1">YEAR-1</label>
     <input type="radio"  name="year" value="2" required>
     <label for="2">YEAR-2</label><br/><br/>
	
   <label>Section:</label>
   <select name="section">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
	<option value="D">D</option>
	<option value="E">E</option>
    </select>
	
	<label>Exam:</label><br/>
      <input type="radio" name="exam" value="1" required>
     <label for="1">Pre-Final:1</label>
     <input type="radio" name="exam" value="2" required>
     <label for="2">Pre-Final:2</label>
      <input type="radio"  name="exam" value="3" required>
     <label for="3">Pre-Final:3</label>
     <input type="radio"  name="exam" value="4" required>
     <label for="4">Pre-Final:4</label><br/><br/>
    <input type="submit" value="Display"/>
  </form>
</body>
</html>