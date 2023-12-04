const openMenuButton = document.getElementById('openMenuButton')
const closeMenuButton = document.getElementById('closeMenuButton')

const openAsideButton = document.getElementById('openAsideButton')
const closeAsideButton = document.getElementById('closeAsideButton')

const secondary = document.getElementById('secondary')
const menuContainer = document.getElementById('menu-container')

closeMenuButton.style.display = 'none'

function closeNavMenu() {
    menuContainer.style.display = 'none'
    openMenuButton.style.display = 'block'
    closeMenuButton.style.display = 'none'
}

function openNavMenu() {
    menuContainer.style.display = 'flex'
    closeMenuButton.style.display = 'block'
    openMenuButton.style.display = 'none'
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

function screenResize() {
    var windowWidth = window.innerWidth

    if (windowWidth >= 1024) {
        menuContainer.style.display = 'flex'
        openMenuButton.style.display = 'none'
    } else {
        menuContainer.style.display = 'none'
        openMenuButton.style.display = 'block'
    }
}

function handleResize() {
    closeNavMenu()
}

// function handleOutsideClick(event) {
//     if (!menuContainer.contains(event.target)) {
//         closeNavMenu()
//     }
// }

// document.addEventListener('click', handleOutsideClick)

window.addEventListener('resize', handleResize)

window.addEventListener('resize', screenResize)

screenResize()

openMenuButton.addEventListener('click', openNavMenu)
closeMenuButton.addEventListener('click', closeNavMenu)

if (openAsideButton && closeAsideButton) {
    openAsideButton.addEventListener('click', openAside)
    closeAsideButton.addEventListener('click', closeAside)
} else {
    console.error()
}
