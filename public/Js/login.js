const signuplink = document.getElementById("signup");
const formLogin = document.getElementById('formLogin')
const email = document.getElementById('Email');
const password = document.getElementById('Password');
const button = document.getElementById('loginButton')
const smallerror = document.querySelector('small');
formLogin.addEventListener("submit", (event) => {
    if (!validateInput([email, password])) {
        event.preventDefault();
    }
    else{
        
    }
})



function validateInput(inputs) {

    inputs.forEach((inputsData) => {
        if ((inputsData.value.trim()) === "") {
            onError(inputsData, `${getInput(inputsData)} is required`);
            // console.log(inputsData.value)
        }
        else{
            onSuccess(inputs)
        }
       
    })
}

function getInput(inputd) {
    return inputd.id;

}

function onError(input, messege) {
    const parents = input.parentElement;
    parents.className = "form-group error"
    let msgEle = parents.querySelector('small');
    msgEle.innerText = messege;

}

function onSuccess(input) {

    let formgroup = input.parentElement;
    formgroup.className = 'form-group success'
    let msgEle = formgroup.querySelector('small');
    msgEle.innerText = "";
}
String.prototype.isEmail = function () {
    return !!this.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/);
}

