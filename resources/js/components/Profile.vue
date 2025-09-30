<template>
    <div class="border flex flex-col gap-y-4 mx-[1px] border-neutral-100 rounded-lg py-1.5 shadow-lg">
        <div @click="visible = !visible" class="flex items-center justify-between px-3.5 cursor-pointer">
            <Avatar>
                <AvatarImage :src="`https://ui-avatars.com/api/?name=${authUser.first_name}`" alt="@unovue" />
                <AvatarFallback>IV</AvatarFallback>
            </Avatar>
            <div class="font-medium">
                <p class="text-sm">{{ authUser.first_name }}</p>
                <p class="text-xs text-neutral-400">johndoe@gmail.com</p>
            </div>
            <ChevronsUpDown class="w-3.5 3.5 text-neutral-400" />
        </div>
        <div class="px-3.5" v-if="visible">
            <NavItems variant="danger" class="" as="button">
                <LogOut class="h-5 w-5" />
                Se deconnecter
            </NavItems>
        </div>
    </div>
</template>
<script setup>
import { usePage } from '@inertiajs/vue3';
import { computed, ref } from 'vue';
import { ChevronsUpDown, LogOut } from 'lucide-vue-next';
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar'
import NavItems from './NavItems.vue';

const visible = ref(false);
const page = usePage();
const authUser = computed(() => {
    return page.props.auth.user;
});
</script>