const mythBtns = document.querySelectorAll('.mythbtn')
const factContainer = document.getElementById('fact')
const mythTitle = document.querySelector('.mythtitle')
const factHeading = document.querySelector('.fact-heading')
const factAnswer = document.querySelector('.fact-answer')
const numberOfMyths = Object.keys(myths).length;
const firstMyth = Object.keys(myths)[0];
let nextMyth = document.querySelector('.nextbtn')
const mythImage= document.querySelector('.myth-image')

mythBtns.forEach(mythBtn => {
    mythBtn.addEventListener('click', ()=>{
        if(!(factContainer.classList.contains('active'))) {
            factContainer.classList.add('active')
        }
    })

});


$(document).ready(function(){
    initiateMyth(firstMyth)
})

function initiateMyth(idx){
    mythTitle.innerHTML = myths[idx].question
    const resultMessage = (myths[idx].result == false ? 'No, you got it wrong' : 'yay, you got it right');
    // if((factContainer.classList.contains(myths[idx].result))) {
    //      factContainer.classList.remove(myths[idx].result)
    //     factContainer.classList.add(myths[idx].result)
    // }
     factContainer.classList.add(myths[idx].result)
    // factContainer.classList.add(myths.myth1.result)
    factHeading.innerHTML = resultMessage
    factAnswer.innerHTML = myths[idx].answer
    nextMyth.dataset.id = myths[idx].id
    mythImage.src = 'assets/img/'+myths[idx].image
}

nextMyth.addEventListener('click', (e)=> {
alert(e.target.dataset.id);
    updateMyth()
})

function updateMyth(){
    if((factContainer.classList.contains('active'))) {
        factContainer.classList.remove('active')
    }
    nextMyth = document.querySelector('.nextbtn')
    console.log(nextMyth);
    let currentMythId = $(nextMyth).data('id')
    console.log(Object.keys(myths));
    const nextMythId = Object.keys(myths)[currentMythId]
    console.log(nextMythId);
    if((factContainer.classList.contains('true'))) {
         factContainer.classList.remove('true')
    }else {
        factContainer.classList.remove('false')
    }
    initiateMyth(nextMythId)
}

for (const key in myths) {
    if (myths.hasOwnProperty(key)) {
        console.log(`${key}: ${myths[key].question}`);
    }
    
}

