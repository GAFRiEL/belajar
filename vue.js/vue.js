var app = new Vue({
    el: '#app',
    data:{
        product: "Socks",
        image: "../archive/sock-black.jpg",
        inventory: true,
        details: ["80% cotton", "20% polyester", "gender neutral"],
        variants: [
            {
                variantId: 2234,
                variantColor: "black",
                variantImage: "../archive/sock-black.jpg"
            },
            {
                variantId: 2235,
                variantColor: "grey",
                variantImage: "../archive/sock-grey.jpg"
            }
        ],
        cart: 0
    },
    methods: {
        addToCart() {
            this.cart += 1
        },
        updateProduct(variantImage) {
            this.image = variantImage

        }
    }
})