//modal popup window
var modalSubscribe = document.getElementById("modal-subscribe");
var subscribeBtn = document.getElementById("subscribeBtn");
var subscribeExit = document.getElementsByClassName("close-subscribe")[0];

subscribeBtn.onclick = function() {
  modalSubscribe.style.display = "block";
}

subscribeExit.onclick = function() {
  modalSubscribe.style.display = "none";
}

window.addEventListener("click", function(event) {
  if (event.target == modalSubscribe) {
    modalSubscribe.style.display = "none";
  }
});
