
   <HEAD>
   <SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
   </HEAD>
   
      <INPUT id="txtChar" onkeypress="return isNumberKey(event)" type="text" maxlength="10" name="txtChar">
   