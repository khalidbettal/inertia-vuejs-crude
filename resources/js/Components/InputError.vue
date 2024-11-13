<script setup>
defineProps({
    message: {
        type: String,
    },
});
</script>

<template>
    <div v-show="message" class="bg-red-100">
        <p class="text-sm text-red-700">
          You have an Error.
          <span  class="font-medium text-red-700 underline hover:text-red-600">{{ message }}</span>
        </p>
    </div>
</template>
