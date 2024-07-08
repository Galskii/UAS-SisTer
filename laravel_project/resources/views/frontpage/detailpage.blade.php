<x-home-layout>
          <body class="mb-10">
            <h2 class="text-center pt-10 text-4xl font-bold text-purple-800 mb-10">Villa Semeng Indah Pinggan</h2>
            <div class="flex">
                <img src="https://th.bing.com/th/id/OIP.pn3Es8TDraH7jeVMKzudMwAAAA?w=152&h=203&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Villa" class="bg-white w-1/3 mt-6 p-6 shadow-lg rounded-lg ml-auto mb-10"  style="max-height: 80vh;">
                  <div class="flex items-center mb-4 mt-2 text-justify mx-5">
                  </div>
                  <!-- Ticket Booking Section -->
                  <div class="bg-white p-6 max-w-md mx-auto mt-6 rounded-lg overflow-hidden mb-10" style="font-family:Arial, Helvetica, sans-serif">
                    <h1 class="font-bold text-green-500 mb-4 mt-2 text-justify mx-5">Sewa Villa Semeng Indah</h1>
                    <p class="font-bold mb-4 mt-2 text-justify mx-5">Status : <span class="text-green-500">Tersedia</span></p>
                    <p class="mb-4 mt-2 text-gray-700 text-justify mx-5">Villa Dipinggan adalah tempat peristirahatan yang menghadirkan pesona keindahan alam dan kenyamanan eksklusif di tepi perbukitan yang menakjubkan. Terletak dalam lingkungan yang tenteram dan alami, villa ini menyediakan akomodasi mewah dengan pemandangan luar biasa ke lembah yang memukau.</p>
                    <h3 class="py-2 text-md font-bold text-indigo-800 mb-4 mt-2 text-justify mx-5">Harga Sewa :</h3>
                    <ul class="list-disc list-inside py-2 text-md text-indigo-800 mb-4 mt-2 text-justify mx-5">
                        <li class="text-green-500 font-bold">Normal: Rp. 250.000</li>
                        <li class="text-green-500 font-bold">Special: Rp. 350.000</li>
                    </ul>
                    <div class="mb-5 mt-2 text-justify mx-5">
                        <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]">
                          Jumlah Kamar
                        </label>
                        <input
                          type="number"
                          name="guest"
                          id="guest"
                          placeholder="0"
                          min="0"
                          class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                    </div>
                  
                    <div class="mb-5 mt-2 text-justify mx-5">
                      <label class="mb-3 block text-base font-medium text-[#07074D]">
                        Kategori
                      </label>
                      <div class="flex items-center space-x-6">
                        <div class="flex items-center">
                          <input
                            type="radio"
                            name="radio1"
                            id="radioButton1"
                            class="h-5 w-5"
                            value="normal"
                          />
                          <label
                            for="radioButton1"
                            class="pl-3 text-base font-medium text-[#07074D]"
                          >
                            Normal
                          </label>
                        </div>
                        <div class="flex items-center">
                          <input
                            type="radio"
                            name="radio1"
                            id="radioButton2"
                            class="h-5 w-5"
                            value="special"
                          />
                          <label
                            for="radioButton2"
                            class="pl-3 text-base font-medium text-[#07074D]"
                          >
                            Special
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5 mt-2 text-justify mx-5">
                      <button class="rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none transition-transform transform hover:scale-105 hover:shadow-md">
                      Pesan
                    </button>
                      <button id="tombol-keranjang" class="rounded-md bg-[#41be6f] py-3 px-8 text-center text-base font-semibold text-white outline-none transition-transform transform hover:scale-105 hover:shadow-md" onclick="tambahKeKeranjang()">
                        Keranjang
                      </button>
                    </div>
                  </div>
            </div>

            <div id="keranjang" style="display: none; float: left; margin-left: 250px;" class="bg-white p-6 mx-auto mt-6 rounded-lg overflow-hidden mb-10 border-gray-300 ">
              <div class="flex items-center justify-center mb-4 ">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
              </div>
              <h2 class="font-bold text-2xl text-center mb-4 text-purple-800 ">Keranjang Belanja</h2>
              <div class="p-12 w-full my-8 border-t-2 border-gray-300 bg-gray-100">
              <ul id="item-keranjang" class="list-none p-0 font-bold text-justify">
                <!-- Item yang ditambahkan ke keranjang akan ditampilkan di sini -->
              </ul>
              <p class="mt-4 font-bold">Total Harga: <span id="total-harga" class="text-green-500 font-bold text-xl"></span></p>
              </div>
              <button class="bg-[#6A64F1] text-white border-0 py-2 px-4 mt-4 text-lg cursor-pointer rounded-lg outline-none transition-transform transform hover:scale-105 hover:shadow-md">Checkout</button>
            </div>

            <div id="review-container" class="flex items-center justify-center p-12 w-full my-8 border-t-2 border-gray-300 bg-gray-100">
                <!-- Author: FormBold Team -->
                <!-- Learn More: https://formbold.com -->
                <div class="mx-auto w-full max-w-[550px]">
                    <h1 class="text-center pt-10 text-4xl font-bold text-purple-800 mb-10">Review Pengguna</h1>
                  <form id="review-form" method="POST" class="mr-10">
                    <div class="-mx-3 flex flex-wrap">
                      <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                          <label
                            for="fName"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                          >
                            Nama Depan
                          </label>
                          <input
                            type="text"
                            name="fName"
                            id="fName"
                            placeholder="Nama Depan"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                          />
                        </div>
                      </div>
                      <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                          <label
                            for="lName"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                          >
                            Nama Belakang
                          </label>
                          <input
                            type="text"
                            name="lName"
                            id="lName"
                            placeholder="Nama Belakang"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                          />
                        </div>
                      </div>
                    </div>

                    <div class="mb-5">
                        <label
                          for="email"
                          class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                          Alamat Email
                        </label>
                        <input
                          type="email"
                          name="email"
                          id="email"
                          placeholder="contoh@domain.com"
                          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                      </div>
              
                    <div class="mb-5">
                        <label
                          for="message"
                          class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                          Review
                        </label>
                        <textarea
                          rows="4"
                          name="message"
                          id="message"
                          placeholder="Tuliskan Pesan"
                          class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        ></textarea>
                      </div>

                    <div>
                      <button
                        class="rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none transition-transform transform hover:scale-105 hover:shadow-md">
                        Kirim
                      </button>
                    </div>                   
                  </form>
                  <div id="review-display" class="mt-8"></div>
                </div>
              </div>

              <div id="review-container" class="flex flex-col items-center">
                <!-- Tempat ulasan ditampilkan -->
              </div>
              
              <form>
                <!-- Formulir untuk menambah ulasan -->
              </form>

              <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
              <script>
                      $(document).ready(function () {
                    let keranjangBelanja = [];
            
                    function tambahKeKeranjang() {
                        const kategori = $('input[name="radio1"]:checked').val();
                        const jumlahTiket = parseInt($('#guest').val());
                        let hargaTiket = 0;
            
                        if (kategori === "normal") {
                            hargaTiket = 250000;
                        } else if (kategori === "special") {
                            hargaTiket = 350000;
                        }
            
                        if (jumlahTiket > 0) {
                            keranjangBelanja.push({ kategori, harga: hargaTiket, jumlah: jumlahTiket });
                            tampilkanKeranjang();
                        } else {
                            alert("Jumlah tiket harus lebih dari 0.");
                        }
                    }
            
                    function tampilkanKeranjang() {
                        const keranjangDiv = $('#keranjang');
                        const itemKeranjangUl = $('#item-keranjang');
                        const totalHargaSpan = $('#total-harga');
            
                        if (keranjangBelanja.length > 0) {
                            keranjangDiv.show();
                            itemKeranjangUl.empty();
                            let totalHarga = 0;
            
                            $.each(keranjangBelanja, function (index, item) {
                                const li = $('<li></li>').text(`Kategori ${item.kategori} (${item.jumlah} Kamar) : Rp. ${item.harga * item.jumlah}`);
                                const btnHapus = $('<button class="text-red-500 mx-5">Hapus Pesanan</button>');

                                btnHapus.on('click', function () {
                                  hapusDariKeranjang(index);
                                });

                                li.append(btnHapus);
                                totalHarga += item.harga * item.jumlah;
                                itemKeranjangUl.append(li);
                            });
            
                            totalHargaSpan.text('Rp. ' + totalHarga);
                        } else {
                            keranjangDiv.hide();
                        }
                    }

                    function hapusDariKeranjang(index) {
                        keranjangBelanja.splice(index, 1);
                        tampilkanKeranjang();
                    }
            
                    $('#tombol-keranjang').on('click', function () {
                        tambahKeKeranjang();
                    });

                    const reviewContainer = $('#review-display');
                    const reviewForm = $('#review-form');

                    reviewForm.on('submit', function (event) {
                        event.preventDefault();

                        const firstName = $('#fName').val();
                        const lastName = $('#lName').val();
                        const email = $('#email').val();
                        const message = $('#message').val();

                        const reviewElement = $(`
                            <div class="bg-white my-4 border border-gray-300 rounded-lg hover:shadow-lg p-6 shadow-lg">
                                <h1 class="font-bold text-center mb-4 text-purple-800">Ulasan Pengguna</h1>
                                <h2 class="text-lg font-semibold">${firstName} ${lastName}</h2>
                                <p class="text-gray-600">${email}</p>
                                <p class="mt-5 font-bold">Review :</p>
                                <p>${message}</p>
                            </div>
                        `);

                        reviewContainer.append(reviewElement);

                        reviewForm[0].reset();
                    });
                });
                </script>
    </body>
</x-home-layout>