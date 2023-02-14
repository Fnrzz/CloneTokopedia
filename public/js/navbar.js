const toggleKategori = document.getElementById("toggleKategori")
toggleKategori.addEventListener('mouseover', function(e) {
    const kategori = document.getElementById("kategori")
    kategori.classList.toggle("d-none")
})
