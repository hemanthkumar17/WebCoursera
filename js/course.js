document.body.addEventListener("click", function (e) {
  const nestedLinkParentElement = e.target.closest(".js-nested-link");

  if (nestedLinkParentElement && e.target.tagName !== "A") {
    const nestedLinkElement = nestedLinkParentElement.querySelector("a");
    const selection = window.getSelection().toString(); // Contains content when user is selecting/highlighting text

    if (!nestedLinkElement || selection) {
      return;
    }

    e.preventDefault();
    nestedLinkElement.click();
  }
});

const sizes = ["small", "medium", "large"];

function filter_search(word) {
  word = word.toUpperCase();
  if (w[0].toUpperCase == "S") {
    //
  } else if (w[0].toUpperCase == "M") {
    //
  } else if (w[0].toUpperCase == "L") {
    //
  }
}

var input = document.getElementById("search-bar");
input.addEventListener("input", (event) => {
  if (event.target.value === "") list = courses;
  else list = filter_search(event.target.value);
  let div = document.getElementById("courses");
  div.innerHTML = "";
  list.forEach((course) => {
    div.appendChild(create_card(course));
  });
});
