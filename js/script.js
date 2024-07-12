//============================================Go to the top==============================================
async function runGoTop() {
    var goTopDomLoaded = await document.addEventListener('DOMContentLoaded', () => {
        const goTopBtn = document.querySelector('.go-top-btn');

        if (goTopBtn) {

            function checkHeight() {
                if (window.scrollY > 200) {
                    goTopBtn.style.display = "block";
                } else {
                    goTopBtn.style.display = "none";
                }
            }

            window.addEventListener('scroll', checkHeight);

            goTopBtn.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                })
            })
        }
    })
}
runGoTop()

//======================================WhatsApp BTN Form==========================================
async function runMeuZap() {
    const zapDomLoaded = await document.addEventListener('DOMContentLoaded', () => {
        const meuZapBtn = document.getElementById('meuZap');
        if (meuZapBtn) {
            const telefone = meuZapBtn.dataset.zap;

            function meuZap() {
                const form = document.querySelector('form');
                const name = form.querySelector('input[name=name]');
                const email = form.querySelector('input[name=email]');
                const message = form.querySelector('textarea[name=message]');

                if (name.value != '', email.value != '', message.value != '') {
                    console.log(name, email, message, 'aqui');
                    console.log(message.value);
                    const href = `${telefone}&text=Olá, estou entrando em contato através do site. Me chamo ${name.value}, meu E-mail é ${email.value}, *${message.value}*`;
                    return window.open(href, '_blank')
                }
                return window.alert('Preencha os campos do formulário')
            }
            meuZapBtn.addEventListener("click", meuZap)
        }
    })
}
runMeuZap()

//======================================ACCORDION==========================================
async function runAccordion() {
    const accordionDomLoaded = document.addEventListener('DOMContentLoaded', () => {

        const accordionExist = document.querySelector('.accordion')

        if (accordionExist) {
            const items = document.querySelectorAll(".accordion button");

            function toggleAccordion() {
                const itemToggle = this.getAttribute('aria-expanded');

                for (i = 0; i < items.length; i++) {
                    items[i].setAttribute('aria-expanded', 'false');
                }

                if (itemToggle == 'false') {
                    this.setAttribute('aria-expanded', 'true');
                }
            }
            items.forEach(item => item.addEventListener('click', toggleAccordion));
        }

    })
}
runAccordion()

// ========== Leia Mais BTN =========
document.addEventListener("DOMContentLoaded", function() {
    var buttons = document.querySelectorAll(".toggleButton");

    buttons.forEach(function(button) {
        button.addEventListener("click", function() {
            var targetId = this.getAttribute('data-target');
            var moreText = document.getElementById(targetId);

            if (moreText.style.display === "none" || moreText.style.display === "") {
                moreText.style.display = "block";
                this.innerHTML = "Leia menos";
            } else {
                moreText.style.display = "none";
                this.innerHTML = "Leia mais";
            }
        });
    });
});


// ========== JS services Tabs =========
const tabList = document.getElementById('myTab');
const tabContent = document.querySelector('.tab-content');

tabList.addEventListener('click', handleTabClick);

function handleTabClick(event) {
  // Check if clicked element is a tab
  if (!event.target.classList.contains('nav-link')) return;

  // Get the clicked tab element
  const clickedTab = event.target;

  // Remove active class from all tabs and content panels
  const tabs = tabList.querySelectorAll('.nav-link');
  const contentPanels = tabContent.querySelectorAll('.tab-pane');
  tabs.forEach(tab => tab.classList.remove('active'));
  contentPanels.forEach(panel => panel.classList.remove('active'));

  // Add active class to the clicked tab and its corresponding content panel
  clickedTab.classList.add('active');
  const clickedTabId = clickedTab.id.replace('tabs', 'tab');
  document.getElementById(clickedTabId).classList.add('active');
}