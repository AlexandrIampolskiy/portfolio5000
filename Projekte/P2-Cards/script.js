
PARENT_EL = document.querySelector("#card_wrap")
CARDBOARD = document.querySelector(".cardboard")

var allCards = [];


function random(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}



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
for(i=0;i<10; i++) {
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




    for(j=0; j<10; j++) {
        x = document.getElementById("pair" +j);
        x.style.cssText = "border: 2px solid black; margin-left:20px; display: flex";
        for (i = 0; i < 27; i++) {
            x.querySelector("#p1").style.cssText = "background-image:url('cards/" + i + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;";
            x.querySelector("#p2").style.cssText = "background-image:url('cards/" + i + ".png'); width: 150px; height: 300px; background-repeat: no-repeat; background-size: 85%;";
        }
    }
        
        




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





