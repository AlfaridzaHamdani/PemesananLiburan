document.addEventListener("DOMContentLoaded", function () {
  // Referensi ke elemen form
  const form = document.getElementById("orderForm");
  const daysInput = document.getElementById("days");
  const participantsInput = document.getElementById("participants");
  const accommodationInput = document.getElementById("accommodation");
  const transportationInput = document.getElementById("transportation");
  const foodInput = document.getElementById("food");
  const totalInput = document.getElementById("total");

  // Harga tetap
  const accommodationPrice = 1000000;
  const transportationPrice = 1200000;
  const foodPrice = 500000;

  // Fungsi untuk menghitung total harga
  function calculateTotal() {
    const days = parseInt(daysInput.value) || 0;
    const participants = parseInt(participantsInput.value) || 0;
    let total = 0;

    if (accommodationInput.checked) {
      total += accommodationPrice * days;
    }

    if (transportationInput.checked) {
      total += transportationPrice * participants;
    }

    if (foodInput.checked) {
      total += foodPrice * participants * days;
    }

    totalInput.value = "Rp " + total.toLocaleString();
  }

  // Panggil fungsi ini saat halaman pertama kali dimuat
  calculateTotal();

  // Event listener untuk perubahan pada form
  form.addEventListener("input", calculateTotal);
});

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("orderForm");
  const alertContainer = document.getElementById("alert-container");

  form.addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah form dari pengiriman default

    // Mengumpulkan data form
    const formData = new FormData(form);

    // Mengirim data form menggunakan AJAX
    fetch("proses.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((result) => {
        // Menampilkan alert sukses
        alertContainer.innerHTML = `
              <div class="alert alert-success" role="alert">
                  ${result}
              </div>
          `;
        form.reset(); // Reset form setelah berhasil
      })
      .catch((error) => {
        // Menampilkan alert error
        alertContainer.innerHTML = `
              <div class="alert alert-danger" role="alert">
                  Terjadi kesalahan: ${error.message}
              </div>
          `;
      });
  });
});
