
//         Data Fetch from product json using Axios get Method

let pdata1 = []
window.addEventListener("load", async () => {
    const url = "http://localhost:3000/productData";
    try {
        const d = await axios.get(url, {
            headers: { "Content-Type": "application/json" }

        }).then(res => {
            const dta = res.data
            dta.forEach((item) => {
                console.log(item)
                pdata1.push(item)
            })
            data(pdata1);
            // console.log(dta)
            console.log(pdata1);
        })
    }
    catch (error) {
        console.log(error + ":" + "failed")
    }
})


//                      List of ProductDetails from cartPage creating Dynamically



const data = (productData) => {
    for (let pData of productData) {
        // var newImg = new Image();
        var productListData = document.getElementById('productList');
        const newDiv = document.createElement('div');
        newDiv.classList.add("cardProduct", 'pData.model');
        var imageContainer = document.createElement('div');
        imageContainer.classList.add("imgContainer");
        var image = document.createElement('img');
        image.setAttribute('src', pData.image);
        imageContainer.appendChild(image);
        newDiv.appendChild(imageContainer);
        productListData.appendChild(newDiv);

        // Name of the product and Buttton create

        var nameDiv = document.createElement('div');
        nameDiv.classList.add('nameDiv');
        var productName = document.createElement('h4');
        productName.classList.add('h4')
        productName.innerText = pData.model;
        newDiv.appendChild(nameDiv)
        nameDiv.appendChild(productName);

        // arrays ellement in create Elements

        var buttonDiv = document.createElement('div');
        buttonDiv.classList.add('buttonDivs')
        
        // buttonDiv.innerHTML = `<button class="button btn btn-primary w-100" id="ViewBtn">View Product</button>`
        
        var vBtn = document.createElement('button');
        buttonDiv.appendChild(vBtn);
        vBtn.setAttribute('id',"ViewBtn")
        vBtn.setAttribute('class',"btn btn-primary")
        vBtn.textContent="View Product";
        
        newDiv.appendChild(buttonDiv);
    }
}
// ==========================serach product data==============================================//


var searchButton = document.getElementById('searchBtn');
const searchInput = document.getElementById('searchProductData').value;
const products = document.querySelectorAll('.cardProduct')
const productName = document.querySelectorAll('.h4')
const errorsSpan = document.getElementById('errorSpan');;
searchButton.addEventListener("click", () => {
    console.log(searchInput)
    console.log('clicked')
    // alert("sdasfd")
    // let promise = new Promise((resolve,reject)=>{
    //     if(searchInput.value==""){
    //         reject("dsfd")
    //        alert("fill");
    //     }
    //     else{
    //        resolve("no problem")
    //     }

    // })

    // promise.then(()=>{
    //     console.log("dsds")
    //     alert("asfsfsff")
    // }).catch(()=>{
    //     alert("problem")
    // })
   
    productName.forEach((item, index) => {
        (item.innerText.includes(searchInput.toUpperCase())) ? (products[index].classList.remove("hide"),
            products[index].classList.add('visible')) : products[index].classList.add("hide");


    })
})

function onError(input, message) {
    const searchInput = document.getElementById('searchProductData')
    var parent = input.parentElement;
    parent.classList.add('error')
}
function onSuccess(input, message) {
    const searchInput = document.getElementById('searchProductData')
    var input = searchInput;
    input.classList.remove('inputActive')
}

//          Creating the Dynamic menu bar code

const spanMenuIcon = document.getElementById('icon');
const listItem1 = document.querySelectorAll('nav li');
spanMenuIcon.addEventListener("click", async () => {
    try {
        const dd = await listItem1.forEach((list) => {
            list.classList.toggle('shownav')
        })

        if (spanMenuIcon.classList.contains('fa-bars')) {
            spanMenuIcon.classList.add('fa-times')
            spanMenuIcon.classList.remove('fa-bars')

        }
        else {
            spanMenuIcon.classList.remove('fa-times')
            spanMenuIcon.classList.add('fa-bars')
        }
    }
    catch (error) {
        console.log(error)
    }
})



   




