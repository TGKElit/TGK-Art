let openess = sessionStorage.getItem('openess');
if (!openess){
  openess = "none";
}
filterMenu.style.display = openess;

function selectImage() {
    const selections = document.querySelectorAll('.gallerySection');
    for (const selected of selections) {
        selected.classList.toggle('selected');
    }
}

function openMenu() {
    const filterMenu = document.getElementById('filterMenu');
    if(filterMenu.style.display == "block") {
      filterMenu.style.display = "none";
      sessionStorage.setItem('openess', 'none');
    }
    else {
      filterMenu.style.display = "block";
      sessionStorage.setItem('openess', 'block');
    }
}

