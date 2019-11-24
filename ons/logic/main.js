var selectSubject = (function() {
  //variables
  var uiStrings = {
    chooseW: "whyChoose",
    contentW: "whyContent",
    chooseH: "howChoose",
    contentH: "howContent",
    chooseT: "whatChoose",
    contentT: "whatContent"
  };

  //functions
  var addEvents, showContent;

  showContent = function(type) {
    var elW = document.getElementById(uiStrings.chooseW),
      elH = document.getElementById(uiStrings.chooseH),
      elT = document.getElementById(uiStrings.chooseT),
      contentW = document.getElementById(uiStrings.contentW),
      contentH = document.getElementById(uiStrings.contentH),
      contentT = document.getElementById(uiStrings.contentT);

    if (type == "why") {
      if (!contentW.classList.contains("active")) {
        //change active selectors
        elW.classList.add("active");

        contentH.classList.add("flyout");
        contentT.classList.add("flyout");

        setTimeout(() => {
          contentH.classList.remove("flyout");
          contentT.classList.remove("flyout");
          contentW.classList.add("active");
        }, 500);
      }
      //remove active selectors
      elH.classList.remove("active");
      elT.classList.remove("active");

      //change content
      contentH.classList.remove("active");
      contentT.classList.remove("active");
    } else if (type == "how") {
      if (!contentH.classList.contains("active")) {
        //change active selectors
        elH.classList.add("active");

        contentW.classList.add("flyout");
        contentT.classList.add("flyout");

        setTimeout(() => {
          contentW.classList.remove("flyout");
          contentT.classList.remove("flyout");
          contentH.classList.add("active");
        }, 500);
      }
      //remove active selectors
      elW.classList.remove("active");
      elT.classList.remove("active");

      //change content
      contentW.classList.remove("active");
      contentT.classList.remove("active");
    } else {
      //what

      if (!contentT.classList.contains("active")) {
        //change active selectors
        elT.classList.add("active");

        contentH.classList.add("flyout");
        contentW.classList.add("flyout");

        setTimeout(() => {
          contentH.classList.remove("flyout");
          contentW.classList.remove("flyout");
          contentT.classList.add("active");
        }, 500);
      }
      //remove active selectors
      elH.classList.remove("active");
      elW.classList.remove("active");

      //change content
      contentH.classList.remove("active");
      contentW.classList.remove("active");
    }
  };

  addEvents = function() {
    var elW = document.getElementById(uiStrings.chooseW),
      elH = document.getElementById(uiStrings.chooseH),
      elT = document.getElementById(uiStrings.chooseT);

    elW.addEventListener("click", () => showContent("why"));
    elH.addEventListener("click", () => showContent("how"));
    elT.addEventListener("click", () => showContent("what"));
  };

  return {
    init: addEvents,
    showContent: showContent
  };
})();
