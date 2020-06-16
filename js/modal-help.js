//modal popup window
var modalHelp = document.getElementById("modal-help");
var helpBtn = document.getElementById("helpBtn");
var helpSpan = document.getElementsByClassName("close-help")[0];

helpBtn.onclick = function() {
  modalHelp.style.display = "block";
}

helpSpan.onclick = function() {
  modalHelp.style.display = "none";
}

window.addEventListener("click", function(event) {
  if (event.target == modalHelp) {
    modalHelp.style.display = "none";
  }
});

//popup window content
function toggleButton() {
  var x = document.getElementById("toggleForm");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
