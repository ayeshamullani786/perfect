//start-->character validation//

//var error = 0;
function validateName(x) {
  
    var name = document.getElementById(x).value;

    var nameEmpty = "";
    var re = /^[a-zA-Z\s]*$/;
    //alert(name);
    if (name != "")
    {


        if (re.test(name)) {
            // Style green
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
         
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            //error=0;
            //alert(error);
            return true;
        } else {

            document.getElementById(x + 'Error1').style.display = "none";
            // Style red
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";

            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";



            return false;
        }
    } else if (name == "")
    {
        document.getElementById(x + 'Error').style.display = "none";
        // Style red
        document.getElementById(x).style.borderColor = "red";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "red";

        return false;
    }
}
//End-->character validation//
//start-->character validation//
function validateNameOptional(x) {
    // Validation rule
    var name = document.getElementById(x).value;
    var nameEmpty = "";
    var re = /^[a-zA-Z\s]*$/;
    //alert(name);
    if (name != "")
    {


        if (re.test(name)) {
            // Style green
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            //document.getElementById(x).style.backgroundImage = "url(<?php echo base_url() . 'images/delete.png' ?>)no-repeat right top";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";

            return true;
        } else {

            document.getElementById(x + 'Error1').style.display = "none";
            // Style red
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";

            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";


            return false;
        }
    } else if (name == "")
    {

        document.getElementById(x + 'Error').style.display = "none";
        // Style red
        document.getElementById(x).style.borderColor = "Orange";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "orange";
        return true;
    }


}
//End-->character validation//

//start-->email validation//
function validateEmailMandatory(x) {


    var mail = document.getElementById(x).value;
    var re = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}\s*$/;

    if (mail != "")
    {
        if (re.test(document.getElementById(x).value))
        {
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            //document.getElementById(x).style.backgroundImage = "url(<?php echo base_url() . 'images/delete.png' ?>)no-repeat right top";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
        } else {
            document.getElementById(x + 'Error1').style.display = "none";
            // Style red
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";

            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";
            return false;
            return false;
        }
    } else if (mail == "")
    {

        document.getElementById(x + 'Error').style.display = "none";
        // Style red
        document.getElementById(x).style.borderColor = "red";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "red";
        return false;
    }

}
//End-->email validation//  

