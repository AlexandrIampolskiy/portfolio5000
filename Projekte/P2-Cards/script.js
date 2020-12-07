

const PARENT_ELEMENT = document.querySelector('.card_wrap')
const PARENT_ELEMENT_TABLE = document.querySelector('#table')
const NUMBER_OF_PAIRS = 10;
const CARDS_IN_PAIR = 2;
const ALL_CARDS = NUMBER_OF_PAIRS * CARDS_IN_PAIR;
let cards = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
let sort = cards.sort((a, b) => 0.5 - Math.random());

/* btn fürs neuladen der (random)Karten */
let btn_reload = document.querySelector('#btn_reload');
btn_reload.onclick = ()=> {
    location.reload();
    };

/* erstellung der Kartenpaare und der Karten */
for (i = 0; i < NUMBER_OF_PAIRS; i++) {
    let new_pair_div = document.createElement('div');
    new_pair_div.setAttribute('id', 'pair'+i);
    new_pair_div.setAttribute('class', 'allPairs');
    PARENT_ELEMENT.appendChild(new_pair_div);
    new_pair_div.style.cssText = "border: 2px solid green; border-radius: 25px; display: flex; width: 300px; margin: 5px; padding: 20px;"

    for (j = 0; j < CARDS_IN_PAIR; j++) {
        let new_card_div = document.createElement('div');
        new_card_div.setAttribute('id', 'pair'+i+ 'card' +j);
        new_pair_div.appendChild(new_card_div);
        let del_card = cards.pop();
        let cardX = document.querySelector('#pair' + i + 'card' + j);
        cardX.style.cssText = "background-image:url('cards/" + del_card + ".png'); width: 150px; height: 200px;  background-repeat: no-repeat; background-size: 85%;"
    } 
}

/* checkbox(en) in ner schleife mit button zum anwählen */

for (i = 0; i < 4; i++) {
    let btn_row = document.querySelector('#btn_row' + i);
    let counter = 0;
    let checkbox = document.querySelector('#check_row' + i);
    let second_checkbox = document.querySelector('#second_check_row' + i);
    let row = document.querySelector('#row' + i);
    
    /* addclasslist bei border geht niocht, nach 3 mal clicken kommt keine mehr... wtf */

    btn_row.onclick = function () {
        counter++;
        console.log(counter);
        if (counter == 1) {
            checkbox.classList.remove('hidden');
            checkbox.checked = true;
            /* row.style.border = '3px solid #03fc88 '; */
            row.classList.add('border_green0')
        } else if (counter == 2) {
            
            second_checkbox.classList.remove('hidden');
            second_checkbox.checked = true;
            /* row.style.border = '3px solid #116317'; */
            btn_row.value = "Entfernen";
            row.classList.add('border_green1');
            row.classList.remove('border_green0')
        } else if (counter >= 2) {
            checkbox.classList.add('hidden');
            second_checkbox.classList.add('hidden');
            counter = 0;
            checkbox.checked = false;
            second_checkbox.checked = false;
            row.classList.remove('border_green1')
            btn_row.value = "Auswählen";   
        }

    }
}

let codeready = ["#A1", "#A2", "#E1", "#E2", '#O1', '#O2', '#I1', '#I2', '#N1', '#N2', '#U1', '#U2', '#K1', '#K2', '#M1', '#M2', '#T1', '#T2', '#G1', '#G2'];
let code = ["#N1", "#N2", "#A1", "#A2", '#U1', '#U2', '#K1', '#K2', '#M1', '#M2', '#E1', '#E2', '#T1', '#T2', '#O1', '#O2', '#G1', '#G2', '#I1', '#I2'];


let pairCode =  [
                ["#N1", "#N2"], ["#A1", "#A2"], ['#U1', '#U2'], ['#K1', '#K2'], ['#M1', '#M2'],
                ['#E1', '#E2'], ['#T1', '#T2'], ['#O1', '#O2'], ['#G1', '#G2'], ['#I1', '#I2']
                ];




