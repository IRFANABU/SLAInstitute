var icon = document.getElementById('userIcon');
var popup = document.getElementById("popup")
icon.addEventListener("click", () => {
    popup.classList.toggle("userActive")
})



// const menu1 = document.querySelector('.menu');
const spanMenuIcon = document.getElementById('icon');
const listItem1 = document.querySelectorAll('nav .li');

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

const CopyrightsDate = () => {
    var getDate = new Date().getFullYear();
    console.log(getDate);
    document.getElementById('datecopy').innerHTML = `Mobiles © ${getDate} All Rights Reserved`;

}
CopyrightsDate();