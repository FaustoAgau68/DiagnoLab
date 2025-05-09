
//  script to show successful registration  
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.get("registered") === "success") {
    const msg = document.getElementById("output-text");
    if (msg) {
        msg.textContent = "Registration successful! Please log in.";
        msg.style.color = "blue";
        msg.style.fontFamily = "'Poppins', sans-serif";

        // Auto hide after 5 second
        setTimeout(() => {
            msg.style.display = "none";
        }, 10000);

    }
}

// Login Success
const urlParamsSuccess = new URLSearchParams(window.location.search);
if (urlParamsSuccess.get("login") === "success") {
    const success_msg = document.getElementById("output-text");
    if (success_msg){
        success_msg.textContent = "Login Successful !.";
        success_msg.style.color = "Blue";
        success_msg.style.fontFamily = "'Poppins', sans-serif";

        // Auto hide after 5 second
        setTimeout(() => {
            msg.style.display = "none";
        }, 10000);

    }
}


const params = new URLSearchParams(window.location.search);
const errorMsg = document.getElementById("output-text");
if (params.get("error") === "invalid" && errorMsg) {
    errorMsg.style.display = "block";
    errorMsg.style.color = "Red";
    errorMsg.textContent = "Email or Password is incorrect!";
}