document.querySelector('#N1').style.cssText = document.querySelector('#pair' + 0 + 'card' + 0).style.cssText;
document.querySelector('#N2').style.cssText = document.querySelector('#pair' + 0 + 'card' + 1).style.cssText;
document.querySelector('#A1').style.cssText = document.querySelector('#pair' + 1 + 'card' + 0).style.cssText;
document.querySelector('#A2').style.cssText = document.querySelector('#pair' + 1 + 'card' + 1).style.cssText;
document.querySelector('#U1').style.cssText = document.querySelector('#pair' + 2 + 'card' + 0).style.cssText;
document.querySelector('#U2').style.cssText = document.querySelector('#pair' + 2 + 'card' + 1).style.cssText;
document.querySelector('#K1').style.cssText = document.querySelector('#pair' + 3 + 'card' + 0).style.cssText;
document.querySelector('#K2').style.cssText = document.querySelector('#pair' + 3 + 'card' + 1).style.cssText;
document.querySelector('#M1').style.cssText = document.querySelector('#pair' + 4 + 'card' + 0).style.cssText;
document.querySelector('#M2').style.cssText = document.querySelector('#pair' + 4 + 'card' + 1).style.cssText;
document.querySelector('#E1').style.cssText = document.querySelector('#pair' + 5 + 'card' + 0).style.cssText;
document.querySelector('#E2').style.cssText = document.querySelector('#pair' + 5 + 'card' + 1).style.cssText;
document.querySelector('#T1').style.cssText = document.querySelector('#pair' + 6 + 'card' + 0).style.cssText;
document.querySelector('#T2').style.cssText = document.querySelector('#pair' + 6 + 'card' + 1).style.cssText;
document.querySelector('#O1').style.cssText = document.querySelector('#pair' + 7 + 'card' + 0).style.cssText;
document.querySelector('#O2').style.cssText = document.querySelector('#pair' + 7 + 'card' + 1).style.cssText;
document.querySelector('#G1').style.cssText = document.querySelector('#pair' + 8 + 'card' + 0).style.cssText;
document.querySelector('#G2').style.cssText = document.querySelector('#pair' + 8 + 'card' + 1).style.cssText;
document.querySelector('#I1').style.cssText = document.querySelector('#pair' + 9 + 'card' + 0).style.cssText;
document.querySelector('#I2').style.cssText = document.querySelector('#pair' + 9 + 'card' + 1).style.cssText;



