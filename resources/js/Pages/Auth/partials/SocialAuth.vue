<template>
    <!-- Mobile -->
    <div class="flex flex-col items-center gap-4 md:hidden">
        <Button as-child class="w-full" variant="outline">
            <a :href="route('social.redirect', 'google')">
                <Google />
                Google
            </a>
        </Button>
        <Button as-child class="w-full" variant="outline">
            <a :href="route('social.redirect', 'github')">
                <Github />
                Github
            </a>
        </Button>
    </div>
    <!-- Desktop -->
    <div class="items-center gap-2 hidden md:flex">
        <Button as-child class="flex-1" variant="outline">
            <a :href="route('social.redirect', 'google')">
                <Google />
                Google
            </a>
        </Button>
        <Button as-child class="" variant="outline">
            <a :href="route('social.redirect', 'github')">
                <Github />
                Github
            </a>
        </Button>
    </div>
</template>

<script setup>
import { Button } from '@/components/ui/button';
import Google from '@/Icons/Google.vue';
import Github from '@/Icons/Github.vue';
</script>