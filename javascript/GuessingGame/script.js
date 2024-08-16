const loanForm = document.getElementById("loan-form");
const numberOfGuess = document.getElementById("numberOfGuess");
const numberEntered = document.getElementById("numberEntered");
let numberOfGuess1 = 0;
let randomNumber = Math.floor(Math.random() * 20) + 1;

loadAllEventsListiner();

function loadAllEventsListiner() {
  loanForm.addEventListener("submit", function(e) {
    numberOfGuess1++;
    numberOfGuess.innerText = numberOfGuess1;
    calculate();
    e.preventDefault();
  });
}

/*
function submitForm(e) {
  calculate();
  e.preventDefault();
}*/

function calculate() {
  showError();
}

function showError() {
  numberEnteredValue = parseInt(numberEntered.value);
  console.log(numberEnteredValue);
  //Create a Div
  const errorDiv = document.createElement("div");
  // Get elements
  const card = document.querySelector(".card");
  const heading = document.querySelector(".heading");

  if (
    !isFinite(numberEnteredValue) ||
    numberEnteredValue < 0 ||
    numberEnteredValue > 20
  ) {
    // Add class
    errorDiv.className = "alert alert-danger";

    // Create text Node and append to div
    errorDiv.appendChild(
      document.createTextNode("Please enter a number between 1 and 20")
    );
  } else if (numberEnteredValue < randomNumber) {
    // Add class
    errorDiv.className = "alert alert-danger";

    // Create text Node and append to div
    errorDiv.appendChild(
      document.createTextNode(
        "The number you entered is less than the guessing number"
      )
    );
  } else if (numberEnteredValue > randomNumber) {
    // Add class
    errorDiv.className = "alert alert-danger";

    // Create text Node and append to div
    errorDiv.appendChild(
      document.createTextNode(
        "The number you entered is greater than the guessing number"
      )
    );
  } else {
    // Add class
    errorDiv.className = "alert alert-success";

    // Create text Node and append to div
    errorDiv.appendChild(
      document.createTextNode("Congratulations you have guessed the number")
    );
  }
  //Insert error above heading
  card.insertBefore(errorDiv, heading);

  //Clear error after 3 seconds
  setTimeout(clearError, 10000);
}

function clearError() {
  document.querySelector(".alert").remove();
}

console.log("The random number: " + randomNumber);
