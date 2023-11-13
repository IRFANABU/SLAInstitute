
<<<<<<< HEAD


// data()
// function data() {

//     getData = "";
//     for (let pData of productData) {
//         // var newImg = new Image();
//         var productListData = document.getElementById('productList');
//         const newDiv = document.createElement('div');
//         newDiv.classList.add("cardProduct", 'pData.model');
//         var imageContainer = document.createElement('div');
//         imageContainer.classList.add("imgContainer");
//         var image = document.createElement('img');
//         image.setAttribute('src', pData.image);
//         imageContainer.appendChild(image);
//         newDiv.appendChild(imageContainer);
//         productListData.appendChild(newDiv);

//         // Name of the product and Buttton create

//         var nameDiv = document.createElement('div');
//         nameDiv.classList.add('nameDiv');
//         var productName = document.createElement('h4');
//         productName.classList.add('h4')
//         productName.innerText = pData.model;
//         newDiv.appendChild(nameDiv)
//         nameDiv.appendChild(productName);

//         // arrays ellement in create Elements

//         var buttonDiv = document.createElement('div');
//         buttonDiv.classList.add('buttonDivs')
//         buttonDiv.setAttribute('id', 'buttonss')
        
//         newDiv.appendChild(buttonDiv);


//         var vBtn = document.createElement('button');
//         buttonDiv.appendChild(vBtn);
//         vBtn.setAttribute('id',"ViewBtn")
//         vBtn.setAttribute('class',"btn btn-primary")
//         vBtn.textContent="View Product";
//         newDiv.appendChild(buttonDiv);
//         // error   
//         //Uncaught TyperError: failed to execute 'appenchild' on node :parameter 1 is not  of type 'node';
//         // var viewBtn = document.createElement('button');
//         // viewBtn.textContent = "View"
//         // viewBtn.setAttribute('id', 'viewProduct');
        

      
//     }
// }
=======
const getProduct = [];
window.addEventListener("load", async () => {
    try {
        const aswait = fetch("Product.json").then(res =>
            res.json()).then(datas => {
                console.log(datas);
                const datass = datas.productData
                datass.forEach((item) => {
                    getProduct.push(item)
                })
                data(getProduct);

            })
    }
    catch (err) {
        console.log(err + "failed to get data from product.json");
    }

})

function data(productData) {
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
        buttonDiv.setAttribute('id', 'buttonss')

        newDiv.appendChild(buttonDiv);


        var vBtn = document.createElement('button');
        buttonDiv.appendChild(vBtn);
        vBtn.setAttribute('id', "ViewBtn")
        vBtn.setAttribute('class', "btn btn-primary")
        vBtn.textContent = "View Product";
        newDiv.appendChild(buttonDiv);
// error   
        //Uncaught TyperError: failed to execute 'appenchild' on node :parameter 1 is not  of type 'node';
        // var viewBtn = document.createElement('button');
        // viewBtn.textContent = "View"
        // viewBtn.setAttribute('id', 'viewProduct');



    }
}
>>>>>>> main


//   ---------------------------------------------------------------------------------------- n


// ==========================serach product data==============================================//


<<<<<<< HEAD
// var searchButton = document.getElementById('searchBtn');

// searchButton.addEventListener("click", () => {
//     const searchInput = document.getElementById('searchProductData').value;
//     const products = document.querySelectorAll('.cardProduct')
//     const productName = document.querySelectorAll('.h4')
//     const errorsSpan = document.getElementById('errorSpan');;
//     console.log(searchInput)
//     console.log('clicked')
//     productName.forEach((item, index) => {
//         (item.innerText.includes(searchInput.toUpperCase())) ? (products[index].classList.remove("hide"),
//             products[index].classList.add('visible')) : products[index].classList.add("hide");
       
    
//     })
// })


// function onError(input, message) {
//     const searchInput = document.getElementById('searchProductData')
//     var parent = input.parentElement;
//     parent.classList.add('error')
// }
// function onSuccess(input, message) {
//     const searchInput = document.getElementById('searchProductData')
//     var input = searchInput;
//     input.classList.remove('inputActive')
// }
=======
var searchButton = document.getElementById('searchBtn');

searchButton.addEventListener("click", () => {
    const searchInput = document.getElementById('searchProductData').value;
    const products = document.querySelectorAll('.cardProduct')
    const productName = document.querySelectorAll('.h4')
    const errorsSpan = document.getElementById('errorSpan');;
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
>>>>>>> main

const spanMenuIcon = document.getElementById('icon');
const listItem1 = document.querySelectorAll('nav li');

spanMenuIcon.addEventListener("click", () => {
    listItem1.forEach((list) => {
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

})




