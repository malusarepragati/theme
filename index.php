

<!DOCTYPE html>
<html>
    <head>
        <title>Validation form</title>
        <script type="text/javascript">
         function validate()
         {
             if(document.form1.name.value == "")
             {
                  alert("Enter Your Name.");
                  document.form1.name.focus();
                  return false;
             }
             if(document.form1.id.value == "")
             {
                 alert("Enter Your Id");
                 document.form1.id.focus();
                 return false;
             }
             if(document.form1.mob.value == "")
             {
                 alert("Enter Valid Mobile");
                 document.form1.mob.focus();
                 return false;
             }
             if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.form1.email.value))
             {
                    alert("You have entered an invalid email address!")
                    return false;
             
             }
             if(document.form1.pass.value == "")
             {
                 alert("Enter Password");
                 document.form1.pass.focus();
                 return false;
             }               
         }
        </script>
    </head>
    <body bgcolor="sky blue">
        <form name="form1" action="validate.html" onsubmit="return validate();" method="POST">
             <table align="center" border="1">
            <tbody>
                <tr>
                    <td colspan="2"><h3 align="center">Student Registration Form</h3></td>
                </tr>
                <tr>
                    <td>Enter your Name:<span style="color: red">*</span></td>
                    <td><input type="text" name="name" value="" size="20" /></td>
                </tr>
                 <tr>
                    <td>Enter your Id:<span style="color: red">*</span></td>
                    <td><input type="text" name="id" value="" size="10" /></td>
                </tr>
                <tr>
                    <td>Enter your Mobile:<span style="color: red">*</span></td>
                    <td><input type="text" pattern="[987][0-9]{9}" name="mob" value=""/></td>
                </tr>
                <tr>
                    <td>Enter your Address:</td>
                    <td><textarea name="addr" rows="4" cols="20"></textarea></td>
                </tr>
               
                <tr>
                    <td>Enter your Gender:</td>
                    <td><select name="gen1">
                       <option>Male</option>
                       <option>Female</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Enter your Email:<span style="color: red">*</span></td>
                    <td><input type="text" name="email" value="" /></td>
                </tr>
                <tr>
                    <td>Enter your Course:</td>
                    <td><select name="course">
                            <option>Computer Engg.</option>
                            <option>IT Engg.</option>
                            <option>EnTc Engg.</option>
                            <option>Mechanical Engg.</option>
                            <option>Electrical Engg</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Enter Password<span style="color: red">*</span></td>
                    <td><input type="password" name="pass" value="" /></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Register" name="sub" />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" name="reset" /></td>
                </tr>
            </tbody>
        </table>

        </form>
      </body>
</html>
