function selectImage() {
    const selections = document.querySelectorAll('.gallerySection');

    for (const selected of selections) {
        if (selected.classList.contains('selected')) {
            selected.classList.remove('selected');
        } else {
            selected.classList.add('selected');
        }
    }

}

function openMenu() {
    const filterMenu = document.getElementById('filterMenu');    
    if(filterMenu.style.display == "block") {
      filterMenu.style.display = "none";
    }
    else { 
      filterMenu.style.display = "block";
    }
}