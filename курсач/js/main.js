let imgs = $('.sliderImgs').children();
let selects = $('.slider-select').children();
let chooseReq = $('.choose-req').children();
let minimum = $('.minimum');
let maximum = $('.requirement');
let left = $('#left');
let right = $('#right');
maximum.toggle();
let img = 0;
let count = imgs.length;

let interval = setInterval(change, 5000);

function change() {
    if (img == count-1){
        $($(selects[count - 1]).children()[0]).removeClass('slider-selected');
        $($(selects[0]).children()[0]).addClass('slider-selected');
        $(imgs[0]).removeClass('fade-out');
        $(imgs[0]).addClass('fade-in');
    } else {
        $($(selects[img]).children()[0]).removeClass('slider-selected')
        $(imgs[img]).removeClass('fade-in');
        $(imgs[img]).addClass('fade-out');
    }
    $(imgs[img]).css('order', 1);
    img++;
    $(imgs[img]).css('order', 0);
    $(imgs[img]).removeClass('fade-out');
    $(imgs[img]).addClass('fade-in');
    $($(selects[img]).children()[0]).addClass('slider-selected')
    if (img === count) {
        img = 0;
    }
}

selects.click(function (event) {
    img = event.currentTarget.id[1];
    edit()
});

chooseReq.click(function (event) {
    let req = event.currentTarget.id;
    $(event.currentTarget).addClass('orange');
    $(event.currentTarget.nextElementSibling).removeClass('orange');
    $(event.currentTarget.previousElementSibling).removeClass('orange')
    if (req === 'req') {
        maximum.css('display', 'block');
        minimum.css('display', 'none');
    }
    if (req === 'min') {
        minimum.css('display', 'block');
        maximum.css('display', 'none');
    }
});

left.click(function (){
    img --;
    edit();
})

right.click(function (){
    img++;
    edit()
})

function edit(){
    if(img<0) img = count-1;
    if(img>count-1) img = 0;
    for (let i = 0; i < count; i++) {
        if (img == i){
            $(imgs[img]).css('order', 0);
            $(imgs[img]).removeClass('fade-out');
            $(imgs[img]).addClass('fade-in');
            $($(selects[img]).children()[0]).addClass('slider-selected')
        } else {
            $(imgs[i]).css('order', 1);
            $(imgs[i]).removeClass('fade-in');
            $(imgs[i]).addClass('fade-out');
            $($(selects[i]).children()[0]).removeClass('slider-selected')
        }
    }
}