function search() {
    let right_card0 = document.querySelector('#right_card0');
    let right_card1 = document.querySelector('#right_card1');
    let checkbox0 = document.querySelector('#check_row0')
    let checkbox1 = document.querySelector('#check_row1')
    let checkbox2 = document.querySelector('#check_row2')
    let checkbox3 = document.querySelector('#check_row3')

    let second_checkbox0 = document.querySelector('#second_check_row0')
    let second_checkbox1 = document.querySelector('#second_check_row1')
    let second_checkbox2 = document.querySelector('#second_check_row2')
    let second_checkbox3 = document.querySelector('#second_check_row3')
    

    if (checkbox0.checked && second_checkbox0.checked) {                            /* doppelte */
        right_card0.style.cssText = document.querySelector('#A1').style.cssText;
        right_card1.style.cssText = document.querySelector('#A2').style.cssText;
    } else if (checkbox1.checked && second_checkbox1.checked) {
        right_card0.style.cssText = document.querySelector('#E1').style.cssText;
        right_card1.style.cssText = document.querySelector('#E2').style.cssText;
    } else if (checkbox2.checked && second_checkbox2.checked) {
        right_card0.style.cssText = document.querySelector('#O1').style.cssText;
        right_card1.style.cssText = document.querySelector('#O2').style.cssText;
    } else if (checkbox3.checked && second_checkbox3.checked) {
        right_card0.style.cssText = document.querySelector('#I1').style.cssText;
        right_card1.style.cssText = document.querySelector('#I2').style.cssText;
    } else if (checkbox0.checked && checkbox2.checked) {                            /* einzelne */ 
        right_card0.style.cssText = document.querySelector('#N1').style.cssText;
        right_card1.style.cssText = document.querySelector('#N2').style.cssText;
    } else if (checkbox0.checked && checkbox1.checked) {
        right_card0.style.cssText = document.querySelector('#U1').style.cssText;
        right_card1.style.cssText = document.querySelector('#U2').style.cssText;
    } else if (checkbox0.checked && checkbox3.checked) {
        right_card0.style.cssText = document.querySelector('#K2').style.cssText;
        right_card1.style.cssText = document.querySelector('#K2').style.cssText;
    } else if (checkbox1.checked && checkbox2.checked) {
        right_card0.style.cssText = document.querySelector('#M1').style.cssText;
        right_card1.style.cssText = document.querySelector('#M2').style.cssText;
    } else if (checkbox1.checked && checkbox3.checked) {
        right_card0.style.cssText = document.querySelector('#T1').style.cssText;
        right_card1.style.cssText = document.querySelector('#T2').style.cssText;
    } else if (checkbox2.checked && checkbox3.checked) {
        right_card0.style.cssText = document.querySelector('#G1').style.cssText;
        right_card1.style.cssText = document.querySelector('#G2').style.cssText;
    }
}


let find_card_btn = document.querySelector('#find_card_btn');
find_card_btn.onclick = () => {
    let table = document.querySelector('#table');
    let all_checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
    search();
    if (all_checkboxes.length !== 2) {
        alert("Ein Paar hat zwei Karten, bitte wählen Sie die Reihe(n) aus in der Ihre zwei Karten liegen.")
    } else {
        table.classList.add('hidden')
        
    }
}


let btn_next = document.querySelector('#btn_next');
btn_next.onclick = function() {
    let card_wrap = document.querySelector('#card_wrap');
    card_wrap.classList.add('hidden');
    let table = document.querySelector('#table')
    table.classList.remove('hidden');
    let find_card_btn = document.querySelector('#find_card_btn');
    find_card_btn.classList.remove('hidden');
    let option0 = document.querySelector('.option0');
    option0.classList.add('hidden');
}














/*         for(j=0; j<20;j++){
            for (i = 0; i < 2; i++) {
                let x = document.querySelector('#pair' + j + 'card' + i);            
                let x2 = document.querySelector(code[j]);
                x2.style.cssText += x.style.cssText;
            }
        }
        
    
     */
    

    /* for (k = 0; k < code.length; k++) {
        for (i = 0; i < 2; i++) {
            console.log(document.querySelector('#pair' + k + 'card' + i).style.cssText);
            document.querySelector(code[i]).style.cssText += document.querySelector('#pair' + k + 'card' + i).style.cssText;
            console.log(k + "k" + "pair");
            console.log(i + "i" + "card");
            console.log("*");
            console.log(code[i + 1]);
            console.log(document.querySelector('#pair' + k + 'card' + i).style.cssText);
        }
    } */



/* 
let x2 = document.querySelector(code[0]);
let x1 = document.querySelector('#pair' + j + 'card' + i).style.cssText;
console.log(x1);
console.log(x2); */

