const openMenuButton = document.getElementById('openMenuButton')
const closeMenuButton = document.getElementById('closeMenuButton')

const openAsideButton = document.getElementById('openAsideButton')
const closeAsideButton = document.getElementById('closeAsideButton')

const secondaryNavMenu = document.getElementById('secondary')
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
    secondaryNavMenu.style.display = 'block'
    closeAsideButton.style.display = 'block'
}

function closeAside() {
    openAsideButton.style.display = 'block'
    secondaryNavMenu.style.display = 'none'
    closeAsideButton.style.display = 'none'
}

function screenNavResize() {
    var windowWidth = window.innerWidth

    if (windowWidth >= 1024) {
        secondaryNavMenu.style.display = 'block'
        openAsideButton.style.display = 'none'
        menuContainer.style.display = 'flex'
        openMenuButton.style.display = 'none'
    } else {
        if (openAsideButton) {
            openAsideButton.style.display = 'block'
        }
        if (secondaryNavMenu) {
            secondaryNavMenu.style.display = 'none'
        }
        menuContainer.style.display = 'none'
        openMenuButton.style.display = 'block'
    }
}

function handleResize() {
    closeAside()
    closeNavMenu()
}

window.addEventListener('resize', handleResize)

window.addEventListener('resize', screenNavResize)

screenNavResize()

openMenuButton.addEventListener('click', openNavMenu)
closeMenuButton.addEventListener('click', closeNavMenu)

if (openAsideButton && closeAsideButton) {
    openAsideButton.addEventListener('click', openAside)
    closeAsideButton.addEventListener('click', closeAside)
} else {
    console.error()
}
