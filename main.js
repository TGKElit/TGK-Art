let animations = [
    "C7oHALwfX38",
    "p9gyoEpo4rg",
    "RpFTe5ZqLPg",
    "RXjjARXBsbs",
    "GZLuq2tiIjE",
    "4xYmU0OLeCU",
    "62cS9CMWygc",
    "MTNKILB_HqM",
    "2BhV87MNbtk",
    "tjWEaCB8mr4",
];

function changeFeature(id) {
    document.getElementById("feature").src="https://www.youtube.com/embed/" +  animations[id] + "?autoplay=1&mute=1&loop=1&playlist=" + animations[id];
}

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
    console.log("Helllo");
}