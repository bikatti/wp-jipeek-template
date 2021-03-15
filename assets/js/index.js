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

let ipad = window.matchMedia('screen and (min-width: 100px)')

let tags = document.getElementById('tagsModal')
let category = document.getElementById('categoryModal')
let tagsModal = document.getElementById('tagsModalShow')
let categoriesModal = document.getElementById('categoryModalShow')
let shut1 = document.getElementById('shutOne')
let shut2 = document.getElementById('shutTwo')
let theBody = document.getElementById('theBody')

let modalBlur = document.getElementById('glass')

ipad.addListener(validation)

function validation(event) {
    if (event.matches) {
        tags.addEventListener('click', hideShow)
        category.addEventListener('click', hideShowTwo)
        shut1.addEventListener('click', hideShow)
        shut2.addEventListener('click', hideShowTwo)
    }
    else {
        tags.removeEventListener('click', hideShow)
        category.removeEventListener('click', hideShowTwo)
    }
}

validation(ipad)

function hideShow() {
    if (tagsModal.classList.contains('-show')) {
        tagsModal.classList.remove('-show')
        modalBlur.classList.remove('-show')
        console.log(`Si sirvo`)
        theBody.style.cssText = ''
    } else {
        tagsModal.classList.add('-show')
        modalBlur.classList.add('-show')
        theBody.style.overflow = 'hidden'
    }
}

function hideShowTwo() {
  if (categoriesModal.classList.contains('-show')) {
      categoriesModal.classList.remove('-show')
      modalBlur.classList.remove('-show')
      console.log(`Si sirvo`)
      theBody.style.cssText = ''
  } else {
      categoriesModal.classList.add('-show')
      modalBlur.classList.add('-show')
      theBody.style.overflow = 'hidden'
  }
}