<template>

    <div class="modal bg-emerald-200 flex justify-center overflow-hidden absolute top-10 left-60 rounded-lg border-2 border-emerald-700" v-if="showModal">
      <div class="modal-content flex flex-col">  
        <div class="flex justify-center font-bold text-2xl py-4 px-28 text-slate-200  bg-teal-600">
          <p>Product Details</p>
        </div>   
        <div class="flex flex-row mt-4  pl-6 pr-16 ">
          <p class="font-bold text-lg">Name:</p>
            <p class="ml-3 font-semibold text-lg">{{ product.name }}</p>
          </div>
          <div class="flex flex-row mt-4  pl-6 pr-16 ">
            <p class="font-bold text-lg">Category:</p>
              <p class="ml-3 font-semibold text-lg">{{ product.category }}</p>
            </div>
            <div class="flex flex-row mt-4  pl-6 pr-16 ">
            <p class="font-bold text-lg">Description:</p>
              <p class="ml-3 font-semibold text-lg"> {{ product.description }}</p>
            </div>
       
        <button class="bg-emerald-600 mt-5 py-3 text-xl text-slate-100 font-medium" @click="closeModal">Close</button>
      </div>
    </div>

  
</template>

<script>
export default {
  props: {
    product: Object,
    showModal: Boolean,
  },
  methods: {
    closeModal() {
      this.$emit("close");
    },
  },
};
</script>

<style scoped>
/* Add your modal styles here */
</style>
