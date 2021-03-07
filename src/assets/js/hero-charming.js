//Character animation
// var chElement = document.querySelector('.home-hero-spinner');
// charming(chElement);
// console.log('charming ready on ' + chElement);

//

const chars = ['$','%','#','@','&','(',')','=','*','/'];
const charsTotal = chars.length;
const getRandomInt = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;

class Entry {
    constructor(el) {
        this.DOM = {el: el};
        this.DOM.title = {word: this.DOM.el.querySelector('.spinner-text')};
        charming(this.DOM.title.word);
        this.DOM.title.letters = Array.from(this.DOM.title.word.querySelectorAll('span'));
        this.DOM.title.letters.forEach(letter => letter.dataset.initial = letter.innerHTML);
        this.lettersTotal = this.DOM.title.letters.length;
        observer.observe(this.DOM.el);
    }
    get chars() {
        return this.animChars();
    }
    animChars() {
        this.DOM.title.word.style.opacity = 1; 
        this.timeouts = [];
        this.complete = false;
        let cnt = 0;
        this.DOM.title.letters.forEach((letter, pos) => {
            const timeout = setTimeout(() => {
                letter.innerHTML = chars[getRandomInt(0,charsTotal-1)];
                setTimeout(() => {
                    letter.innerHTML = letter.dataset.initial;
                    ++cnt;
                    if ( cnt === this.lettersTotal ) {
                        this.complete = true;
                    }
                }, 100);
            }, pos*80);
            this.timeouts.push(timeout);
        });
    }
}

const sections = Array.from(document.querySelectorAll('.home-hero-spinner'));
sections.forEach(section => new Entry(section));