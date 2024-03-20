$("#proof_of_payment").on("change", function () {
    var file = $(this).get(0).files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function () {
            preview = document.querySelector("#payment_preview")
            var preview;
            preview.src = reader.result;
        };
        reader.readAsDataURL(file);
    }
    return false
})

document.querySelector("#openconfirmModal").addEventListener("click", function () {
    document.querySelector("#confirmModal").classList.add("active")
})
const child = document.querySelector("#inner_content").addEventListener("click", (e) => {
    e.stopPropagation()
})
document.querySelector("#confirmModal").addEventListener("click", function (e) {
    document.querySelector("#confirmModal").classList.remove("active")
})

document.querySelector("#generate_address").addEventListener("click", (e) => {
    $("#loader_address").html("<img src='/custom/images/loader.gif' alt='loader' width='30px'>")
})