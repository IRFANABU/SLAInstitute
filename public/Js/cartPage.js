
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
            data(pdata1)
            console.log(dta)
            console.log(pdata1);

        })
    }
    catch (error) {
        console.log(error + ":" + "failed")
    }
})


//                      List of ProductDetails from cartPage



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
        buttonDiv.innerHTML = `<button class="button btn btn-primary w-100 " id="ViewBtn">View</button>`
        var vBtn = document.getElementById('ViewBtn');
        // buttonDiv.setAttribute('id', 'buttonss')

        newDiv.appendChild(buttonDiv);
    }
}


//   ---------------------------------------------------------------------------------------- n


// ==========================serach product data==============================================//


var searchButton = document.getElementById('searchBtn');

searchButton.addEventListener("click", () => {
    const searchInput = document.getElementById('searchProductData').value;
    const products = document.querySelectorAll('.cardProduct')
    const productName = document.querySelectorAll('.h4')
    const errorsSpan = document.getElementById('errorSpan');;
    console.log(searchInput)
    console.log('clicked')
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

Dates()
function Dates() {
    var gDates = new Date;
    let cData = gDates.setDate(10)
    var cMon = gDates.getMonth();
    var hour = gDates.getHours();
    console.log(hour + 16)
    // console.log(cYear)
    console.log("date" + ":" + (cData) + " month" + ":" + cMon)
}



