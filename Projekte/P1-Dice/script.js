
  const RESULT1 = document.getElementById("n1");
  const RESULT2 = document.getElementById("n2");
  const RESULT3 = document.getElementById("n3");

  function rollDice() {

  var d1 = Math.floor(Math.random()*6+1);
  var d2 = Math.floor(Math.random()*6+1);
  var d3 = Math.floor(Math.random()*6+1);

  console.log(d1, d2, d3);
  

  RESULT1.style.backgroundImage = "url(img/" + d1 + ".png)";
  RESULT2.style.backgroundImage = "url(img/" + d2 + ".png)";
  RESULT3.style.backgroundImage = "url(img/" + d3 + ".png)";

  document.querySelector(".result").innerHTML = " Sie haben <strong>" + (d1 + d2 + d3) + "</strong> Punkte";
};
