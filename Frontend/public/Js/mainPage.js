
// ---------------------------------   nav Menu Bar ---------------------------//

const menu = document.querySelector('.menu');

const listItem = document.querySelectorAll('nav li');

menu.addEventListener("click", ()=> {
    let plusButton = new Promise((resolve, reject) => {
        listItem.forEach(list => {
            if (!list.classList.contains('shownav')) {
                resolve(menu.classList.add)
                resolve(list.classList.add('shownav'));
            }

            else {
                reject(list.classList.remove('shownav'));
            }

        })
    })

    plusButton.then(() => console.log("menu bar is open"))
        .catch(() => console.log("menu bar is closed"));

})


   $(document).ready(function(){
    $("#ulList").click(function(){
        $("#ulData").slideToggle(300,function(){
            
        })
    })
   })
        

//         document.getElementById('submitButton').addEventListener("click",function(e){
//           e.preventDefault();  
//             checkInputs()
            
        
        
//         });

//  function checkInputs(){
    
//     const name = document.getElementById('name');
//         const email = document.getElementById('email');
//         const phone = document.getElementById('phone');
//         // const drop = document.getElementById('drop');
//     //     values= drop.options[drop.selectedIndex].value;
//     //    valuestext= drop.options[drop.selectedIndex].text;
//     //     console.log(values)
 
//     if(name.value === ""){
//         name.classList.add('error')
        
        
//     }
//     else if(name.value.length < 3){
//         name.classList.add('error')
        

//     }
//     else{
//         name.classList.remove('error')
        
//     }

//     if (email.value ==''){
//         email.classList.add('error')

//     }
//     else{
//         email.classList.remove('error');

//     }
//     if(phone.value == "" && phone.value.length < 10 ){
//         phone.classList.add('error')
   
//     }
   
//     else{
//         phone.classList.remove('error')
//     }
//     if(values == "india" ){
//         drop.classList.add('error')
        
//     }
//     else{

        

//     }
//     focusIn(name,phone,drop,email)
    
    
//  }

//  function onError(input,message){
//     let parent = input.parentElement;
//     parent.classList.add('error');
//  }

//  function focusIn(n,e,p,s){
    
   
//     n.addEventListener("focusin",()=>{
//         n.classList.remove('error');
    
//     })
//     p.addEventListener("focusin",()=>{
//         p.classList.remove('error');
    
//     })
//     s.addEventListener("focusin",()=>{
//         s.classList.remove('error');
    
//     })
//     e.addEventListener("focusin",()=>{
//         e.classList.remove('error');
//     })
   
    
   
//  }



// user()
//  function user () {
//     const userMenu = document.getElementById('userIcon');
//     const xcloseBtn = document.getElementById('xmark');
//     const userDiv = document.getElementById('popup');
//      userMenu.addEventListener("click",()=>{ 
//        userDiv.classList.add('Active')
//  })

//     xcloseBtn.addEventListener("click",()=>{
//         userDiv.classList.remove('Active')
//     })
//  }
 
 

