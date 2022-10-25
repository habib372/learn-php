<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
  
  <fieldset style="width:200px;margin:0px auto">
  <legend style="text-align:center">Student Registration</legend>
  <form action="#" method="post">  
     
     <div>
       <label>Name:</label><br/>
       <input type="text" name="txtName" />
     </div>
     
     <div>
       <label>Email</label><br/>
       <input type="text" name="txtEmail" />
     </div>
     
     <div>
       <label>Gender</label><br/>
       Male <input type="radio" name="rdoGender" value="Male">
       Female <input type="radio" name="rdoGender" value="Female">
     </div>
     
     <div>
       <label>Campus</label><br/>
       <select name="cmbCampus">
         <option>Dhaka</option>
         <option>Borishal</option>
         <option>Khulna</option>
       </select>
     </div>
     
     <div>
       <label>Subjects</label><br>
       <input type="checkbox" name="chkSubjects[]" value="English" />English <br>
       <input type="checkbox" name="chkS
       ubjects[]" value="Math" />Math <br>
       <input type="checkbox" name="chkSubjects[]" value="Accounting" />Accounting <br>
       <input type="checkbox" name="chkSubjects[]" value="Management" />Management  
     </div>
     
     <div>
       <label>Password</label><br>
       <input type="password" name="pwdPassword" />
     
     </div>
     
     <div>
       <label>Address</label><br>
       <textarea name="txtAddress"></textarea>
     </div>
     
     
     <div>
       <input type="submit" name="btnSubmit" value="Submit"/>
     </div>
     
  
  </form>
  </fieldset>

</body>
</html>
