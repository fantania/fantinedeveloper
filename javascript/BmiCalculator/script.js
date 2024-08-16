const bmiForm = document.getElementById("bmi-form");
const cathegory = document.getElementById("cathegory");

bmiForm.addEventListener("submit", function(e) {
  const feet = parseFloat(document.getElementById("feet").value);
  let inches = parseFloat(document.getElementById("inches").value);
  const pounds = parseFloat(document.getElementById("pounds").value);

  inches = feet * 12 + inches;
  const res = ((pounds * 703) / inches ** 2).toFixed(1);
  document.getElementById("result").innerText = res;
  document.getElementById("result").style.display = "block";

  if (res < 18.5) {
    cathegory.className = "alert alert-danger";
    cathegory.innerText = "Below 18.5, Underweight";
  } else if (res >= 18.5 && res <= 24.9) {
    cathegory.className = "alert alert-primary";
    cathegory.innerText = "18.5 — 24.9, Normal";
  } else if (res >= 25 && res <= 29.9) {
    cathegory.className = "alert alert-warning";
    cathegory.innerText = "25.0 — 29.9, Overweight";
  } else {
    cathegory.className = "alert alert-danger";
    cathegory.innerText = "30.0 and Above, Obese";
  }

  e.preventDefault();
});
