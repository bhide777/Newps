<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  font-size: large;
  padding-left: 35px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
 input[type=text].csk{
    width: 100%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
</head>
<body>
    <p style="font-size: 35px;text-align:center;font-weight:bold">Proctor-dairy</p>

<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="fname">Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Father's Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="fname" placeholder="Your father's name..">
    </div>
 </div>
 <div class="row">
    <div class="col-25">
      <label for="lname">Mothers Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="fname" placeholder="Your mothes's name..">
    </div>
 </div>
 <div class="row">
    <div class="col-25">
      <label for="lname">Address</label>
    </div>
    <div class="col-75">
      <textarea rows="10" cols="10" placeholder="Enter your address"></textarea>
    </div>
 </div>
 <div class="row">
    <div class="col-25">
      <label for="lname">Hobbies</label>
    </div>
    <div class="col-75">
      <textarea rows="10" cols="10" placeholder="Enter your hobbies"></textarea>
    </div>
 </div>
  <div class="row">
    <div class="col-25">
      <label for="country">Gender</label>
    </div>
    <div class="col-75">
      <select id="country" name="country">
        <option value="male">Male</option>
        <option value="female">Female</option>
    
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Semister</label>
    </div>
    <div class="col-75">
    <input type="text" id="sem" name="sem" placeholder="Enter semister..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Age</label>
    </div>
    <div class="col-75">
    <input type="text" id="age" name="age" placeholder="Enter age..">
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>
<p style="font-size: 25px;text-align:center;font-weight:bold">Marks-card</p>
<div class="container" style="margin-top: 10px;">
  <form action="/action_page.php">
  <table id="customers">
  <tr>
    <th>SL.NO</th>
    <th>Subjects</th>
    <th>CIE-1</th>
    <th>CIE-2</th>
    <th>SEE</th>
</tr>
<tr>
    <td>01</td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
  </tr>
  <tr>
    <td>02</td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
  </tr>
  <tr>
    <td>03</td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
  </tr>
  <tr>
    <td>04</td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
  </tr>
  <tr>
    <td>05</td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
  </tr>
  <tr>
    <td>06</td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
  </tr>
  <tr>
    <td></td>
    <td style="text-align: center;">Total</td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
    <td><input type="text" class="csk"></td>
  </tr>
  </table>
  <div class="row">
    <input type="submit" value="Update">
  </div>
  </form>
</div>

</body>
</html>