/* 
document.querySelector('#N1').style.cssText = document.querySelector('#pair' + 0 + 'card' + 0).style.cssText;
document.querySelector('#N2').style.cssText = document.querySelector('#pair' + 0 + 'card' + 1).style.cssText;
document.querySelector('#A1').style.cssText = document.querySelector('#pair' + 1 + 'card' + 0).style.cssText;
document.querySelector('#A2').style.cssText = document.querySelector('#pair' + 1 + 'card' + 1).style.cssText;
document.querySelector('#U1').style.cssText = document.querySelector('#pair' + 2 + 'card' + 0).style.cssText;
document.querySelector('#U2').style.cssText = document.querySelector('#pair' + 2 + 'card' + 1).style.cssText;
document.querySelector('#K1').style.cssText = document.querySelector('#pair' + 3 + 'card' + 0).style.cssText;
document.querySelector('#K2').style.cssText = document.querySelector('#pair' + 3 + 'card' + 1).style.cssText;
document.querySelector('#M1').style.cssText = document.querySelector('#pair' + 4 + 'card' + 0).style.cssText;
document.querySelector('#M2').style.cssText = document.querySelector('#pair' + 4 + 'card' + 1).style.cssText;
document.querySelector('#E1').style.cssText = document.querySelector('#pair' + 5 + 'card' + 0).style.cssText;
document.querySelector('#E2').style.cssText = document.querySelector('#pair' + 5 + 'card' + 1).style.cssText;
document.querySelector('#T1').style.cssText = document.querySelector('#pair' + 6 + 'card' + 0).style.cssText;
document.querySelector('#T2').style.cssText = document.querySelector('#pair' + 6 + 'card' + 1).style.cssText;
document.querySelector('#O1').style.cssText = document.querySelector('#pair' + 7 + 'card' + 0).style.cssText;
document.querySelector('#O2').style.cssText = document.querySelector('#pair' + 7 + 'card' + 1).style.cssText;
document.querySelector('#G1').style.cssText = document.querySelector('#pair' + 8 + 'card' + 0).style.cssText;
document.querySelector('#G2').style.cssText = document.querySelector('#pair' + 8 + 'card' + 1).style.cssText;
document.querySelector('#I1').style.cssText = document.querySelector('#pair' + 9 + 'card' + 0).style.cssText;
document.querySelector('#I2').style.cssText = document.querySelector('#pair' + 9 + 'card' + 1).style.cssText;
 */

/* 
document.querySelector('#N1').style.cssText = document.querySelector('#pair' + 0 + 'card' + 0).style.cssText;
document.querySelector('#N2').style.cssText = document.querySelector('#pair' + 0 + 'card' + 1).style.cssText;
document.querySelector('#A1').style.cssText = document.querySelector('#pair' + 1 + 'card' + 0).style.cssText;
document.querySelector('#A2').style.cssText = document.querySelector('#pair' + 1 + 'card' + 1).style.cssText;
document.querySelector('#U1').style.cssText = document.querySelector('#pair' + 2 + 'card' + 0).style.cssText;
document.querySelector('#U2').style.cssText = document.querySelector('#pair' + 2 + 'card' + 1).style.cssText;
document.querySelector('#K1').style.cssText = document.querySelector('#pair' + 3 + 'card' + 0).style.cssText;
document.querySelector('#K2').style.cssText = document.querySelector('#pair' + 3 + 'card' + 1).style.cssText;
document.querySelector('#M1').style.cssText = document.querySelector('#pair' + 4 + 'card' + 0).style.cssText;
document.querySelector('#M2').style.cssText = document.querySelector('#pair' + 4 + 'card' + 1).style.cssText;
document.querySelector('#E1').style.cssText = document.querySelector('#pair' + 5 + 'card' + 0).style.cssText;
document.querySelector('#E2').style.cssText = document.querySelector('#pair' + 5 + 'card' + 1).style.cssText;
document.querySelector('#T1').style.cssText = document.querySelector('#pair' + 6 + 'card' + 0).style.cssText;
document.querySelector('#T2').style.cssText = document.querySelector('#pair' + 6 + 'card' + 1).style.cssText;
document.querySelector('#O1').style.cssText = document.querySelector('#pair' + 7 + 'card' + 0).style.cssText;
document.querySelector('#O2').style.cssText = document.querySelector('#pair' + 7 + 'card' + 1).style.cssText;
document.querySelector('#G1').style.cssText = document.querySelector('#pair' + 8 + 'card' + 0).style.cssText;
document.querySelector('#G2').style.cssText = document.querySelector('#pair' + 8 + 'card' + 1).style.cssText;
document.querySelector('#I1').style.cssText = document.querySelector('#pair' + 9 + 'card' + 0).style.cssText;
document.querySelector('#I2').style.cssText = document.querySelector('#pair' + 9 + 'card' + 1).style.cssText;
 */











