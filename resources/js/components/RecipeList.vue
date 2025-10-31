<template>
    <div class="mt-3">
        
    </div>

    <div class="grid grid-cols-2">
        <div>
            <div class="flex justify-between text-sm items-center">
                <div>
                    <p>Aldrin P.</p>
                    <span>392</span>
                </div>

                <div>
                    <div>
                        <p class="px-2 py-[2px] bg-orange-400 text-xs rounded-full">Medium</p>
                    </div>
                    <div>
                        <p class="text-xs">Lunch</p>
                    </div>
                </div>
            </div>

            <div>
                
            </div>
        </div>
    </div>

</template>

<script>
import axios from 'axios';

    export default {
        data() {
            return {
                recipes: [],
                loading: false,
            }
        },
        methods: {
            async getRecipes() {
                this.loading = true;
                try {
                    const response = await axios.get('/api/recipes');
                    this.recipes = response.data;  
                    console.log(this.recipes);  
                } catch (error) {
                    console.log(error);
                } finally {
                    this.loading = false;
                }
            }
        },
        mounted() {
            this.getRecipes();
        }
    }
</script>