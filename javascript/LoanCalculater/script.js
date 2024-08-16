const loanForm = document.getElementById("loan-form");
const option1 = document.getElementById("option1");
const option2 = document.getElementById("option2");
const yearMonth = document.getElementById("yearMonth");
let isMonthYear = 0;

loadAllEventsListiner();

function loadAllEventsListiner() {
  loanForm.addEventListener("submit", function(e) {
    //Hide results
    document.getElementById("results").style.display = "none";

    //Show loading
    document.getElementById("loading").style.display = "block";
    setTimeout(calculate, 2000);

    e.preventDefault();
  });
  option1.addEventListener("click", yearsValue);
  option2.addEventListener("click", monthsValue);
}

function yearsValue() {
  yearMonth.innerText = "Years";
  isMonthYear = 0;
}

function monthsValue() {
  yearMonth.innerText = "Months";
  isMonthYear = 1;
}

/*
function submitForm(e) {
  calculate();
  e.preventDefault();
}*/

function calculate() {
  const amount = parseFloat(document.getElementById("amount").value);
  const interest = parseFloat(document.getElementById("interest").value);
  const months = parseFloat(document.getElementById("months").value);
  const monthlyPayment = document.getElementById("monthly-payment");
  const totalPayment = document.getElementById("total-payment");
  const totalInterest = document.getElementById("total-interest");

  let paymentLenght, rate;

  if (isMonthYear === 0) {
    paymentLenght = parseInt(months * 12);
  } else {
    paymentLenght = months;
  }

  rate = parseFloat(interest / 100 / 12);

  const firstPart = parseFloat((1 + rate) ** paymentLenght);

  const numerator = firstPart * rate * amount;

  const denominator = firstPart - 1;

  const mpt = (numerator / denominator).toFixed(2);

  if (isFinite(mpt)) {
    monthlyPayment.value = mpt;

    totalPayment.value = ((numerator / denominator) * paymentLenght).toFixed(2);

    totalInterest.value = (
      (numerator / denominator) * paymentLenght -
      amount
    ).toFixed(2);

    //Show results
    document.getElementById("results").style.display = "block";

    //Hide loading
    document.getElementById("loading").style.display = "none";
  } else {
    showError("Please check your numbers");
  }
}

function showError(error) {
  //Hide results
  document.getElementById("results").style.display = "none";

  //Hide loading
  document.getElementById("loading").style.display = "none";

  //Create a Div
  const errorDiv = document.createElement("div");

  // Get elements
  const card = document.querySelector(".card");
  const heading = document.querySelector(".heading");

  // Add class
  errorDiv.className = "alert alert-danger";

  // Create text Node and append to div
  errorDiv.appendChild(document.createTextNode(error));

  //Insert error above heading
  card.insertBefore(errorDiv, heading);

  //Clear error after 3 seconds
  setTimeout(clearError, 3000);
}

function clearError() {
  document.querySelector(".alert").remove();
}
