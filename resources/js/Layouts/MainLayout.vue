<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Layouts/Header.vue'
import Sidebar from '@/Layouts/Sidebar.vue';
import { onMounted } from 'vue';

  onMounted(() => {
    HSStaticMethods.autoInit();
  });
</script>

<template>
  
  <Header/>

  <Sidebar/>

  <div class="w-full pt-4 px-4 sm:px-6 md:px-8 lg:ps-72 h-screen">
    <slot></slot>
  </div>
</template>