/* n1.style.cssText = "background-image:url('cards/" + del_card + ".png'); width: 150px; height: 200px;  background-repeat: no-repeat; background-size: 85%;"
 */



/* const N1 = document.getElementById("N1")
N1.style.cssText =  "background-image:url('cards/" + 26 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"

const N2 = document.getElementById("N2")
N2.style.cssText = "background-image:url('cards/" + 25 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;" */


/* document.getElementById("A1").style.cssText = "background-image:url('cards/" + 24 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("A2").style.cssText = "background-image:url('cards/" + 23 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("U1").style.cssText = "background-image:url('cards/" + 22 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("U2").style.cssText = "background-image:url('cards/" + 21 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("K1").style.cssText = "background-image:url('cards/" + 20 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("K2").style.cssText = "background-image:url('cards/" + 19 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("M1").style.cssText = "background-image:url('cards/" + 18 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("M2").style.cssText = "background-image:url('cards/" + 17 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("E1").style.cssText = "background-image:url('cards/" + 16 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("E2").style.cssText = "background-image:url('cards/" + 15 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("T1").style.cssText = "background-image:url('cards/" + 14 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("T2").style.cssText = "background-image:url('cards/" + 13 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("G1").style.cssText = "background-image:url('cards/" + 12 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("G2").style.cssText = "background-image:url('cards/" + 11 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("O1").style.cssText = "background-image:url('cards/" + 10 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("O2").style.cssText = "background-image:url('cards/" + 9 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("I1").style.cssText = "background-image:url('cards/" + 8 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
document.getElementById("I2").style.cssText = "background-image:url('cards/" + 7 + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"

 */


/* for (i = 0; i < cards_length; i++) {
    cards.sort((a, b) => 0.5 - Math.random());
    let del_card = cards.pop();
    new_cards.push(del_card);
    let cardX = document.querySelector('#pair' + i + 'card' + j);
    
    cardX.style.cssText = "background-image:url('cards/" + del_card + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"

} */


/* for(i=0; i<NUMBER_OF_PAIRS; i++) {
    let div_pair = document.createElement('div');
    div_pair.setAttribute('id', 'pair' + i);
    PARENT_ELEMENT.appendChild(div_pair);

    for(j=0;j<CARDS_IN_PAIR;j++) {
        let div_card = document.createElement('div');
        div_card.setAttribute('id', 'card' +j);
        div_pair.appendChild(div_card);
        let card0 = document.querySelector('#card0');
        let card1 = document.querySelector('#card1');
        card0.style.cssText = "background-image:url('cards/" + cards[j+i] + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"
        card1.style.cssText = "background-image:url('cards/" + cards[j+i] + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;"

    }

}
 */






