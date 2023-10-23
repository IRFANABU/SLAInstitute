const spanMenuIcon = document.getElementById('icon');
const listItem1 = document.querySelectorAll('nav li');

spanMenuIcon.addEventListener("click", ()=> {
    listItem1.forEach((list)=>{
        list.classList.toggle('shownav')
    })

    if(spanMenuIcon.classList.contains('fa-bars')){
        spanMenuIcon.classList.add('fa-times')
      spanMenuIcon.classList.remove('fa-bars')

    }
    else{
        spanMenuIcon.classList.remove('fa-times')
        spanMenuIcon.classList.add('fa-bars')
      

    }

})