const courses = ["AJAX", "JAVA", "JAVASCRIPT", "HTML", "CSS", "PYTHON"];

function create_card(course) {
  let div = document.createElement("div");
  div.className = "card";
  div.style.background = "url(src/logos/" + course + ".png)";
  div.style.backgroundSize = "150px";
  div.id = course.toLowerCase();
  div.addEventListener("click", (event) => {
    window.location.href = "pages/" + event.target.id + ".php";
  });
  return div;
}

function filter_search(word) {
  word = word.toUpperCase();
  let len = word.length;
  let list = [];
  courses.forEach((course) => {
    if (course.substring(0, len) === word) list.push(course);
  });
  return list;
}

var input = document.getElementById("search-bar");
input.addEventListener("input", (event) => {
  let list;
  if (event.target.value === "") list = courses;
  else list = filter_search(event.target.value);
  let div = document.getElementById("courses");
  div.innerHTML = "";
  list.forEach((course) => {
    div.appendChild(create_card(course));
  });
});

let div = document.getElementById("courses");
div.innerHTML = "";
courses.forEach((course) => {
  div.appendChild(create_card(course));
});
