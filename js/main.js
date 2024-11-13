window.onscroll = function () {
  const button = document.getElementById("back-to-top");
  if (window.scrollY > 100) {
    button.style.display = "block";
  } else {
    button.style.display = "none";
  }
};
