// Etiqueta
let tags = document.getElementById("tagsModal")
let tagsModal = document.getElementById("tagsModalShow")

// Categoría
let category = document.getElementById('categoryModal')
let categoriesModal = document.getElementById('categoryModalShow')

// Burger
let burgerIcon = document.getElementById('burgerIcon')
let burgerMenu = document.getElementById('burgerMenu')

let close = document.getElementsByClassName("m-modal__close")
let clickModal = [tagsModal, categoriesModal, burgerMenu]

let modalBlur = document.getElementById('glass')


modalsOpen(tags, tagsModal)
modalsOpen(category, categoriesModal)
modalsOpen(burgerIcon, burgerMenu)

function modalsOpen(modalClick, modalShow) {
    modalClick.onclick = () => {
        modalShow.classList.add('-show')
        modalBlur.classList.add('-show')
        theBody.style.overflow = 'hidden'
    }
}

function modalsClose(modalClose) {
    modalClose.classList.remove('-show')
    modalBlur.classList.remove('-show')
    theBody.style.cssText = ''
}


for (i = 0; i < close.length; i++) {
    close[i].onclick = () => {
        if (tagsModal.classList.contains('-show')) {
            modalsClose(tagsModal)
        } else if (categoriesModal.classList.contains('-show')) {
            modalsClose(categoriesModal)
        } else if (burgerMenu.classList.contains('-show')) {
            modalsClose(burgerMenu)
        } else {
            console.log('Jejeje tú eres nuevo')
        }
    }
}

window.onclick = (event) => {
    clickModal.forEach((element) => {
        if (event.target == element) {
            element.classList.remove('-show')
            modalBlur.classList.remove('-show')
            theBody.style.cssText = ''
        }
    })
}

// Scroll menu
window.onscroll = () => stickyMenu()

let header = document.getElementById("headerSticky")

function stickyMenu() {
  // window.pageYOffset > sticky
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    header.classList.add("-headerFixed")
  } else {
    header.classList.remove("-headerFixed")
  }
}

console.log(`
  💚 Desarrollado por Bikatti
  ✨ Puedes ver más de mí en https://bikatti.com
  🙌 También puedes ir a https://github.com/bikatti
  
`)