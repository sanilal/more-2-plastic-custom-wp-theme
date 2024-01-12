jQuery(document).ready(function($){
    const sliderContainer = document.querySelector('.slider')

const numberOfpledges = document.querySelectorAll('.cf7-view-field-type-sequenceNumber-value')

const pledgeCount = $('.take-pledge h2').html(numberOfpledges.length+1890)
//console.log(pledgeCount);

let trueFalse, resultMessage 
// const itsTrue = document.querySelector('.itstrue')
// const itsFalse = document.querySelector('.itsfalse')

// itsTrue.addEventListener('click', ()=>{ trueFalse = true })
// itsFalse.addEventListener('click', ()=>{ trueFalse = false })
$('input[type="radio"]').click(function(){
    $(this).addClass('checkedInput');
})

$('#pledge-submit').click(function(){
    setTimeout(function(){
        const pledgeForm = $('#take-pledge-form form').attr("data-status")
            if(pledgeForm == 'sent') {
                document.getElementById('take-pledge-form').classList.add('hideNow')
                document.querySelector('.pledge-badge ').classList.add('show')
            } 
        }
    , 3000);
})
})

AOS.init();

$(window).scroll(function($) {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 200) {
        //clearHeader, not clearheader - caps H
        $(".header").addClass("sticky-header");
    } else {
        $(".header").removeClass("sticky-header");
    }
}); //missing );


if(sliderContainer){
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
    mythBtn.classList.remove('active')
    mythBtn.addEventListener('click', (e)=>{
        for(var i = 0; i < mythBtns.length; i++){
            if(e.currentTarget != mythBtns[i]){ // check here
                mythBtns[i].classList.remove('active')
            }
        }
        trueFalse = mythBtn.dataset.result
        factContainer.classList.remove('true')
        factContainer.classList.remove('false')
        if(trueFalse == 'false') {
            resultMessage = 'No, you got it wrong'
        } else {
            resultMessage = 'yay, you got it right'
        }
        // resultMessage = (trueFalse == false ? 'No, you got it wrong' : 'yay, you got it right');
        factHeading.innerHTML = resultMessage
        factContainer.classList.add(trueFalse)
        
        mythBtn.classList.add('active')
        // if(!(mythBtn.classList.contains('active'))) {
        //     mythBtn.classList.add('active')
        // }
        if(!(factContainer.classList.contains('active'))) {
            factContainer.classList.add('active')
        }
    })

});

function initiateMyth(idx){
    //console.log(myths[idx]);
    mythTitle.innerHTML = myths[idx].question
    
    // if((factContainer.classList.contains(myths[idx].result))) {
    //      factContainer.classList.remove(myths[idx].result)
    //     factContainer.classList.add(myths[idx].result)
    // }
    // if(trueFalse){factContainer.classList.add(trueFalse)}
      
    // factContainer.classList.add(myths.myth1.result)
    
    factAnswer.innerHTML = myths[idx].answer
    nextMyth.dataset.id = myths[idx].id
    mythImage.src = myths[idx].image
}

nextMyth.addEventListener('click', (e)=> {
    mythBtns.forEach((mythBtn=>{mythBtn.classList.remove('active')}))
   let targetid = e.target.dataset.id;
    updateMyth(targetid)
})

function updateMyth(id){
  
    if((factContainer.classList.contains('active'))) {
        factContainer.classList.remove('active')
    }

    //  nextMyth = document.querySelector('.nextbtn')
    // let currentMythId = $(nextMyth).data('id')
    // console.log(currentMythId);
    // const nextMythId = Object.keys(myths)[currentMythId]
    // console.log(nextMythId);
    const nextMythId = Object.keys(myths)[id]
    if((factContainer.classList.contains('true'))) {
         factContainer.classList.remove('true')
    }else {
        factContainer.classList.remove('false')
    }
    const count = Object.keys(myths).length-1;
    if(count == nextMyth.dataset.id++) {
        nextMyth.classList.add('hideNow')
    }
   
    initiateMyth(nextMythId)
}

$(document).ready(function($){
    if(sliderContainer){
    initiateMyth(firstMyth)
    }
})

}




// for (const key in myths) {
//     if (myths.hasOwnProperty(key)) {
//         console.log(`${key}: ${myths[key].question}`);
//     }
    
// }

//take pledge

const takePledgeButton = document.getElementById('take-pledge-btn')

const pledgeFormWraper = document.getElementById('pledge-form')

takePledgeButton.addEventListener('click', (e)=>{
    pledgeFormWraper.classList.add('show')
})

// Rethink Slider
const sliderId = "rethink-slider";
const slidecount = document.getElementById(sliderId).childElementCount;


function hideAll(){
    for(var i = 1; i<=slidecount;i++){
    var id = 'slide'+i;
    var slide = document.getElementById(sliderId).children[i-1];
    slide.classList.add('hideNow')
    }
    }

    function show(no,name,duretion){
        hideAll();
        var slide = document.getElementById(sliderId).children[no-1];
        slide.classList.remove('hideNow')
        slide.classList.add('show')
        slide.style.animationName = name;
        slide.style.animationDuration = duretion;
        }

        var current = 1;
        var time =  4;
        var effect =  'show';
        var effectTime =  '1s';

        setInterval(function auto(){
            if(current>=slidecount){
            current = 1;
            }else{
            current++;
            }
            show(current,effect,effectTime);
            },(1000*time));
const rethinkimgs = document.querySelectorAll('.rethink-img')
const slideImages = document.querySelectorAll('.slide-img')
// console.log(slideImages)
slideImages.forEach((image)=>{
    var newArray = [];
    for(var i = 0; i<=slideImages.length;i++){
        var image = slideImages[i];
        var heights = image.clientHeight;
        newArray.push(heights);
        const preferedHeight = Math.max(...newArray);
        rethinkimgs.forEach((rethinkimg)=>{
            rethinkimg.style.height = preferedHeight+'px'
        })
    }
        
})

// Rethink slider ends

