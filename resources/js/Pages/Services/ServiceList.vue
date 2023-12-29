<script setup>
import { Link } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue'

</script>

<template>
    <MainLayout>
        <!-- Breadcrumb -->
        <div class="flex items-center justify-between">
            <div>
                <h3 class="dark:text-gray-100">Service List</h3>
            </div>

            <ol class="flex items-center justify-end whitespace-nowrap" aria-label="Breadcrumb">
                <li class="inline-flex items-center">
                    <Link :href="route('dashboard')" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500">
                    Dashboard
                    </Link>
                    <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </li>
                
                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
                    Service List
                </li>
            </ol>
        </div>
        <!-- Breadcrumb -->

        <div class="card">
            <h2>Hello</h2>
        </div>

    </MainLayout>
</template>

<style scoped>

</style>