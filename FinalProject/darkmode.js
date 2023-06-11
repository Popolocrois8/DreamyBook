var popupmenu = document.querySelector(".popup"); //to change height

function popupMenu() {
    popupmenu.classList.toggle("popup-height");
}

const darkmode= document.getElementById('darktoggle');
const root = document.documentElement; //instead of body use root

darkmode.addEventListener('change', function() {
    if (this.checked) {
        root.classList.add('darktheme'); // apply dark mode styles
    } else {
        root.classList.remove('darktheme'); // remove dark mode styles
    }
});