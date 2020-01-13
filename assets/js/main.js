var main = (function() {
  //variables
  var uiStrings = {
    navRecognizer: "clickableNav",
    chooseT: "what",
    chooseW: "why",
    chooseH: "how"
  };

  //functions
  var addEvents, _offsetAnchor, _checkContent;

  //nav
  _offsetAnchor = function() {
    if (location.hash.length !== 0) {
      window.scrollTo({
        top: window.scrollY - 60,
        left: window.scrollX,
        behavior: "smooth"
      });
    }
  };

  //cards
  _checkContent = function(el) {
    var content = document.getElementById(el.id + "Content");

    if (content.classList.contains("open")) {
      content.classList.remove("open");
      el.innerText = "Lees meer";
      el.style.width = "153px";
    } else {
      content.classList.add("open");
      el.innerText = "Lees minder";
      el.style.width = "171px";
    }

    console.log(el.html);
  };

  addEvents = function() {
    //nav
    var elArr = document.getElementsByClassName(uiStrings.navRecognizer);

    for (var i = 0; i < elArr.length; i++) {
      elArr[i].addEventListener("click", () => {
        window.setTimeout(function() {
          _offsetAnchor();
        }, 0);
      });
    }

    //cards
    var elT = document.getElementById(uiStrings.chooseT),
      elW = document.getElementById(uiStrings.chooseW),
      elH = document.getElementById(uiStrings.chooseH);

    elT.addEventListener("click", () => _checkContent(elT));
    elW.addEventListener("click", () => _checkContent(elW));
    elH.addEventListener("click", () => _checkContent(elH));
  };

  return {
    init: function() {
      addEvents();

      // Set the offset when entering page with hash present in the url
      window.setTimeout(_offsetAnchor, 0);
    }
  };
})();
