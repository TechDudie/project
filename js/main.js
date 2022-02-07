var code = "";
const regex = new RegExp('^[0-9]{6}$');

function print(input) {
  //
}

function send(input) {
  //
}

document.addEventListener("keydown",  e => {
  if (e.keyCode === 8)  {
    if (code == "") {
      e.preventDefault();
    } else {
      code = code.slice(0, -1);
  } else if (e.keyCode === 13)  {
    if (regex.test(code)) {
      send(code);
    } else {
      print("Invalid game code. Try again.");
      code = "";
    }
  } else {
    code += String.fromCharCode(e.keyCode);
  }
});
