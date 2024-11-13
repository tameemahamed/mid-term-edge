function test(name){
    let n=name.length;
    for(let i=0;i<n;i++){
        console.log(name[i]);
        if(name[i]===' ') continue;
        if(name[i]>'z' || name[i]<'A') return true;
        else if(name[i]>'Z'&&name[i]<'a') return true;
    }
    return false;
}

function check(email){
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function validateForm(){
    //collect info
    return true;
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const roll = document.getElementById("roll").value;
    const mobile = document.getElementById("mobile").value;

    const nameError = document.getElementById("nameError");
    const rollError = document.getElementById("rollError");
    const mobileError = document.getElementById("mobileError");
    const emailError = document.getElementById("emailError");

    nameError.textContent = "";
    rollError.textContent = "";
    mobileError.textContent = "";
    emailError.textContent = "";

    let isValid = true;
    if(name === ""){
        nameError.textContent = "*Please enter your name.";
        isValid = false;
    }
    else if(test(name)){
        nameError.textContent = "*Name should only contain letter and spaces."
        isValid = false;
    }
    if(roll === ""){
        rollError.textContent = "*Roll number is required";
        isValid = false;
    }
    if(mobile === ""){
        mobileError.textContent = "*Mobile number is required";
        isValid = false;
    }
    else if(mobile.length != 10){
        mobileError.textContent = "*Mobile number should contain 10 digits";
        isValid = false;
    }
    if(email===""||!check(email)){
        emailError.textContent = "*Enter a valid email";
        console.log("here");
        isValid = false;
    }

    console.log(isValid);
    return isValid;
    
}
