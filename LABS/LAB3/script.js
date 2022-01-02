function add() {
  var num1 = parseFloat(document.getElementById("num1").value);
  var num2 = parseFloat(document.getElementById("num2").value);
  document.getElementById("ans").value = num1 + num2;
}

function sub() {
  var num1 = parseFloat(document.getElementById("num1").value);
  var num2 = parseFloat(document.getElementById("num2").value);
  document.getElementById("ans").value = num1 - num2;
}

function mul() {
  var num1 = parseFloat(document.getElementById("num1").value);
  var num2 = parseFloat(document.getElementById("num2").value);
  document.getElementById("ans").value = num1 * num2;
}

function div() {
  var num1 = parseFloat(document.getElementById("num1").value);
  var num2 = parseFloat(document.getElementById("num2").value);
  document.getElementById("ans").value = num1 / num2;
}

function mod() {
  var num1 = parseFloat(document.getElementById("num1").value);
  var num2 = parseFloat(document.getElementById("num2").value);
  document.getElementById("ans").value = num1 % num2;
}

function reset() {
  var num1 = parseFloat(document.getElementById("num1").value);
  var num2 = parseFloat(document.getElementById("num2").value);
  document.getElementById("num1").value = "";
  document.getElementById("num2").value = "";
  document.getElementById("ans").value = "";
}
