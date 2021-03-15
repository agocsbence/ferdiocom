var sections = Array.from(document.querySelectorAll('.home-hero-spinner'));
var n = 1;

var active = document.querySelector('.active');

var animChars = (a, repeat) => {
    ++repeat;
    const chars = ['$','%','#','@','&','(',')','=','*','/'];
    const charsTotal = chars.length;
    const getRandomInt = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;
    a.timeouts = [];
    var complete = false;
    let cnt = 0;
    var title = a.querySelector('.spinner-text');
    // var letters = Array.from(title.querySelectorAll('span'));
    
    if (repeat > sections.length) {
        var letters = Array.from(title.querySelectorAll('span'));
        letters.forEach(letter => letter.innerHTML = letter.dataset.initial);
    } else {
        charming(title);
        var letters = Array.from(title.querySelectorAll('span'));
        letters.forEach(letter => letter.dataset.initial = letter.innerHTML);
    }

    letters.forEach((letter, pos) => {
        const timeout = setTimeout(() => {
        var num = getRandomInt(0, charsTotal-1);
        letter.innerHTML = chars[num];
        
        setTimeout(() => {
            letter.innerHTML = letter.dataset.initial;
            ++cnt;
            if ( cnt === letters.length ) {
                a.complete = true;
                setTimeout(() => {
                    var next = a.nextElementSibling;
                    if(repeat === sections.length*n) {
                        var next = sections[0];
                        ++n;
                    }
                    a.classList.remove('active');
                    next.classList.add('active');
                    var active = document.querySelector('.active');
                    animChars(active, repeat);
                }, 2000);
            }
        }, 100);
        
        }, pos*80);
        a.timeouts.push(timeout);
    });
};

animChars(active, 0);