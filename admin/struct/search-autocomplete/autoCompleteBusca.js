async function runAutoComplete() {
  const domLoaded = await domContentLoaded.getPromise();
  if (domLoaded) {

    var input = document.querySelectorAll("#mySearch");
    var lista = document.querySelectorAll("#search");

    var retornoBusca = true;

    if (input && lista) {

      function searchExec(i) {
        // console.log(i);
        input = input[i];
        lista = lista[i];


        input.addEventListener("keyup", function () {

          var valor = this.value.toLowerCase();


          var opcoesFiltradas = items.filter(function (item) {
            return item.toLowerCase().includes(valor);
          });

          lista.innerHTML = "";

          opcoesFiltradas.forEach(function (item) {
            var itemList = document.createElement("li");
            itemList.textContent = item;
            itemList.addEventListener("click", function () {
              input.value = item;
              lista.style.display = "none";
              lista.nextElementSibling.click();
            });
            lista.appendChild(itemList);
          });


          if (valor.length > 0 && retornoBusca) {
            lista.style.display = "block";
            if (window.innerWidth < 768) {
              lista.style.width = 70 + "%";
            } else {
              lista.style.width = 95 + "%";
            }
            lista.style.top = input.offsetTop + input.offsetHeight + "px";
            lista.style.left = 50 + "%";
            lista.style.transform = "translateX(-50%)";
            lista.style.border = 1 + "px" + " solid " + "#fd7706";
          } else {
            lista.style.display = "none";
          }
        });
        document.addEventListener("click", function (event) {
          if (event.target !== input && event.target !== lista) {
            lista.style.display = "none";
          }
        });
      }

      input.forEach((el, ind) => {
        el.removeEventListener('click', searchExec.bind(null, ind))
        el.addEventListener('click', searchExec.bind(null, ind), { once: true })
      })
    }


  }
} runAutoComplete()



function showBuscar(e) {
  e.nextElementSibling.classList.toggle('show-carty')
}