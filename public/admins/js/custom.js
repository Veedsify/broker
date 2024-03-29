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


$("#openconfirmModal").on("click", function () {
    document.querySelector("#confirmModal").classList.add("active")
})
const child = document.querySelector("#inner_content")?.addEventListener("click", (e) => {
    e.stopPropagation()
})
$("#confirmModal").on("click", function (e) {
    document.querySelector("#confirmModal").classList.remove("active")
})

$("#generate_address").on("click", (e) => {
    const selectcoin = document.querySelector("#selectcoin").value
    const deposit_amount = document.querySelector("#deposit_amount").value
    const minprice = parseInt(document.querySelector("#pay_form").getAttribute("data-start"))
    const maxprice = parseInt(document.querySelector("#pay_form").getAttribute("data-end"))

    if (!deposit_amount || deposit_amount == "") {
        swal({
            title: "Error",
            text: "Please enter the amount, you wish to deposit",
            icon: "error"
        })
        return
    }

    if (deposit_amount < minprice || deposit_amount > maxprice) {
        swal({
            title: "Error",
            text: "Please enter the amount within the range of $" + minprice.toLocaleString() + " and $" + maxprice.toLocaleString(),
            icon: "error"
        })
        return
    }

    if (!selectcoin || selectcoin == "") {
        swal({
            title: "Error",
            text: "Please select a payment method to deposit with",
            icon: "error"
        })
        return
    }

    $("#loader_address").html("<img src='/custom/images/loader.gif' alt='loader' width='30px'>")

    setTimeout(() => {
        $("#paidamount").val(deposit_amount)
        $("#loader_address").html("")
        $("#showaddress").removeClass("hidden")
    }, 1200);
})

$("#copybtcaddress").on("click", (e) => {
    const btcaddress = document.querySelector("#btc_address").value
    navigator.clipboard.writeText(btcaddress)
    swal({
        title: "Success",
        text: "Your unique wallet address has copied to clipboard",
        icon: "success"
    })
})


window.onload = async function () {
    const getPrice = await fetch("https://api.coincap.io/v2/assets/bitcoin")
    const btcprice = getPrice.ok ? await getPrice.json() : 0
    const price = btcprice.data.priceUsd
    const trbtcvalue = document.querySelectorAll(".trbtcvalue")
    trbtcvalue.forEach((element) => {
        const amount = parseInt(element.getAttribute("data-amount"))
        element.innerHTML = (amount / price).toFixed(8) + " BTC"
    })
}

const profileImageSelect = document.querySelector("#fileavatar")

profileImageSelect?.addEventListener("change", function (e) {
    const file = this.files[0]
    if (file) {
        const reader = new FileReader()
        reader.onload = function () {
            const parent = e.target.closest("label")
            parent.querySelector("img").src = reader.result
        }
        reader.readAsDataURL(file)
    }
})


$("#openUpdateImage").on("click", function () {
    console.log("first")
    document.querySelector("#updateImageModal").classList.replace("opacity-0", "opacity-100")
    document.querySelector("#updateImageModal").classList.replace("pointer-events-none", "pointer-events-all")
})

$("#closeUpdate").on("click", function () {
    document.querySelector("#updateImageModal").classList.replace("opacity-100", "opacity-0")
    document.querySelector("#updateImageModal").classList.replace("pointer-events-all", "pointer-events-none")
})

$("#updateImageModal").on("click", function (e) {
    if (e.target.id == "updateImageModal") {
        document.querySelector("#updateImageModal").classList.replace("opacity-100", "opacity-0")
        document.querySelector("#updateImageModal").classList.replace("pointer-events-all", "pointer-events-none")
    }
})