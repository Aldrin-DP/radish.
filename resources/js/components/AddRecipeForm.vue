<template>
    <div>
        <button 
            @click="openModal"
            class="border border-gray-300 px-5 py-1 rounded-full hover:bg-[#5FB15F] hover:text-white hover:border-[#5FB15F] transition-colors duration-300">
            Add Recipe
        </button>

        <div v-if="showModal" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 p-3">
            <div class="bg-white bg-opacity-90 p-6 rounded-lg w-full md:w-2/3 lg:w-5/12">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold">Step {{ step + 1 }} of 3</h2>
                    <button @click="closeModal" class="text-gray-600 hover:text-gray-900 text-3xl">
                        &times;
                    </button>
                </div>

                <div>
                    <form action="">
                        <div class="mb-2">
                            <label for="" class="text-sm" >Recipe name</label>
                            <input 
                                type="text" 
                                name="firstname"
                                class="border w-full px-3 py-1 rounded text-sm"
                                placeholder="First name"
                            >
                        </div>

                        <div class="mb-2">
                            <label for="" class="text-sm" >Description</label>
                            <input 
                                type="text" 
                                name="firstname"
                                class="border w-full px-3 py-1 rounded text-sm"
                                placeholder="First name"
                            >
                        </div>

                        <div class="mb-2">
                            <label for="" class="text-sm" >Category</label>
                            <input 
                                type="text" 
                                name="firstname"
                                class="border w-full px-3 py-1 rounded text-sm"
                                placeholder="First name"
                            >
                        </div>

                        <div class="mb-2">
                            <label for="" class="text-sm" >Difficulty</label>
                            <input 
                                type="text" 
                                name="firstname"
                                class="border w-full px-3 py-1 rounded text-sm"
                                placeholder="First name"
                            >
                        </div>

                        <div class="mb-2">
                            <label for="" class="text-sm" >Category</label>
                            <input 
                                type="text" 
                                name="firstname"
                                class="border w-full px-3 py-1 rounded text-sm"
                                placeholder="First name"
                            >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div>

    </div>
</template>

<script>
    export default {
        data () {
            return {
                showModal: true,
            }
        }
    }
</script>