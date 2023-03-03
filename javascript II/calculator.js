function getFirstValue() {
  var inputFirstValue = document.getElementById("first-number").value;
  return inputFirstValue;
}
function getSecondValue() {
  var inputSecondValue = document.getElementById("second-number").value;
  return inputSecondValue;
}

function displayValue(event) {
  var selectedEvent = event.id;
  console.log(selectedEvent)
  var firstNumber = Number(getFirstValue());
  var secondNumber = Number(getSecondValue());
  if (selectedEvent === "add") {
    var res = firstNumber + secondNumber;
    document.getElementById("result").value = res;
  } else if (selectedEvent === "subtract") {
    var res = firstNumber - secondNumber;
    document.getElementById("result").value = res;
  } else if (selectedEvent === "multiply") {
    var res = firstNumber * secondNumber;
    document.getElementById("result").value = res;
  } else {
    var res = firstNumber / secondNumber;
    document.getElementById("result").value = res;
  }
}

function clearInput(input){
    input.value='';
}
