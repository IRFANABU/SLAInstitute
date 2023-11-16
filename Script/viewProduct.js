var AddBtn = document.getElementById("add to cart");
AddBtn.addEventListener("click", (event) => {

    alert("hello");
    console.log("from Login.js");
    var modelname= document.getElementsByTagName('b').value;
    
   localStorage.setItem("ProductName",modelname)

    var mmm= localStorage.getItem(mNamee);
    console.log(mmm)

})

var cartIcon = document.getElementById('cartIcon');
var body = document.querySelector('body');
    cartIcon.addEventListener("click",()=>{
        body.classList.add('active');

    })

// $(document).ready(function () {       
//     $("#cartIcon").click(function() {
//         $("#cartDiv").slideUp({"left": "+=250px"}, 3000);
//     });

//     $('#xmarkCart').click(()=>{
//         $('#cartDiv').slideUp();
//     });
// });

// $(document).ready(()=>{
//     $('#cartIcon1').click(()=>{
//         // $("#cartDiv").slide
//         $("#cartDiv1")
//    .css("margin-Left",-$("#cartDiv1").width())
   
//    .delay(400)
//    .animate({
//        marginLeft:-1130
//  }, 900)
 
//     })
   
// })