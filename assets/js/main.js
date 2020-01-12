var main = (function() {
  //variables
  var uiStrings = {
    chooseT: "what",
    chooseW: "why",
    chooseH: "how"
  };

  //functions
  var addEvents, _checkContent;

  _checkContent = function(el) {
    var content = document.getElementById(el.id + "Content");

    if (content.classList.contains("open")) {
      content.classList.remove("open");
    } else {
      content.classList.add("open");
    }
  };

  addEvents = function() {
    var elT = document.getElementById(uiStrings.chooseT),
      elW = document.getElementById(uiStrings.chooseW),
      elH = document.getElementById(uiStrings.chooseH);

    elT.addEventListener("click", () => _checkContent(elT));
    elW.addEventListener("click", () => _checkContent(elW));
    elH.addEventListener("click", () => _checkContent(elH));
  };

  return {
    init: addEvents
  };
})();
