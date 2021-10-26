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

const sizes = {
  medium: ["https://www.youtube.com/embed/pQN-pnXPaVg"],
  short: ["https://www.youtube.com/embed/qz0aGYrrlhU"],
  long: ["https://www.youtube.com/embed/7mdEvKyLoYM"],
  all: [
    "https://www.youtube.com/embed/qz0aGYrrlhU",
    "https://www.youtube.com/embed/pQN-pnXPaVg",
    "https://www.youtube.com/embed/7mdEvKyLoYM",
  ],
};

function return_inner_html(youtube_link,i) {
  return `
    
      <div class="iframe">
        <iframe
          width="300"
          height="200"
          src="${youtube_link}"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
      <div class="input-checkbox">
        <input id="checkbox-${i}" type="checkbox" class="check-box" />
        <label class="checkbox" for="checkbox-${i}">Toggle</label>
      </div>

  `;
}

document.getElementById("duration").addEventListener("change", (event) => {
  let parent = document.getElementById("iframes");
  parent.innerHTML = "";
  let type = event.target.value;
  var i = 0;
  sizes[type].forEach((link) => {
    i+=1
    let element = document.createElement("div");
    element.className = "iframe-div";
    element.innerHTML = return_inner_html(link, i);
    parent.appendChild(element);
  });
});
