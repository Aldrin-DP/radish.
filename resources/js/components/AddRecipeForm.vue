<template>
    <div>
        <button 
            @click="openModal"
            class="border border-gray-300 px-5 py-1 rounded-full hover:bg-[#5FB15F] hover:text-white hover:border-[#5FB15F] transition-colors duration-300">
            Add Recipe
        </button>

        <div v-if="showModal" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 p-3">
            <div class="bg-white bg-opacity-90 p-6 rounded border-t-8 border-t-[#E94E63] w-full md:w-2/3 lg:w-5/12">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold">
                        <span v-if="step === 1">Recipe Info</span>
                        <span v-if="step === 2">Ingredients</span>
                        <span v-if="step === 3">Instructions</span>
                        <span v-if="step === 4">Dish Image</span>
                        <span class="text-sm font-normal text-gray-500 ms-2">
                            {{step}} of 4
                        </span> 
                    </h2>
                    <button @click="closeModal" class="text-gray-600 hover:text-gray-900 text-3xl">
                        &times;
                    </button>
                </div>

                <div>
                    <form @submit.prevent="nextSteps">

                        <div v-if="step === 1">
                            <div class="mb-2">
                                <label for="" class="text-sm" >Recipe Name</label>
                                <input 
                                    v-model="recipe.recipe_name"
                                    type="text" 
                                    class="border w-full px-3 py-1 rounded text-sm focus:outline-gray-300"
                                    placeholder="Macaroni Salad"
                                >
                                <span 
                                    v-if="errors['recipe_name']"
                                    class="text-sm text-red-400"
                                >
                                    {{ errors['recipe_name'] }}
                                </span>
                            </div>

                            <div class="mb-2">
                                <label for="" class="text-sm" >Description <span class="text-xs text-gray-500">(Optional)</span></label>
                                <textarea 
                                    v-model="recipe.description" 
                                    class="border w-full px-3 py-1 rounded text-xs focus:outline-gray-300"
                                    placeholder="Macaroni salad is a creamy pasta dish with mayo and veggies."
                                >
                                </textarea>
                                <span 
                                    v-if="errors['description']"
                                    class="text-sm text-red-400"
                                >
                                    {{ errors['description'] }}
                                </span>
                            </div>

                            <div class="mb-2">
                                <label for="" class="text-sm" >Category</label>
                                <select 
                                    v-model="recipe.category" 
                                    class="border w-full px-2 py-1 rounded text-sm focus:outline-gray-300"
                                >
                                    <option value="" disabled selected>Select category:</option>
                                    <option value="Breakfast">Breakfast</option>
                                    <option value="Lunch">Lunch</option>
                                    <option value="Dinner">Dinner</option>
                                    <option value="Snack">Snack</option>
                                    <option value="Beverages">Beverages</option>
                                    <option value="Other">Other</option>
                                </select>
                                <span 
                                    v-if="errors['category']"
                                    class="text-sm text-red-400"
                                >
                                    {{ errors['category'] }}
                                </span>
                            </div>

                            <div class="mb-2">
                                <label for="" class="text-sm" >Difficulty</label>
                                <select 
                                    v-model="recipe.difficulty" 
                                    class="border w-full px-2 py-1 rounded text-sm focus:outline-gray-300"
                                >
                                    <option value="" disabled selected>Select difficulty:</option>
                                    <option value="Easy">Easy</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Hard">Hard</option>
                                </select>
                                <span 
                                    v-if="errors['difficulty']"
                                    class="text-sm text-red-400"
                                >
                                    {{ errors['difficulty'] }}
                                </span>
                            </div>

                            <div class="mb-2">
                                <label for="" class="text-sm" >Cook Time <span class="text-xs text-gray-500">(Total prep + cooking time in mins)</span></label>
                                <input 
                                    v-model="recipe.cook_time"
                                    type="number" 
                                    class="border w-full px-3 py-1 rounded text-sm focus:outline-gray-300"
                                    placeholder="Eg. 60"
                                >
                                <span 
                                    v-if="errors['cook_time']"
                                    class="text-sm text-red-400"
                                >
                                    {{ errors['cook_time'] }}
                                </span>
                            </div>
                        </div>

                        <div v-if="step === 2">
                            <div>
                                <small class="opacity-70 block mb-1">Type 1 ingredient per line</small>
                                <textarea 
                                    v-model="recipe.ingredients"
                                    rows="6" 
                                    class="w-full p-2 focus:outline-gray-200"
                                    placeholder="Eg. 
