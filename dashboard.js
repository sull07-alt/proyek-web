const mobileMenu = document.getElementById("mobileMenu");
const sidebar = document.querySelector(".sidebar");

if (mobileMenu && sidebar) {

    mobileMenu.addEventListener("click", () => {
        sidebar.classList.toggle("open");
    });

}


// Tombol demo untuk sementara
const addButtons = document.querySelectorAll(".add-button");

addButtons.forEach(button => {

    button.addEventListener("click", () => {

        alert(
            "Fitur Add Project akan kita buat di tahap berikutnya."
        );

    });

});


const editButtons = document.querySelectorAll(".edit-button");

editButtons.forEach(button => {

    button.addEventListener("click", () => {

        alert(
            "Fitur Edit Project akan kita buat di tahap berikutnya."
        );

    });

});