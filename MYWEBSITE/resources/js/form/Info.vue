<template>
  <div class="flex justify-center text-center w-full pt-4 relative">
        <div class="overflow-hidden border-2 border-emerald-600">
          <table class="min-w-full text-left text-sm font-light">
            <thead class="border-b font-medium border-emerald-600">
              <tr >
                <th scope="col" class="px-6 py-4">NAME</th>
                <th scope="col" class="px-6 py-4">CATEGORY</th>
                <th scope="col" class="px-6 py-4">DESCRITION</th>
                <th scope="col" class="px-6 py-4">DELETE</th>
                <th scope="col" class="px-6 py-4">SHOW</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b border-emerald-600" v-for="product in products">
                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ product.name }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ product.category }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ product.description }}</td>
                <td class="whitespace-nowrap px-6 py-4"><button class="py-2 px-4 bg-teal-500 rounded-lg" @click="$events => deleteProduct(product)">Delete</button></td>
                <td class="whitespace-nowrap px-6 py-4"><button class="py-2 px-4 bg-teal-500 rounded-lg" @click="$events => showProduct(product)">Show</button></td>
              </tr>
              
            </tbody>
          </table>
        </div>
        

  </div>

<product-details :product="selectedProduct" :show-modal="showProductModal" @close="closeProductModal" />
</template>

<script>
import ProductDetails from "./ProductDetails.vue"; // Make sure to adjust the path
import axios from "axios";

export default {
  props:{
    products:{
      default:[]
    }
  },
  data() {
    return {
      selectedProduct: null,
      showProductModal: false,
    };
  },
  create : function(){
    console.log(this.products)
  }, methods: {
  async deleteProduct(product) {
    try {
      const response = await axios.delete(`/api/destroy/${product.id}`);
      
      if (response.data.status === 'success') {
        // Remove the deleted product from the local data
        const index = this.products.indexOf(product);
        if (index !== -1) {
          this.products.splice(index, 1);
        }
        console.log('Product deleted successfully');
        
      } else {
        console.error('Failed to delete product');
      }
    } catch (error) {
      console.error('Failed to delete product', error);
    }
  },
  async showProduct(product) {
      try {
        const response = await axios.get(`/api/show/${product.id}`);
        if (response.data.status === "success") {
          this.selectedProduct = response.data.product;
          this.showProductModal = true;
        } else {
          console.error("Failed to fetch product details");
        }
      } catch (error) {
        console.error("Failed to fetch product details", error);
      }
    },
    closeProductModal() {
      this.showProductModal = false;
    },
  },
  components: {
    ProductDetails,
  }
}

</script>