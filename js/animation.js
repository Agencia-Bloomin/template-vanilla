async function runAnimations() {
    const animationsDomLoaded = document.addEventListener('DOMContentLoaded', () => {
        //=================================================== Animations ===========================================================
        let sections = document.querySelectorAll('section'); //Aqui está aplicando a animação somente nas sections, ajustar conforme necessário
        if (sections) {
            function getOffsetTop(element) {
                let offsetTop = 0;
                while (element) {
                    offsetTop += element.offsetTop;
                    element = element.offsetParent;
                }
                return offsetTop;
            }

            window.onscroll = () => {
                sections.forEach(sec => { //animations
                    let top = window.scrollY;
                    let offset = sec.offsetTop - 300;
                    let height = sec.offsetHeight;

                    if (top >= offset && top < offset + height) {
                        sec.classList.add('show-animate'); //ajustar animação pelo css
                    }
                });
            }
        }


    })
} runAnimations()