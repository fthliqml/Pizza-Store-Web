function showAllMenu() {
  $.getJSON("../data/pizza.json", function (data) {
    let menu = data.menu;
    // Foreach method -> for each data in menu, do something (function)
    $.each(menu, function (i, data) {
      // find element that have id 'daftar-menu' and append card
      $("#daftar-menu").append(
        `<div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <img src="./img/pizza/${data.gambar}" class="card-img-top" alt="pizza" />
                    <div class="card-body">
                      <h5 class="card-title">${data.nama}</h5>
                      <p class="card-text">${data.deskripsi}</p>
                      <h5 class="card-title">Rp. ${data.harga}</h5>
                      <a href="#" class="btn btn-dark mt-2">Pesan Sekarang</a>
                    </div>
                  </div>
              </div>`
      );
    });
  });
}

showAllMenu();

// find all element that contain class nav-link and give them click event with function
$(".nav-link").click(function (e) {
  $(".nav-link").removeClass("active");
  $(this).addClass("active");

  let kategori = $(this).html();
  $("#title").html(kategori);

  if (kategori == "All Menu") {
    showAllMenu();
    return;
  }

  $.getJSON("../data/pizza.json", function (data) {
    let menu = data.menu;
    let content = "";
    $.each(menu, function (i, data) {
      if (data.kategori == kategori.toLowerCase()) {
        content += `<div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="./img/pizza/${data.gambar}" class="card-img-top" alt="pizza" />
                <div class="card-body">
                    <h5 class="card-title">${data.nama}</h5>
                    <p class="card-text">${data.deskripsi}</p>
                    <h5 class="card-title">Rp. ${data.harga}</h5>
                    <a href="#" class="btn btn-dark mt-2">Pesan Sekarang</a>
                </div>
            </div>
        </div>`;
      }
      $("#daftar-menu").html(content);
    });
  });
});

console.log($(".nav-link").eq(4)); // return jQuery
console.log($(".nav-link")[4]); // return element
