
        function verifica() {
           if (document.forms[0].email.value.length == 0){
               alert("Por favor, digite seu e-mail");
               document.frmEnvia.email.focus();
              return false;
           }
             return true;
         }

        function checarEmail() {
           if (document.forms[0].email.value == ""
           || document.forms[0].email.value.indexOf('@') == -1
           || document.forms[0].email.value.indexOf('.') == -1){
               alert("Por favor, informe um e-mail valido");
               return false
           }
          
        } 
    