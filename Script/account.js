// const { default: axios } = require("axios");
var firstname = document.getElementById('f1');
var lastname = document.getElementById('l1');
var username = document.getElementById('u1');
var email = document.getElementById('e1');
var password = document.getElementById('p1');
var password2 = document.getElementById('p2');
var form = document.getElementById('formSubmit');
var button = document.getElementById('btn_form');

form.addEventListener("submit", function (event) {
    if (!validateInputs()) {
        event.preventDefault();
    }
    else {
<<<<<<< HEAD
    const formRdata = new FormData(form);
    const url= "http://localhost:3001/Form";
    axios.post(url, formRdata, {
        body: formRdata,
        headers: {
            "Content-Type": "application/json",
            "Accept-Type":"application/json"
        }
    }).then(result => {
 
        console.log(result)
        console.log([...formRdata])
        alert("register Suucessfully") ; 
         
    }).catch(err => { console.log(err) })
          
=======
        // postData();
        alert("register Suucessfully")       
>>>>>>> main
    }

})
// Validatin function for Register Form

function validateInputs() {
    let success = true;

    (firstname.value.trim() === '') ? (onError(firstname, "Firstname is required"), success = false) : onSuccess(firstname);
    (lastname.value.trim() === '') ? (onError(lastname, "Lastname is required"), success = false) : onSuccess(lastname);

    // (password.value.trim()==='')?(onError(firstname,"field is required"),success=false):onSuccess(firstname);

    if (email.value.trim() === '') {
        onError(email, "Email is required")
        success = false;
    }
    else {
        onSuccess(email)

    }
    if (password.value.trim() === '') {
        onError(password, "Password is required")
        success = false;
    }
    else {
        onSuccess(password)
    }

    if (password2.value.trim() == '') {
        onError(password2, "Password is required")

    }
    else {

        if (password2.value.trim() !== password.value.trim()) {
            onError(password2, "passsword is not match")
            success = false;
        }
        else {
            onSuccess(password2)
        }

    }
    
    return success;
    

}



function onSuccess(input) {
    let parent = input.parentElement;
    let msgEle = parent.querySelector('small');
    msgEle.style.display = 'none'
    msgEle.innerText = '';
    parent.classList.add('success')
    parent.classList.remove('error')


}
function onError(input, message) {
    let parent = input.parentElement;
    let msgEle = parent.querySelector('small');
    msgEle.style.display = 'block'
    msgEle.innerText = message;
    parent.classList.add('error')
    parent.classList.remove('success')
}

// post the Form data in to the Json Server

// const postData = () => {

//     const formRdata = new FormData(form);
//     const url="http://localhost:3000/Form";
//     axios.post(url, formRdata, {
//         method: "POST",
//         body: formRdata,
//         headers: {
//             "Content-Type": "application/json"
//         }
//     }).then(result => {
 
//         console.log(result)
//         console.log([...formRdata])

//     }).catch(err => { console.log(err) })


// };






