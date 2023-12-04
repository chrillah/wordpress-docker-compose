const openMenuButton = document.getElementById('openMenuButton')
const closeMenuButton = document.getElementById('closeMenuButton')

const openAsideButton = document.getElementById('openAsideButton')
const closeAsideButton = document.getElementById('closeAsideButton')

const secondary = document.getElementById('secondary')

closeMenuButton.style.display = 'none'

function closeNavMenu() {
    var element = document.querySelector('.nav-open')
    openMenuButton.style.display = 'block'
    closeMenuButton.style.display = 'none'
    if (element.classList.contains('nav-open')) {
        element.classList.remove('nav-open')
        element.classList.add('nav-close')
    }
}

function openNavMenu() {
    var element = document.querySelector('.nav-close')
    closeMenuButton.style.display = 'block'
    openMenuButton.style.display = 'none'
    if (element.classList.contains('nav-close')) {
        element.classList.remove('nav-close')
        element.classList.add('nav-open')
    }
}

function openAside() {
    openAsideButton.style.display = 'none'
    secondary.style.display = 'block'
    closeAsideButton.style.display = 'block'
}

function closeAside() {
    openAsideButton.style.display = 'block'
    secondary.style.display = 'none'
    closeAsideButton.style.display = 'none'
}

openMenuButton.addEventListener('click', openNavMenu)
closeMenuButton.addEventListener('click', closeNavMenu)

openAsideButton.addEventListener('click', openAside)
closeAsideButton.addEventListener('click', closeAside)
