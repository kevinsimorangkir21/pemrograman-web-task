document.getElementsByClassName("container").onclick = function () {
  var radioButtonGroup = document.getElementsByName("profesi");
  var checkedRadio = Array.from(radioButtonGroup).find(
    (radio) => radio.checked
  );
  alert("You have selected : " + checkedRadio.value);
};