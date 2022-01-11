const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});
// -------------------------------------
let InputsValues = {
  email: "",
  password: "",
  password2: "",
};

function handleOnChangeInputField(element) {
  InputsValues[element.name] = element.value;
  if (InputsValues[element.name].length < 8) {
    document.querySelector(`.${element.name}message`).innerHTML =
      "should be 8 characters at least ";
  } else {
    document.querySelector(`.${element.name}message`).innerHTML = "";
  }
  if (
    element.value !== InputsValues["password"] &&
    element.name == "password2"
  ) {
    document.querySelector(`.${element.name}message`).innerHTML =
      "passwords should match each other ";
  }
  if (
    !String(InputsValues["email"])
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      ) &&
    element.name == "email"
  ) {
    document.querySelector(`.${element.name}message`).innerHTML =
      "not valid email ";
  }

  if (
    document.querySelector(".password2message").innerHTML == "" &&
    document.querySelector(".emailmessage").innerHTML == "" &&
    document.querySelector(".passwordmessage").innerHTML == "" &&
    InputsValues["password"] != "" &&
    InputsValues["password2"] != ""
  ) {
    document.querySelector(".signUpBtn").disabled = false;
  }
}
