$(window).load("load", function hidden() {

    setTimeout(() => {
        $('#hiddenFooter').slideToggle();
    }, 3000);

    $('#xFont').click(function (event) {
        $('#hiddenFooter').hide()
    }).hover(function (event) {
        $(this.event).css("color", 'red');
    }).mouseleave(function () {
        $(this.event).css("color", '');
    })
})


$(document).ready(function(){
    
})

const nav = ()=>{
const spanMenuIcon = document.getElementById('icon');
const listItem1 = document.querySelectorAll('nav li');

spanMenuIcon.addEventListener("click", ()=> {
    listItem1.forEach((list)=>{
        list.classList.toggle('shownav')
        // alert("sjfdhsakjf")
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
}
nav()