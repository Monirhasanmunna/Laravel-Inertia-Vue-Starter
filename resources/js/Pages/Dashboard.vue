<script setup>
    import MainLayout from '@/Layouts/MainLayout.vue';
</script>

<template>
    <MainLayout>
        <!-- Breadcrumb -->
        <div class="flex items-center justify-between">

            <div>
                <h3 class="dark:text-gray-100">Dashboard</h3>
            </div>

            <ol class="flex items-center justify-end whitespace-nowrap" aria-label="Breadcrumb">
                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200"
                    aria-current="page">
                    Dashboard
                </li>
            </ol>
        </div>
        <!-- Breadcrumb -->

        <div class="card">
            <h2>Dashboard</h2>
        </div>
    </MainLayout>
</template>

<style scoped>

</style>
