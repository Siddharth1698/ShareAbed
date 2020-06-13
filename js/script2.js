let btnadd = document.querySelector("#sum");
let btnsubtract = document.querySelector("#minus");
let inp = document.querySelector("input");

btnadd.addEventListener("click", () => {
  inp.value = parseInt(inp.value) + 1;
});

btnsubtract.addEventListener("click", () => {
  if (inp.value > 0) {
    inp.value = parseInt(inp.value) - 1;
  } else {
    inp.value = parseInt(inp.value) = 0;
  }
});