//start-->email validation//
function validateEmailOptional(x) {


    var mail = document.getElementById(x).value;
    var re = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}\s*$/;

    if (mail != "")
    {
        if (re.test(document.getElementById(x).value))
        {
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            //document.getElementById(x).style.backgroundImage = "url(<?php echo base_url() . 'images/delete.png' ?>)no-repeat right top";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
        } else {
            document.getElementById(x + 'Error1').style.display = "none";
            // Style red
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";

            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";
            return false;
            return false;
        }
    } else if (mail == "")
    {
		document.getElementById(x + 'Error').style.display = "none";
      // Style Orange
        document.getElementById(x).style.borderColor = "Orange";
        document.getElementById(x).style.borderWidth = "2px";
  
        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "orange";
        return true; 
    }

}
//start-->email validation//
function validateEmail(x){ 

//console.log(x);
	var mail=document.getElementById(x).value;
	//var re = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
	//var re = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/?\s*/;
	//var re = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$\s*/;
	var re = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}+\s*$/;
	
	var strarr=mail.split(",");
	console.log(strarr);
 //console.log(strarr.length);
  for(var i=0;i<strarr.length;i++)
 {

  console.log(strarr.length);
  //console.log(strarr[i])
   if(strarr[i]!="")
    {
        if(re.test(strarr[i]))
        {        	
        document.getElementById(x).style.borderColor = "Green";
        document.getElementById(x).style.borderWidth = "2px";
     
        document.getElementById(x + 'Error').style.display = "none";
        document.getElementById(x+ 'Error1').style.display = "none";
        return true;
        }else{
         document.getElementById(x + 'Error1').style.display = "none";
        // Style red
        document.getElementById(x).style.borderColor = "red";
        document.getElementById(x).style.borderWidth = "2px";
  
        // Show error prompt
        document.getElementById(x + 'Error').style.display = "block";
        document.getElementById(x + 'Error').style.color = "red";     
        return false;
      }
  }else if(strarr[i]=="")
    {

      document.getElementById(x + 'Error').style.display = "none";
      // Style red
        document.getElementById(x).style.borderColor = "Orange";
        document.getElementById(x).style.borderWidth = "2px";
  
        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "orange";
        return true; 
      }
    } 
}	
//End-->email validation//  
//start-->email validation//
function validateUserEmail(x) {


    var re = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$\s*/;
    if (re.test(document.getElementById(x).value)) {
        document.getElementById('userid').style.borderColor = "Green";
        document.getElementById('userid').style.borderWidth = "2px";
        document.getElementById('useridError').style.display = "none";
        return true;
    } else {
        document.getElementById('userid').style.borderColor = 'red';
        document.getElementById('userid').style.borderWidth = "2px";
        document.getElementById('useridError').style.display = "block";
        document.getElementById('useridError').style.color = "red";
        return false;
    }
}
//End-->email validation// 
//start-->address validation//
function validateAddress(x) {
    var addr = document.getElementById(x).value;
    var re = /^[A-Za-z0-9'\.\-\s\,\&\/]+$/;
    // Check input
    if (addr != "")
    {
        if (re.test(addr)) {
            // Style green
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
        } else {
            document.getElementById(x + 'Error1').style.display = "none";
            // Style red
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";
            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";
            return false;
        }
    } else if (addr == "")
    {
        document.getElementById(x + 'Error').style.display = "none";
        // Style red
        document.getElementById(x).style.borderColor = "red";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "red";
        return false;
    }


}
//End-->address validation//  
//start-->address validation//
function validateAddressOptional(x) {
    var addr = document.getElementById(x).value;
    var re = /^[A-Za-z0-9'\.\-\s\,\&\/\(\)]+$/;
    // Check input
    if (addr != "")
    {
        if (re.test(addr)) {
            // Style green
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
        } else {
            document.getElementById(x + 'Error1').style.display = "none";
            // Style red
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";
            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";
            return false;
        }
    } else if (addr == "")
    {
        document.getElementById(x + 'Error').style.display = "none";
        document.getElementById(x).style.borderColor = "Orange";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "orange";
        return true;
    }


}
//End-->address validation//  
//start-->Contact No validation//
function validateContactNo(x) {
    var contact = document.getElementById(x).value;
    var re = /^[0]{1}[0-9]{10}$/;
    // Check input

    if (contact != "")
    {

        if (re.test(contact)) {
            // Style green
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
        } else {
            // Style red


            document.getElementById(x + 'Error1').style.display = "none";
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";
            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";
            return false;
        }
    } else if (contact == "")
    {
        // Style red
        document.getElementById(x + 'Error').style.display = "none";
        document.getElementById(x).style.borderColor = "red";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "red";
        return false;
    }



}
//End-->Contact No validation// 
//start-->Contact No validation//
function validateContactNoOptional(x) {
    var contact = document.getElementById(x).value;
    var re = /^[0]{1}[0-9]{10}$/;
    // Check input

    if (contact != "")
    {

        if (re.test(contact)) {
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
        } else {
            // Style red
            document.getElementById(x + 'Error1').style.display = "none";
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";
            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";
            return false;
        }
    } else if (contact == "")
    {
         document.getElementById(x + 'Error').style.display = "none";
        document.getElementById(x).style.borderColor = "Orange";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "orange";
        return true;


    }
}
//End-->Contact No validation// 
//start-->Mobile No validation//
function validateMobileNo(x) {

    var mob = document.getElementById(x).value;

    var re = /^[789]\d{9}$/;
    // Check input
    if (mob != "")
    {
        if (re.test(mob)) {
            // Style green
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
        } else {
            document.getElementById(x + 'Error1').style.display = "none";
            // Style red
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";
            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";
            return false;
        }
    } else if (mob == "")
    {
        document.getElementById(x + 'Error').style.display = "none";
        // Style red
        document.getElementById(x).style.borderColor = "red";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "red";
        return false;
    }

}

function validateMobileNoOptional(x) {

    var mob = document.getElementById(x).value;

    var re = /^[789]\d{9}$/;
    // Check input
    if (mob != "")
    {
        if (re.test(mob)) {
            // Style green
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
        } else {
            document.getElementById(x + 'Error1').style.display = "none";
            // Style red
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";
            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";
            return false;
        }
    } else if (mob == "")
    {
       document.getElementById(x + 'Error').style.display = "none";
        document.getElementById(x).style.borderColor = "Orange";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "orange";
        return true;
    }

}


//start-->character validation//
function validateSelect(x) {
    if (document.getElementById(x).selectedIndex !== 0) {
        document.getElementById(x).style.borderColor = "Green";
        document.getElementById(x).style.borderWidth = "2px";
        // Hide error prompt
        document.getElementById(x + 'Error').style.display = "none";
        return true;

    } else {
        // Style red
        document.getElementById(x).style.borderColor = "red";
        document.getElementById(x).style.borderWidth = "2px";
        // Show error prompt
        document.getElementById(x + 'Error').style.display = "block";
        document.getElementById(x + 'Error').style.color = "red";
        return false;
    }
}
function validateSelectEmpty(x) {

    var selectEmpty = document.getElementById(x);

    var selectVal = selectEmpty.options[selectEmpty.selectedIndex].value;
    //alert(selectVal);
    var cmpr = "Select Option";
    var emptystr = "";
    //alert(zero);
    if (selectVal == cmpr || selectVal == emptystr || typeof (selectVal) === null || typeof (selectVal) === "undefined")
            //if(selectVal == cmpr || selectVal !== null || selectVal !== undefined || selectVal !== '' || selectVal ==0)
            {
                // Style red
                document.getElementById(x).style.borderColor = "red";
                document.getElementById(x).style.borderWidth = "2px";
                // Show error prompt
                document.getElementById(x + 'Error').style.display = "block";
                document.getElementById(x + 'Error').style.color = "red";
                return true;

            } else
    {
        document.getElementById(x).style.borderColor = "Green";
        document.getElementById(x).style.borderWidth = "2px";
        // Hide error prompt
        document.getElementById(x + 'Error').style.display = "none";
        return false;
    }

}

function validateSelectEmptyOptional(x) {

    var selectEmpty = document.getElementById(x);

    var selectVal = selectEmpty.options[selectEmpty.selectedIndex].value;
    //alert(selectVal);
    var cmpr = "Select Option";
    var emptystr = "";
    //alert(zero);
    if (selectVal == cmpr || selectVal == emptystr || typeof (selectVal) === null || typeof (selectVal) === "undefined")
            //if(selectVal == cmpr || selectVal !== null || selectVal !== undefined || selectVal !== '' || selectVal ==0)
            {
                // Style red
                document.getElementById(x).style.borderColor = "orange";
                document.getElementById(x).style.borderWidth = "2px";
                // Show error prompt
                document.getElementById(x + 'Error').style.display = "block";
                document.getElementById(x + 'Error').style.color = "orange";
                return true;

            } else
    {
        document.getElementById(x).style.borderColor = "Green";
        document.getElementById(x).style.borderWidth = "2px";
        // Hide error prompt
        document.getElementById(x + 'Error').style.display = "none";
        return false;
    }

}



//End-->character validation//
//start-->DOB validation//
function validateDOB(x) {

    /*var todayDate =new Date().getDate();          // Get the day as a number (1-31)
     var todayMonth =new Date().getMonth()+1;           // Get the weekday as a number (0-6)
     var todayYear = new Date().getFullYear(); 
     var todayFullDate = parseInt(todayYear + "0" + todayMonth + "" + todayDate);
     var todayFullDate1 = parseInt(todayYear + "" + todayMonth + "" + todayDate);
     alert(todayFullDate);
     alert(todayFullDate1);*/
    /* var dateArr = selectDate.split("-");
     var date = dateArr[2];
     var month = dateArr[1];
     var year = dateArr[0];
     var selectFullDate = parseInt(year + month + date);
     alert(selectFullDate)*/
    /*if(todayFullDate<selectFullDate)
     {alert("today is less than selected date ");}
     else
     {alert("today is gt than selected date ");}
     var todayDate = parseFloat(Date.UTC(todayFullDate.getFullYear(), todayFullDate.getMonth()+1, todayFullDate.getDate()));
     var newDate = parseFloat(Date.UTC(selectFullDate.getFullYear(), selectFullDate.getMonth()+1,selectFullDate.getDate()));
     alert("todaydate=" + todayDate + "newDate=" + newDate);
     alert(newDate);*/
    var selectDate = document.getElementById(x).value;
//    var re = new RegExp("([0-9]{4}[-](0[1-9]|1[0-2])[-]([0-2]{1}[0-9]{1}|3[0-1]{1})|([0-2]{1}[0-9]{1}|3[0-1]{1})[-](0[1-9]|1[0-2])[-][0-9]{4})");
    //alert(selectDate);
//    var todayFullDate = new Date();
//    var selectFullDate = new Date(selectDate);
    // alert(selectFullDate);

    //if(todayFullDate < selectFullDate || selectFullDate ==NaN || typeof(selectFullDate) ===null || typeof(selectFullDate) ==="undefined" || selectFullDate !==0)
    if (selectDate!="")
    {
  
            //alert("grn=selectdate < todaydate");
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
    } else
    {
        document.getElementById(x + 'Error').style.display = "none";
        // Style red
        document.getElementById(x).style.borderColor = "red";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "red";
        return false;
    }
}
//End-->DOB validation//
//gender
function validateRadio(x) {
    if (document.getElementById(x).checked) {
        document.getElementById('gender').style.borderColor = "Green";
        document.getElementById('gender').style.borderWidth = "2px";
        // Hide error prompt
        document.getElementById('genderError').style.display = "none";
        return true;
    } else {
        // Style red
        document.getElementById('gender').style.borderColor = "red";
        document.getElementById('gender').style.borderWidth = "2px";
        // Show error prompt
        document.getElementById('genderError').style.display = "block";
        document.getElementById('genderError').style.color = "red";
        return false;
    }
}
//gender
//start-->PAn No validation//
function validatePAN(x) {

    var pan = document.getElementById(x).value;
    var re = /^[A-Za-z]{5}\d{4}[A-Za-z]{1}$/;
    // Check input

    if (pan != "")
    {
        if (re.test(document.getElementById(x).value)) 
		{
            // Style green
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
        } else 
		{
            // Style red   
            document.getElementById(x + 'Error1').style.display = "none";
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";
            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";
            return false;  
        }
    }
	else if (pan == "")
    {  
        document.getElementById(x + 'Error').style.display = "none";
        document.getElementById(x).style.borderColor = "orange";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "orange";
        return true;


    }   
	return true;

}
//end of PAN No validation
//start-->Contact No validation// 
function validateProbation(x) {

    var prob = document.getElementById(x).value;
    var re = /^[0-9]{1}$/;
    // Check input
    if (prob != "")
    {
        if (re.test(document.getElementById(x).value)) {
            // Style green
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
        } else {
            document.getElementById(x + 'Error1').style.display = "none";
            // Style red
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";
            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";
            return false;
        }
    } else if (prob == "")
    {
        document.getElementById(x + 'Error').style.display = "none";
        document.getElementById(x).style.borderColor = "Orange";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "orange";
        return true;


    }
}
//End-->Contact No validation// 
//start-->Contact No validation//
function validateNumbers(x) {
    var num = document.getElementById(x).value;
    var re = /^[0-9]+$/;
    if (num != "")
    {
        // Check input
        if (re.test(document.getElementById(x).value)) {
            // Style green
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
        } else {
            // Style red
            document.getElementById(x + 'Error1').style.display = "none";
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";
            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";
            return false;
        }
    } else if (num == "")
    {
        document.getElementById(x + 'Error').style.display = "none";
        document.getElementById(x).style.borderColor = "Orange";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "orange";
        return true;


    }
}

function validateNumbersMandatory(x) {
    var num = document.getElementById(x).value;
    var re = /^[0-9]+$/;
    if (num != "")
    {
        // Check input
        if (re.test(document.getElementById(x).value)) {
            // Style green
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
        } else {
            // Style red
            document.getElementById(x + 'Error1').style.display = "none";
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";
            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";
            return false;
        }
    } else if (num == "")
    {
        document.getElementById(x + 'Error').style.display = "none";
        // Style red
        document.getElementById(x).style.borderColor = "red";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "red";
        return false;
    }
}
//End-->Contact No validation// 
//start-->PIN No validation//
function validatePIN(x) {
    var pin = document.getElementById(x).value;
    var re = /^[1-9][0-9]{5}$/;
    // Check input
    if (pin != "")
    {
        if (re.test(pin)) {
            // Style green
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
        } else {
            document.getElementById(x + 'Error1').style.display = "none";
            // Style red
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";
            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";
            return false;
        }
    } else if (pin == "") {
        document.getElementById(x + 'Error').style.display = "none";
        // Style red
        document.getElementById(x).style.borderColor = "red";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "red";
        return false;
    }

}
//End-->PIN No validation// 
function validatePassword(x) {

    var passEmpty = document.getElementById(x).value;
    //var selectVal = selectEmpty.options[selectEmpty.selectedIndex].value;
    //alert(passEmpty);
    // var cmpr="Select Options";
    var emptystr = "";
    //alert(zero);
    if (passEmpty == emptystr || typeof (passEmpty) === null || typeof (passEmpty) === "undefined")
            //if(selectVal == cmpr || selectVal !== null || selectVal !== undefined || selectVal !== '' || selectVal ==0)
            {
                // Style red
                document.getElementById(x).style.borderColor = "red";
                document.getElementById(x).style.borderWidth = "2px";
                // Show error prompt
                document.getElementById(x + 'Error').style.display = "block";
                document.getElementById(x + 'Error').style.color = "red";
                return true;

            } else
    {
        document.getElementById(x).style.borderColor = "Green";
        document.getElementById(x).style.borderWidth = "2px";
        // Hide error prompt
        document.getElementById(x + 'Error').style.display = "none";
        return false;
    }

}

//start-->address validation//
function validatePF(x) {
    var pfno = document.getElementById(x).value;
    var re = /^[A-Za-z0-9'\-\/\\]+$/;
    // Check input
    if (pfno != "")
    {
        if (re.test(pfno)) {
            // Style green
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
        } else {
            document.getElementById(x + 'Error1').style.display = "none";
            // Style red
            document.getElementById(x).style.borderColor = "red";
            document.getElementById(x).style.borderWidth = "2px";
            // Show error prompt
            document.getElementById(x + 'Error').style.display = "block";
            document.getElementById(x + 'Error').style.color = "red";
            return false;
        }
    } else if (pfno == "")
    {
        document.getElementById(x + 'Error').style.display = "none";
        document.getElementById(x).style.borderColor = "Orange";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "orange";
        return true;


    }
}
//End-->address validation//  
function Optionalfield(x) {
    var addr = document.getElementById(x).value;
    if (addr != "")
    {
  
            // Style green
            document.getElementById(x).style.borderColor = "Green";
            document.getElementById(x).style.borderWidth = "2px";
            // Hide error prompt
            document.getElementById(x + 'Error').style.display = "none";
            document.getElementById(x + 'Error1').style.display = "none";
            return true;
   
    } else if (addr == "")
    {
        document.getElementById(x + 'Error').style.display = "none";
        document.getElementById(x).style.borderColor = "Orange";
        document.getElementById(x).style.borderWidth = "2px";

        // Show error prompt
        document.getElementById(x + 'Error1').style.display = "block";
        document.getElementById(x + 'Error1').style.color = "orange";
        return true;
    }
}

function validateSelectEmptyMulti(x) {

    var selectEmpty = document.getElementById(x);

    var selectVal = document.getElementById(x).value;
    //alert(selectVal);
    var cmpr = "Select Option";
    var emptystr = "";
    //alert(selectVal);
    if (selectVal == cmpr || selectVal == emptystr || typeof (selectVal) === null || typeof (selectVal) === "undefined")
            //if(selectVal == cmpr || selectVal !== null || selectVal !== undefined || selectVal !== '' || selectVal ==0)
    {
        // Style red
        document.getElementById(x).style.borderColor = "red";
        document.getElementById(x).style.borderWidth = "2px";
        // Show error prompt
        document.getElementById(x + 'Error').style.display = "block";
        document.getElementById(x + 'Error').style.color = "red";
        return false;

    } else
    {
        document.getElementById(x).style.borderColor = "Green";
        document.getElementById(x).style.borderWidth = "2px";
        // Hide error prompt
        document.getElementById(x + 'Error').style.display = "none";
        return true;
    }

}


/* $(".onlyletters").keypress(function (event) {
    var inputValue = event.charCode;
    if (!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) {
        event.preventDefault();
    }
});


$(".onlynumbers").keypress(function (e) {
    //alert("numers");
//if the letter is not digit then display error and don't type anything
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
//display error message
// $("#errmsg").html("Digits Only").show().fadeOut("slow");
        return false;
    }
}); */
//End-->character validation//   
      