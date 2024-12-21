<template>
    <layout>
        <Sidebar>
            <div class="container mx-auto grid gap-5">
                <div class=" grid sm:grid-cols-5 text-white gap-5">
                    <div class="bg-indigo-600  p-3 rounded-lg" v-for="item in 5" :key="item">
                        <div class="flex justify-between mb-2">
                            <span>logo</span>
                            <span class="ml-4 max-w-12 w-full text-center bg-indigo-300 rounded-md bolder font-bold">15%</span>
                        </div>
                        <div class=" grid py-3 px-2">
                            <h3 class="text-white mb-1">500</h3>
                            <span class="text-indigo-100 font-black">Vendas</span>
                        </div>
                    </div>
                </div>
                <div class="bg-indigo-600 h-96 rounded-lg"></div>
            </div>
        </Sidebar>
    </layout>
</template>

<script setup>
import Sidebar from '@/Components/Sidebar.vue';
</script>
