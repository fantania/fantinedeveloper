const contactForm = document.getElementById("contact_form");

loadAllEventsListiner();

function loadAllEventsListiner() {
  contactForm.addEventListener("submit", submitForm);
}

function submitForm(e) {
  // Retrieving the values of form elements
  const f_name = document.getElementById("fName");
  const l_name = document.getElementById("lName");
  const email = document.getElementById("email");
  const phone = document.getElementById("pNumber");

  // Validate fname
  if (f_name == "") {
    showError("Please enter your First name");
  } /*else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(name) === false)
      showError("Please enter a valid First name");
  }*/

  // Validate lname
  if (l_name == "") {
    showError("Please enter your Last name");
  } /*else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(name) === false) showError("Please enter a valid Last name");
  }*/

  // Validate email address
  if (email == "") {
    showError("Please enter your email address");
  } /*else {
    // Regular expression for basic email validation
    var regex = /^\S+@\S+\.\S+$/;
    if (regex.test(email) === false)
      showError("Please enter a valid email address");
  }*/

  // Validate mobile number
  if (phone == "") {
    showError("Please enter your mobile number");
  } /*else {
    var regex = /^[1-9]\d{9}$/;
    if (regex.test(mobile) === false) {
      showError("Please enter a valid 10 digit mobile number");
    }
  }*/

  e.preventDefault();
}

function showError(error) {
  //Create a Div
  const errorDiv = document.createElement("div");

  // Get elements
  const card = document.querySelector("#contact");
  const heading = document.querySelector(".heading");

  // Add class
  errorDiv.className = "alert alert-danger";

  // Create text Node and append to div
  errorDiv.appendChild(document.createTextNode(error));

  //Insert error above heading
  card.insertBefore(errorDiv, heading);

  //Clear error after 3 seconds
  setTimeout(clearError, 10000);
}

function clearError() {
  document.querySelector(".alert").remove();
}
