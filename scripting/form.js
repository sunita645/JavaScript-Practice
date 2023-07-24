function validate(){
var name =  document.forms.RegForm.Name.value;
 // Javascript reGex for Name validation
 var regName = /^[A-Z]/;  

var password = document.forms.RedForm.Password;

    if (name == "" || regName.test(name)) {
        window.alert("Please enter your name properly.");
        name.focus();
        return false;
    }


    if(password.length <6){
        alert("Password should be atleast 6 character long");
        password.focus();
        return false;
    }
    
}