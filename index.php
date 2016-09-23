	<html>   
   <head>
      <title>Form Validation</title>      
      <script type="text/javascript">
         
function validate()
      {      
       
         
         if( document.myForm.EMail.value == "" )
         {
            document.write( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
         
         if( document.myForm.Zip.value == "" ||
         isNaN( document.myForm.Zip.value ) ||
         document.myForm.phone.value.length != 10)
         {
            document.write( "Enter 10 digit mobile number." );
            document.myForm.Zip.focus() ;
            return false;
         }
         
         if( document.myForm.Gender.value == "-1" )
         {
            document.write( "Please provide your gender" );
            return false;
         }
         return( true );
      }
      </script>
      
	</head>
		<html>   
   <head>
      <title>Form Validation</title>      
      <script type="text/javascript">
   	
   <body>
		<h1 align="center">SIGN_UP FORM<h1>
      <form action="index.php" name="myForm" onsubmit="return(validate()) ;">
         <table cellspacing="5" cellpadding="5" border="0" margin-left=30px>
            
            <tr>
               <td align="center">Name</td>
               <td><input type="text" name="Name" /></td>
            </tr>
            
            <tr>
               <td align="center">E-Mail</td>
               <td><input type="text" name="EMail" /></td>
            </tr>
            
            <tr>
               <td align="center">Phone Nuber </td>
               <td><input type="text" name="phone" /></td>
            </tr>
            
            <tr>
               <td align="center">Gender</td>
               <td>
                  <select name="Gender">
                     <option value="-1" selected>[choose yours]</option>
                     <option value="1">Male</option>
                     <option value="2">Female</option>
                  </select>
               </td>
            </tr>
            
            <tr>
               <td align="right"></td>
               <td><input type="submit" value="Submit" /></td>
            </tr>
            
         </table>
      </form>
      
   </body>
</html>
