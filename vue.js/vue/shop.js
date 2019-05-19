Vue.component('product', {
    props: {
        premium: {
            type: Boolean,
            required: true
        }
    },
    template: `
    <div class="container row">
        <div class="col-md-3">
            <img :src="image" class="w-100">
        </div>

        <div>
            <h3>{{ title }}</h3>

            <p v-if="inventory">In Stock</p>
            <p v-else="">Out Of Stock</p>
            <p>Shipping : $ {{ shipping }}</p>

            <ul>
                <li v-for="detail in details">{{ detail }}</li>
            </ul>

            <div v-for="(variant, index) in variants"
                :key="variant.variantId"
                class="color-box"   
                :style="{ backgroundColor: variant.variantColor }"
                @mouseover="updateProduct(index)"
            >
            </div><br>

            <div class="row">
                <button 
                    v-on:click="addToCart"
                    :disabled="!inventory"
                    class="btn btn-secondary">
                    Add to Cart
                </button>
            </div>

        </div>
    </div>
    `,
    data() {
        return {
            brand: "School",
            product: "Socks",
            selectedVariant: 0,
            details: ["80% cotton", "20% polyester", "gender neutral"],
            variants: [
                {
                    variantId: 2234,
                    variantColor: "black",
                    variantImage: "../archive/sock-black.jpg",
                    variantQuantity: 10
                },
                {
                    variantId: 2235,
                    variantColor: "grey",
                    variantImage: "../archive/sock-grey.jpg",
                    variantQuantity: 0
                }
            ]
        }
    },
    methods: {
        addToCart() {
            this.$emit('add-to-cart', this.variants[this.selectedVariant].variantId)
        },
        updateProduct(index) {
            this.selectedVariant = index
            console.log(index)
        }
    },
    computed: {
        title() {
            return this.brand + ' ' + this.product
        },
        image() {
            return this.variants[this.selectedVariant].variantImage
        },
        inventory() {
            return this.variants[this.selectedVariant].variantQuantity
        },
        shipping() {
            if (this.premium) {
                return "Free"
            }
            return "2.99"
        }
    }

})

var shop = new Vue({
    el: '#shop',
    data: {
        premium: false,
        cart: []
    },
    methods: {
        updateCart(id) {
            this.cart.push(id)
        }
    }
})