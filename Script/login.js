// const { default: axios } = require("axios");

const signuplink = document.getElementById("signup");
const formLogin = document.getElementById('formLogin')
const email = document.getElementById('Email');
const password1 = document.getElementById('Password');
const button = document.getElementById('loginButton')
const smallerror = document.querySelector('small');

String.prototype.isEmail = function () {
    return !!this.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/);
}

formLogin.addEventListener("submit", (event) => {
    event.preventDefault();
    (!validateInput([email, password1]))
    getDataEmail(email)



})

function getDataEmail(givenEmailVal) {
    // const formData = new FormData(formLogin)
    // console.log([...formData])
    fetchData();
    async function fetchData() {

        try {
            const URL1 = "http://localhost:3000/Form";
            const getEmailVal = await axios({
                method: "GET",
                url: URL1,
                headers: { 'Content-Type': 'application/json' },

            })

            console.log(givenEmailVal.value)
            console.log(typeof getEmailVal.data)
            // console.log(Object.keys(getEmailVal))    Object.values(getEmailVal)

            getEmailVal.forEach((item) => {
                console.log(item)
            })

        }
        catch (error) {
            console.log("", error);
        }

    }

}


function validateInput(inputs) {

    inputs.forEach((inputsData) => {
        if ((inputsData.value.trim()) === "") {
            onError(inputsData, `${getInput(inputsData)} is required`);

        }
        else {
            onSuccess(inputsData)

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

const crossEmail = (getData) => {
    if (getData.data.email !== email.value) {
        console.log("error")
    }
}


// $(document).ready(function () {
//     $(".fa-eye").click(function () {
//         $(this).toggleClass
//         var input = $('#Password');
//         if (input.attr("type") === "password")
//             })
// })

