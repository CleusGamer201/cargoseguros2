function openLoginForm(){
  document.body.classList.add("showLoginForm");
  window.scroll(0, 0);
}
function closeLoginForm(){
  document.body.classList.remove("showLoginForm");
}

function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}