const productData = [

    {
        'image': 'image/iphone images/apple-iphone-11-1.jpg',
        "model": "Iphone 11 Pro",
        "color": "Black",
        "storage": "128GB",
        "ram": "12GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    }, {
        image: 'image/iphone images/apple-iphone-11-1.jpg',
        "model": "Iphone 12 Pro",
        "color": "Black",
        "storage": "128GB",
        "ram": "12GB",
        "camera": "16MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.00"

    }, {
        image: 'image/watches/huawei-watch-gt4.jpg',
        "model": "Huawei watch GT4",
        "color": "Black",
        "storage": "128GB",
        "ram": "8GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    }, {
        image: 'image/iphone images/apple-iphone-11-1.jpg',
        "model": "Iphone 13 Pro",
        "color": "Black",
        "storage": "128GB",
        "ram": "8GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    }, {
        image: 'image/iphone images/apple-iphone-11-1.jpg',
        "model": "Samsung Galaxy watch 5 ",
        "color": "Black",
        "storage": "256GB",
        "ram": "4GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": '64,000.0'

    },

    {
        'image': 'image/iphone images/apple-iphone-11-1.jpg',
        "model": "Iphone 14 Pro",
        "color": "Black",
        "storage": "128GB",
        "ram": "12GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    },
    {
        image: 'image/watches/google-pixel-watch.jpg',
        "model": "Google Pixel watch",
        "color": "Black",
        "storage": "128GB",
        "ram": "8GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    }, {
        image: 'image/watches/google-pixel-watch.jpg',
        "model": "Samsung galaxy s23 Ultra 5G",
        "color": "Black",
        "storage": "128GB",
        "ram": "8GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    }, {
        image: 'image/samsung images/samsung-galaxy-z-fold5-5g.jpg',
        "model": "Samsung Galaxy z fold5 5G",
        "color": "Black",
        "storage": "128GB",
        "ram": "8GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    }, {
        image: 'image/oneplus/oneplus-8-pro.jpg',
        "model": "Apple watch ultra 2",
        "color": "Black",
        "storage": "128GB",
        "ram": "8GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    }
    , {
        image: 'image/oneplus/oneplus-10-pro.jpg',
        "model": "Oneplus 10 pro",
        "color": "Black",
        "storage": "256GB",
        "ram": "4GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": '64,000.0'

    }, {
        image: 'image/oneplus/oneplus-8-pro.jpg',
        "model": "Oneplus 8 pro",
        "color": "Black",
        "storage": "256GB",
        "ram": "4GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": '64,000.0'

    }


]
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




