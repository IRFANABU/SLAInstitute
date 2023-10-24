// const { default: axios } = require("axios");

// const { default: axios } = require("axios");

const signuplink = document.getElementById("signup");
const formLogin = document.getElementById('formLogin')
const email = document.getElementById('Email');
const password1 = document.getElementById('Password');
const button = document.getElementById('loginButton')
const smallerror = document.querySelector('small');
formLogin.addEventListener("submit", (event) => {
    if (!validateInput([email, password1])) {
        event.preventDefault();
        // checkEmail(email,datas);
        getDataEmail(email)

    }
    else {

    }
})

function getDataEmail(email) {
    const formData = new FormData(formLogin)
    console.log([...formData])
    async function fetchData() {

        try {
            const URL1 = "/";
            const getData = await axios({
                method: "GET",
                url: URL1,
                headers: {
                    'Content-Type': 'application/json'
                },

            });
            console.log(getData)
        }
        catch (error) {
            console.log("", error);
        }

    }
    fetchData();
}


function validateInput(inputs) {

    inputs.forEach((inputsData) => {
        if ((inputsData.value.trim()) === "") {
            onError(inputsData, `${getInput(inputsData)} is required`);
            // console.log(inputsData.value)
        }
        else {
            onSuccess(inputsData)
            window.location.href = "index.html"
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

