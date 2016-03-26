
// for school registration password match check

function school_registration_validitaion(){

var em_pass = document.school_reg_form.password.value;
         var em_passcon = document.school_reg_form.rep_password.value;
            if (em_passcon != em_pass) {
				document.getElementById('school_passmtch_error').style.display="block";
               // alert(" Re-Password Not Match");
               // em_passcon.focus;
                return false;
            }
	else{
	document.getElementById('school_passmtch_error').style.display="none";
	}
	
	// for school registration checkbox term and condition not selected
	
		if(document.getElementById('schoolcheckterm').checked==false){
		document.getElementById("schoolcheckboxerror").style.display="block";
			return false;
		}
			else{
			document.getElementById("schoolcheckboxerror").style.display="none";
				
			}		
}

// for Employer registration password match check

function employee_validitation(){

var com_pass= document.employee_registration.company_password.value;
         var com_repass= document.employee_registration.company_rep_password.value;
            if (com_repass != com_pass) {
				document.getElementById('emp_passmtch_error').style.display="block";
               // alert(" Re-Password Not Match");
                //com_repass.focus;
                return false;
            } 
	else{
	document.getElementById('emp_passmtch_error').style.display="none";
	}
	
	// employer registration term and condition not checked
	
	if(document.getElementById('company_term').checked==false){
		document.getElementById("empcheckboxerror").style.display="block";
			return false;
		}
			else{
			document.getElementById("empcheckboxerror").style.display="none";
				
			}
	
	
}


// function for student registration password match check

function registration_valid(){

               // for password match
         var dpsmpp = document.registration_form.password.value;
           
         var dpsmss = document.registration_form.re_password.value;
            if (dpsmss != dpsmpp) {
				document.getElementById('std_passmtch_error').style.display="block";
                //alert(" Re-Password Not Match");
               // dpsmss.focus;
                return false;
            }
	
	else{
	document.getElementById('std_passmtch_error').style.display="none";
		
	}
	
	// for checkobx term and condition of student
		
		if(document.getElementById('trm_cond').checked==false){
		document.getElementById("checkboxerror").style.display="block";
			return false;
		}
			else{
			document.getElementById("checkboxerror").style.display="none";
				return true;
				
			}
   
        
    }


// function for special chacter restriction	 only alpha and numeric allow
	function isNumeric(keyCode,boxid) {
	             
		        
            if(((keyCode >= 65 && keyCode <= 90)||(keyCode >= 96 && keyCode <= 105)||(keyCode >= 8 && keyCode <= 10))){
				document.getElementById(Box).innerHTML="";
			return true;
			}
		
		else{
			document.getElementById(Box).innerHTML="Allow Only Alphabatic And Numeric ";
		return false;
		}
		  }
		   var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        specialKeys.push(9); //Tab
        specialKeys.push(46); //Delete
        specialKeys.push(36); //Home
        specialKeys.push(35); //End
        specialKeys.push(37); //Left
        specialKeys.push(39); //Right
        function IsAlphaNumeric(e,boxid) {



			var Box=boxid+'s';
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ((keyCode >= 48 && keyCode <= 57) || (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
			if(ret){
            document.getElementById(Box).style.display = ret ? "none" : "inline";
            return ret;
			}
			else{
			document.getElementById(Box).style.display = ret ? "block" : "inline";
            return ret;
			}
        }


		


// for numbers only  in Phone number box
	function isNumberKey(evt) {
			var charCode = (evt.which) ? evt.which : event.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))
				return false;
			return true;
		}

// function for student term and condition
  
function student_terms(){

if(document.getElementById('trm_cond').checked==false){
		document.getElementById("checkboxerror").style.display="block";
			return false;
		}
			else{
			document.getElementById("checkboxerror").style.display="none";
				return true;
				
			}

}
//   function for password lenth

function pass_lenth(passlenth,boxid){
	
	
if (passlenth.length < 8) {
	 document.getElementById(boxid).innerHTML="password lenth between 8 and 20 character";
   return false; // keep form from submitting
 }
	
		
if (passlenth.length > 20 ) {
	 document.getElementById(boxid).innerHTML="password lenth between 8 and 20 character";
   return false; // keep form from submitting
 }
	else{
	document.getElementById(boxid).innerHTML="";
	}
}


// functiom for school checkbox error
              
function school_chck(){

if(document.getElementById('schoolcheckterm').checked==false){
		document.getElementById("schoolcheckboxerror").style.display="block";
			return false;
		}
			else{
			document.getElementById("schoolcheckboxerror").style.display="none";
				
			}



}

// function for employer checkbox Error

function employer_chck(){

if(document.getElementById('company_term').checked==false){
		document.getElementById("empcheckboxerror").style.display="block";
			return false;
		}
			else{
			document.getElementById("empcheckboxerror").style.display="none";
				
			}
}

// for div hide show student detail update
	function showdiv(divid){
		var getdivid=divid;
		if(getdivid=='basic'){
		document.getElementById("basicdetails").style.display="block";
		document.getElementById("profilepic").style.display="none";
		document.getElementById("changepass").style.display="none";
		}
		
				if(getdivid=='pic'){
		document.getElementById("basicdetails").style.display="none";
		document.getElementById("profilepic").style.display="block";
		document.getElementById("changepass").style.display="none";
		}
		
				if(getdivid=='passchange'){
		document.getElementById("basicdetails").style.display="none";
		document.getElementById("profilepic").style.display="none";
		document.getElementById("changepass").style.display="block";
		}
	
	}

	
