const togglebutton =document.getElementsByClassName('toggle-button')[0]
const navbarlinks =document.getElementsByClassName('nav-list')[0]

togglebutton.addEventListener('click', () => {
    navbarlinks.classlist.toggle('active')
})