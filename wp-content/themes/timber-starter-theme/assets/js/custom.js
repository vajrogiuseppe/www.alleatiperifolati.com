document.addEventListener('DOMContentLoaded', function () {
    var elements = document.querySelectorAll('.navbar-toggler, .collapsed');

    elements.forEach(function (element) {
        element.addEventListener('click', function () {
            if (element.classList.contains('collapsed')) {
                element.classList.remove('collapsed');
                element.classList.add('red');
            } else {
                element.classList.add('collapsed');
                element.classList.remove('red');
            }
        });
    });
});



const clearInput = () => {
    const input = document.getElementsByTagName("input")[0];
    input.value = "";
  }
  
  const clearBtn = document.getElementById("clear-btn");
  clearBtn.addEventListener("click", clearInput);
  



