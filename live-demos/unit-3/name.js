const form = document.getElementById("form-name");
// const form2 = document.querySelector("body form#form-name")

if (form !== null) {
  // listen for submission
  // form.addEventListener("submit", function(e){
  //
  // })

  form.addEventListener("submit", handleFormSubmission);
  function handleFormSubmission(e) {
    e.preventDefault();
    console.log(e);
    // e.stopPropagation();

    // const formTarget = e.target;
    // capture the name of the user
    const inputName = document.getElementById("name");
    if (inputName) {
      saveUsername(inputName.value);
      displayUsername();
      hideForm();
    }
  }
}

const saveUsername = username => {
  localStorage.setItem("username", username);
}

const displayUsername = () => {
  const h1 = document.getElementById("welcome-heading");

  if (!h1) {
    return null;
  }

  h1.innerText = "Welcome back, " + localStorage.getItem("username");
}

const hideForm = () => {
  const formContainer = document.getElementById("form-container");
  if (!formContainer) return null;

  formContainer.setAttribute("hidden", "hidden");
  // formContainer.display = "none";
}

const checkIfUserIsReturning = () => {
  if (localStorage.getItem('username')) {
    displayUsername();
    hideForm();
  }
}
checkIfUserIsReturning();