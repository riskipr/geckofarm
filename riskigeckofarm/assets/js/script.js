document.querySelectorAll('.btnDetail').forEach(item=>{
    item.addEventListener('click', (e) => {
        let parent = e.target.parentNode.parentNode;

        let gambar = parent.querySelector('.card-img-top').src;
        let harga = parent.querySelector('.harga').innerHTML;
        let judul = parent.querySelector('.card-text').innerHTML;
        let deskripsi = parent.querySelector('.deskripsi')?parent.querySelector('.deskripsi').innerHTML:'<i>tidak ada</i>';

        let tombolModal = document.querySelector('.btnModal');
        tombolModal.click();

        document.querySelector('.modalTitle').innerHTML = judul;
        let image = document.createElement('img');
        image.src = gambar;
        image.classList.add('w-100');
        document.querySelector('.modalImage').innerHTML = '';
        document.querySelector('.modalImage').appendChild(image);
        document.querySelector('.modalDeskripsi').innerHTML = deskripsi;
        document.querySelector('.modalHarga').innerHTML = harga;

        const nohp = '6285155112315';
        const pesan = `https://api.whatsapp.com/send?phone=${nohp}&text=Hallo%20Riski%20Gecko%20Farm,%20Apakah%20Gecko%20ini%20masih%20ada?%20Kalo%20ada%20saya%20mau%20order%20${gambar}`;

        const btnBeli = document.querySelector('.btnBeli');
        btnBeli.href = pesan;
        btnBeli.target = '_blank';

    });
});