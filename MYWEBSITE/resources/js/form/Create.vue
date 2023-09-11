<template>
    <div class="flex justify-center py-10">
        <div class="flex flex-col p-4 bg-teal-400 rounded-lg shadow-lg shadow-teal-800 text-slate-300">
            <div class=" px-32 py-4 text-center text-4xl font-semibold text-slate-700 border-b-2 border-teal-700">
            <p>Create New Product</p>

            </div>
            <div class="flex flex-col bg-slate-500 rounded-lg overflow-hidden">
                <label class="bg-inherit px-3" for="">NAME</label>
                <input name="name" class="bg-inherit focus:outline-0 border-0 border-b-4 border-gray-800 px-3" type="text"
                    v-model="FormData.name">
                    <span class="error" v-if="errors.name">{{ errors.name[0] }}</span>
                   
            </div>
            <div class="flex flex-col bg-slate-500 rounded-lg overflow-hidden mt-4">
                <label class="bg-inherit px-3" for="">CATEGORY</label>
                <input name="category" class="bg-inherit focus:outline-0 border-0 border-b-4 border-gray-800 px-3" type="text"
                    v-model="FormData.category">
                  

            </div>
            <div class="flex flex-col bg-slate-500 rounded-lg overflow-hidden mt-4">
                <label class="bg-inherit px-3" for="">DESCRIPTION</label>
                <input name="descrition" class="bg-inherit focus:outline-0 border-0 border-b-4 border-gray-800 px-3" type="text"
                    v-model="FormData.description">

            </div>
            <div class="mt-4 px-20 flex flex-col">
                <button class=" text-center px-14 py-2 bg-emerald-700 rounded-lg" @click="$events => SubmitForm()">Add
                    Product</button>
            </div>
        </div>
    </div>
</template>
<script>

import axios from "axios";

export default {
    data() {
        return {
            FormData: {
                name: '',
                category: '',
                description: ''
            },
            errors: {},
        }
    },
    
    create: function(){
        console.log(this.products);

    },

    methods: {
        async SubmitForm() {
            try {
                const response = await axios.post('api/create', this.FormData)

                console.log(response);
                this.resetForm();
               
            } catch(error){
                if (error.response && error.response.status === 422) {
                    // Handle validation errors
                    this.errors = error.response.data.errors;
                } else {
                    console.error(error);
                }
            }
            
    },
        resetForm() {
            this.FormData = {
                name: '',
                category: '',
                description: ''
            }
             this.errors = {};
        }
      
    
}
}
</script>