/* class CardTrick {
    
    cards;
    divs;

    cardColors = [
        {
            name: 'Kreuz',
            prefix: 'kr'
        },
        {
            name: 'Herz',
            prefix: 'he'
        },
        {
            name: 'Pike',
            prefix: 'pi'
        },
        {
            name: 'Karo',
            prefix: 'ka'
        }
    ];

    cardFaces = [ '7', '8', '9', '10', 'B', 'D', 'K', 'A'];
    cardFaces = [
        {
            name:'7',
            code:'7'
        },
        {
            name: '8',
            code: '8'
        },
        {
            name: '9',
            code: '9'
        },
        {
            name: '10',
            code: '10'
        },
        {
            name: 'Bube',
            code: 'B'
        },
        {
            name: 'Dame',
            code: 'D'
        },
        {
            name: 'König',
            code: 'K'
        },
        {
            name: 'Ass',
            code: 'A'
        }
    ];

    numberOfPairs = 10;
    MAIN = document.getElementById("main");

    constructor() {
        this.divs = [];
        this.cards = [];
        this.setupCards();
        this.shuffle(this.cards);
    }

    setupCards() {
        let counter = 0;
        this.cardColors.forEach(color => {
            this.cardFaces.forEach(face => {
                const mycard = {
                    id: counter++,
                    color: color.name,
                    face: face,
                    name: color.prefix + '_' + face,
                    fullName: color.name + '_' + face
                }
            this.cards.push(mycard);
            });
        });
    }

    createDivs() {
        for (let i = 0; i < numberOfPairs; i++) {
            let mydiv = document.createElement('div');
            mydiv.setAttribute('div', 'div_' + i);
            MAIN.appendChild(mydiv);
            this.divs.push(mydiv);
        }
    }

    shuffle() {

    }

    placeCardPair() {
        this.divs.forEach(div => {
            div.innerHTML = this.cards.pop();
        });
    }

}

const AAA = new CardTrick();

 */







/* 
PARENT_EL = document.querySelector("#card_wrap")
CARDBOARD = document.querySelector(".cardboard")

var allCards = [];


function random(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

 */

/* for (i = 0; i < 27; i++) {
    el = document.createElement("div");
    el.setAttribute("class", "card" + i);
    PARENT_EL.appendChild(el);
    el.style.cssText = "background-image:url('cards/" + i + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;" ;
    allCards.push(el);
    console.log(i);
    console.log(allCards);
    
} 
 */


/* for(i=0;i<10; i++) {
    div_new = document.createElement("div");
    div_new.setAttribute("id", "pair" + i);
    PARENT_EL.appendChild(div_new);

    p1 = document.createElement("div");
    p1.setAttribute("id", "p1");
    div_new.appendChild(p1);

    p2 = document.createElement("div");
    p2.setAttribute("id", "p2");
    div_new.appendChild(p2);
}
 */


/* 
    for(j=0; j<10; j++) {
        x = document.getElementById("pair" +j);
        x.style.cssText = "border: 2px solid black; margin-left:20px; display: flex";
        for (i = 0; i < 27; i++) {
            x.querySelector("#p1").style.cssText = "background-image:url('cards/" + i + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;";
            x.querySelector("#p2").style.cssText = "background-image:url('cards/" + i + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;";
        }
    } */

   /*  random = Math.floor(Math.random() * (0 - 10 + 1)) + 10;
    console.log(random); */

/*     var names = ["Alf", "Ulf", "Max","Lachs", "Dax", "Schnacks", "Wax", "Hacks", "Tax", "Pax"];
    var newnames = []
    

    
    for (i=0; i<10; i++) {
        z = Math.floor(Math.random() * (0 - (names.length - i) + 1)) + (names.length - i); 
        delVal = names[z];
        names.splice(z,1);
        newnames.push(delVal);
        console.log(z);
        z--
        console.log(z);
    }
    console.log(z);
    console.log(names)
    console.log(newnames);

 */
/*   newnames.push(random);
    delete names[random];
    console.log(names[random.value]);
    console.log(names);
    console.log(names[random]);
    console.log(newnames); */

/* for (j = 0; j < 10; j++) {
    x = document.getElementById("pair" + j);
    for (i = 0; i < 27; i++) {
        x.querySelector("#p1").style.cssText = "background-image:url('cards/" + i + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;";
        x.querySelector("#p2").style.cssText = "background-image:url('cards/" + i + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;";
    }
} */














/* 
PARENT_EL = document.querySelector("#card_wrap")

for (i = 0; i < 3; i++) {
    el = document.createElement("div");

    el.setAttribute("class", "card" + i);
    PARENT_EL.appendChild(el);
    el.style.backgroundImage = "url('cards/" + i + ".png')";

} */





