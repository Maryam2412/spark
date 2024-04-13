

    document.querySelectorAll(".card").forEach(item => {
        item.addEventListener("submit", e => {
            e.preventDefault()
            const card = item;
            const title = card.querySelector(".card-title").textContent;
            const price = card.querySelector("span").textContent;
            const image = card.querySelector(".card-img-top").src.slice(30, );

            $.ajax({
                url: "manage_cart.php",
                type: "post",
                data: {
                    title: title,
                    image: image,
                    price: price
                },
                success: item => {
                    alert(item)
                }
            })

        })
    })
