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
<<<<<<< HEAD



function getInput(inputd) {
    return inputd.id;

}

function onError(input, messege) {
    const parents = input.parentElement;
    parents.className = "form-group error"
    const msgEle = parents.querySelector('small');
    msgEle.innerHTML = messege;

}

function onSuccess(input) {

    const formgroup = input.parentElement;
    formgroup.className = 'form-group success'
    const msgEle = formgroup.querySelector('small');
    msgEle.innerHTML = "";
}

function checkEmail(input){
    if(!input.value.trim().isEmail()){
        onError(input,"please Check it")
    }
    else{
        onSuccess(input)
=======
const validateEmail = (getEmail) => {
    if (!getEmail.value.trim().isEmail()) {
        onError(getEmail, "Invalid Emaild Address");
        return false;
    }
    else {
        onSuccess(getEmail);
        return true;
>>>>>>> main
    }
}


function validateInput(inputs) {

    inputs.forEach((inputsData) => {
        if ((inputsData.value.trim()) === "") {
            onError(inputsData, `${getInput(inputsData)} is required`);

        }
        else {
<<<<<<< HEAD
            onSuccess(inputsData)
=======
            onSuccess(inputsData);
>>>>>>> main

        }

    })
}

<<<<<<< HEAD

formLogin.addEventListener("submit", (event) => {
    event.preventDefault();
    validateInput([email, password1]);
    checkEmail(email);
    // fetchData(email);

})



const GetAll = [];  

    // async function fetchData() {
    //     const formData = new FormData(formLogin) 
    //     try {
    //         const URL1 = "http://localhost:3001/Form";
    //         const getVal = await axios({
    //             method: "GET",
    //             url: URL1,
                
    //         })
    //         // console.log(Object.keys(getEmailVal))    Object.values(getEmailVal)
    //         //    console.log(getVal.data);
    //         //   console.log(Object.values(getVal))

    //         console.log(getVal.data)
            
    //         getVal.data.map(user => {
    //             if (user.email === formData.email && user.password === formData.password1) {
    //                 alert("help");
    //                 return false;
    //             }
    //             else {
    //                 onError(email,"please check")
    //                 onError(password1)
    //             }
    //         })


    //     }
    //     catch (error) {
    //         console.log("", error);
    //     }

    // }




=======
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



formLogin.addEventListener("submit", (event) => {
    event.preventDefault();
    (!validateInput([email, password1]));
    (!validateEmail(email));
})

>>>>>>> main
// $(document).ready(function () {
//     $(".fa-eye").click(function () {
//         $(this).toggleClass
//         var input = $('#Password');
//         if (input.attr("type") === "password")
//             })
// })

<<<<<<< HEAD
=======

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
>>>>>>> main
