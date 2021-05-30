/**
 * Bla Bla, Kartentrick
 * Funktiniert wie folgt:
 * .....
 * ....
 * .....
 */

class CardTrick {

  cards;
  divs;

  cardColors = [
    {
      name: 'Kreuz',
      prefix: 'k'
    },
    {
      name: 'Herz',
      prefix: 'h'
    },
    {},
    {}
  ];

  cardFaces = ['7', ... , 'K', 'A'];
  cardFaces = [
    {
      name: '7',
      code: '7'
    },
    // ...
    {
      name: 'Ass',
      code: 'A'
    }
  ];

  numberOfPairs = 10;
  MAIN = document.getElementById('main');

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
          fullName: color.name + ' ' + face
          }
        this.cards.push(mycard);
      })
    });
  }

  isCardRed(card) {
    return card.color === 'Herz' || card.color === 'Karo';
  }

  /**
   * [createDivs description]
   * @return void
   */
  createDivs() {
    for(let i=0; i<numberOfPairs; i++) {
      let mydiv = document.createElement('div');
      mydiv.setAttribute('id', 'div_' + i);
      MAIN.appendChild(mydiv);
      this.divs.push(mydiv);
    }
  }

  shuffle(a) {

  }

  /**
   * [placeCardPair description]
   * @return void
   */
  placeCardPair() {
    this.divs.forEach(div => {
      div.innerHTML = this.cards.pop();
    });
  }



}


const AAA = new CardTrick();
const BBB = new CardTrick();












//

k_7.png
k_A.png
h_k.png
