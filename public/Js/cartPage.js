

const productData = [

    {
        'id': 1,
        'image': '/image/iphone images/apple-iphone-11-1.jpg',
        "model": "Iphone 11 Pro",
        "color": "Black",
        "storage": "128GB",
        "ram": "12GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    }, {
        'id': 2,
        image: '/image/iphone images/apple-iphone-11-1.jpg',
        "model": "Iphone 12 Pro",
        "color": "Black",
        "storage": "128GB",
        "ram": "12GB",
        "camera": "16MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.00"

    }, {
        'id': 3,
        image: '/image/watches/huawei-watch-gt4.jpg',
        "model": "Huawei watch GT4",
        "color": "Black",
        "storage": "128GB",
        "ram": "8GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    }, {
        'id': 4,
        image: '/image/iphone images/apple-iphone-11-1.jpg',
        "model": "Iphone 13 Pro",
        "color": "Black",
        "storage": "128GB",
        "ram": "8GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    }, {
        'id': 5,
        image: '/image/iphone images/apple-iphone-11-1.jpg',
        "model": "Samsung Galaxy watch 5 ",
        "color": "Black",
        "storage": "256GB",
        "ram": "4GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": '64,000.0'

    },

    {
        'id': 6,
        'image': '/image/iphone images/apple-iphone-11-1.jpg',
        "model": "Iphone 14 Pro",
        "color": "Black",
        "storage": "128GB",
        "ram": "12GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    },
    {
        'id': 7,
        image: 'image/watches/google-pixel-watch.jpg',
        "model": "Google Pixel watch",
        "color": "Black",
        "storage": "128GB",
        "ram": "8GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    }, {
        'id': 8,
        image: '/image/watches/google-pixel-watch.jpg',
        "model": "Samsung galaxy s23 Ultra 5G",
        "color": "Black",
        "storage": "128GB",
        "ram": "8GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    }, {
        'id': 9,
        image: '/image/samsung images/samsung-galaxy-z-fold5-5g.jpg',
        "model": "Samsung Galaxy z fold5 5G",
        "color": "Black",
        "storage": "128GB",
        "ram": "8GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    }, {
        'id': 10,
        image: '/image/oneplus/oneplus-8-pro.jpg',
        "model": "Apple watch ultra 2",
        "color": "Black",
        "storage": "128GB",
        "ram": "8GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": "64,000.0"

    }
    , {
        'id': 11,
        image: '/image/oneplus/oneplus-10-pro.jpg',
        "model": "Oneplus 10 pro",
        "color": "Black",
        "storage": "256GB",
        "ram": "4GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": '64,000.0'

    }, {
        'id': 12,
        image: '/image/oneplus/oneplus-8-pro.jpg',
        "model": "Oneplus 8 pro",
        "color": "Black",
        "storage": "256GB",
        "ram": "4GB",
        "camera": "48MP",
        "processor": "A14 Bionic Chip",
        "price": '64,000.0'

    }


]


data()
function data() {

    getData = "";
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
        // buttonDiv.setAttribute('id', 'buttonss')
        newDiv.appendChild(buttonDiv);


        // error   
        //Uncaught TyperError: failed to execute 'appenchild' on node :parameter 1 is not  of type 'node';
        // var viewBtn = document.createElement('button');
        // viewBtn.textContent = "View"
        // viewBtn.style;
        // viewBtn.setAttribute('id', 'viewProduct');
        // var addtocart = document.createElement('button');
        // addtocart.textContent = "Add"

        // const arrayofButttons = [viewBtn, addtocart];
        // for (const buttons of arrayofButttons) {

        //     buttonDiv.appendChild(buttons);
        //     console.log(buttons.getAttribute)

        // }
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

// $(document).ready(function () {
//     $('#filter-Div').click((event) => {
//         $(event).slideToggle();
//     })
// })


let viewButton = document.querySelectorAll('#ViewBtn');
        viewButton.forEach((item,index)=>{
            item.addEventListener("click",(event)=>{
            
            alert("helloc index"+":"+ index)
        })
    })
            
        
        


