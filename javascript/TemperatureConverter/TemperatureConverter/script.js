const fahrenheit = document.getElementById("fahrenheit");
const celicius = document.getElementById("celicius");

loadAllEventslistener();

function loadAllEventslistener() {
  fahrenheit.addEventListener("keyup", fKeyUp);
  celicius.addEventListener("keyup", cKeyUp);
}

function fKeyUp() {
  const f = parseFloat(fahrenheit.value);
  const c = ((f - 32) * (5 / 9)).toFixed(5);
  celicius.value = c;

  const fah = document.getElementById("fah");
  fah.innerText = f;
  const cel = document.getElementById("cel");
  cel.innerText = c;
}

function cKeyUp() {
  const c = parseFloat(celicius.value);
  const f = ((c * 9) / 5 + 32).toFixed(5);
  fahrenheit.value = f;

  const fah = document.getElementById("fah");
  fah.innerText = f;
  const cel = document.getElementById("cel");
  cel.innerText = c;
}
