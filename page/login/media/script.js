(function () {
  function hashChange() {
    try {
      if (window.location.hash) {
        if (document.querySelector(".content.active"))
          document.querySelector(".content.active").classList.remove("active");
        document
          .getElementById(window.location.hash.split("#")[1])
          .classList.add("active");
        console.log(`direction vers: ${window.location.hash}`);
      } else {
        document.querySelector(".default-link").classList.add("active");
        console.log(
          `Pas de window.location.hash existant, redirection vers: ${
            document.querySelector(".default-link").id
          }`
        );
      }
    } catch (error) {
      document.querySelector(".default-link").classList.add("active");
      console.log(
        `Erreur avec le window.location.hash, redirection vers: ${
          document.querySelector(".default-link").id
        }`
      );
      console.log(error);
    }
  }
  hashChange();

  window.addEventListener("hashchange", hashChange);
})();

function redirectTo(newHash) {
  window.location.hash = newHash;
}
