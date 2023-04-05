let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e) => {
    let arrowParent = e.target.parentElement.parentElement;
    arrowParent.classList.toggle("showMenu");
  });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

const items = document.querySelectorAll(".item");
document.getElementById("next").onclick = function () {
  document.getElementById("slide").appendChild(items[0]);
};
document.getElementById("prev").onclick = function () {
  document.getElementById("slide").prepend(items[items.length - 1]);
};
