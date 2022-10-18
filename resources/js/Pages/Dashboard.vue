<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header class="font-semibold text-xl text-gray-800 leading-tight bg-[#3B4A52]">
            <div class=" flex m-auto bg-[#3B4A52]">
                <ul class="flex justify-between m-auto p-1 list-none">
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Ação</a>
                    </li>
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Comedia</a>
                    </li>
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Slice of life</a>
                    </li>
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Terror</a>
                    </li>
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Sci - fi</a>
                    </li>
                    <li class="flex justify-center m-auto p-[10px] text-white">
                        <a href="">Mais</a>
                    </li>
                </ul>
            </div>
        </template>
        <div>

        </div>
    </AppLayout>
</template>