2 cups of flour
3 eggs
1/2 cup sugar
1 tsp vanilla extract
                                    "
                                >
                                </textarea>
                                <span 
                                    v-if="errors['recipe_name']"
                                    class="text-sm text-red-400"
                                >
                                    {{ errors['ingredients'] }}
                                </span>
                            </div>
                            <div v-if="recipe.ingredients">
                                <label for="" class="text-gray-500 block text-sm">Preview</label>
                                <pre class="whitespace-pre-line font-poppins text-sm">
                                    {{ recipe.ingredients }}
                                </pre>
                            </div>
                        </div>

                        <div class="flex justify-between mt-4">
                            <button
                                v-if="step > 1"
                                @click.prevent="prevStep"
                                class="border text-sm px-3 py-1 rounded-full border-gray-300 hover:bg-black hover:opacity-60 hover:text-white hover:border-black transition-colors duration-300"
                            >
                                Prev Step
                            </button>
                            <button 
                                :disabled="loading"
                                :class="loading ? 'opacity-50 cursor-not-allowed' : 'bg-[#5FB15F] text-white'"
                                class="ml-auto border text-sm px-3 py-1 rounded-full bg-[#5FB15F] text-white border-[#5FB15F]"
                            >
                                <span v-if="step === 4">Submit</span>    
                                <span v-else>Next Step</span>
                            </button>
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
import axios from 'axios';

    export default {
        data () {
            return {
                showModal: false,
                step: 1,
                recipe: {
                    recipe_name: '',
                    description: '',
                    category: '',
                    difficulty: '',
                    cook_time: '',
                    ingredients: '',
                },
                errors: {},
                loading: false,
            }          
        },
        methods: {
            nextSteps() {

                const total_steps = 4;

                if (this.step < total_steps){
                    const isValid = this.validateStep();
                    if (isValid){
                        this.step++;
                    }
                } else {
                    const data = {
                        recipe_name: this.recipe.recipe_name,
                        description: this.recipe.description,
                        category: this.recipe.category,
                        difficulty: this.recipe.difficulty,
                        cook_time: this.recipe.cook_time
                    };

                    axios.post('/api/recipes', data)
                    .then(response => {
                        console.log('Success:', response);
                    })
                    .catch(error => {
                        console.log('Error:', error);
                        if (error.response && error.response.data.errors){
                            this.errors = error.response.data.errors;
                        } 
                    })
                }             
            },  
            prevStep() {
                this.step--;
            },
            openModal() {
                this.showModal = true;
            },
            closeModal() {
                this.showModal = false;
            },
            validateStep() {
                this.errors = {};
                if (this.step === 1){
                    if (!this.recipe.recipe_name){
                        this.errors.recipe_name = 'Recipe name field is required.';
                    }
                    if (!this.recipe.category){
                        this.errors.category = 'Category field is required.';
                    }
                    if (!this.recipe.difficulty){
                        this.errors.difficulty = 'Difficulty field is required.';
                    }
                    if (!this.recipe.cook_time){
                        this.errors.cook_time = 'Cook time field is required.';
                    }
                }
                if (this.step === 2){
                    if (!this.recipe.ingredients){
                        this.errors.ingredients = 'Ingredients field is required.';
                    }
                }
                return Object.keys(this.errors).length === 0;
            }
        }
    }
</script>
