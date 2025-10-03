<template>
    <div class="bg-white h-screen w-screen flex gap-x-8 p-4 sm:p-8 lg:p-[28px]">
       <!-- Aside bar -->
        <div class="hidden lg:block w-[242px] h-full">
            <!-- Avatar -->
            <Profile :auth-user="authUser" />
            <!-- Navigation -->
            <div class="h-full overflow-y-auto mt-8">
                <div class="space-y-6 px-[1px]">
                    <NavGroup label="Menu Principale">
                        <template #nav-items>
                            <NavItems as="button">
                                <search class="w-5 h-5" />
                                Recherche
                            </NavItems>
                            <NavItems as="button">
                                <Bell class="w-5 h-5" />
                                Notifications
                            </NavItems>
                            <NavItems as="button">
                                <Settings class="w-5 h-5" />
                                Parametres
                            </NavItems>
                        </template>
                    </NavGroup>
                    <NavGroup label="Kanban">
                        <template #nav-items>
                            <NavKanban v-for="kanban in kanbans" :kanban="kanban">
                                Creation d'un site web avec laravel
                            </NavKanban>
                            <NavItems as="button">
                                <Plus class="w-5 h-5" />
                                Creation kanban
                            </NavItems>
                        </template>
                    </NavGroup>
                </div>
            </div>
            
        </div>
        <!-- Page Content -->
        <div class="flex-1 flex-col">
            <header class="flex lg:hidden items-center justify-between">
                <ResponsiveNav />
                <div class="flex items-center gap-x-3.5">
                    <Button variant="ghost" size="icon">
                        <Search class="w-5 h-5" />
                    </Button>
                    <Button class="relative" variant="ghost" size="icon">
                        <Bell class="w-5 h-5" />
                        <span class="absolute top-1 right-1 w-2.5 h-2.5 rounded-full bg-red-400"></span>
                    </Button>
                    <Avatar>
                        <AvatarImage :src="`https://ui-avatars.com/api/?name=${'johndoe'}&background=random`" alt="@unovue" />
                        <AvatarFallback>IV</AvatarFallback>
                    </Avatar>
                </div>
            </header>
            <main class="h-full">
                <slot />
            </main>
        </div>
    </div>
</template>

<script setup>
import { computed, ref } from 'vue';
import { Search, Bell, Settings, Plus } from 'lucide-vue-next';
import NavGroup from '@/components/NavGroup.vue';
import NavItems from '@/components/NavItems.vue';
import Profile from '@/components/Profile.vue';
import { usePage } from '@inertiajs/vue3';
import ResponsiveNav from '@/components/ResponsiveNav.vue';
import { Button } from '@/components/ui/button';
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar'
import NavKanban from '@/components/NavKanban.vue';

const showingNavigationDropdown = ref(false);
const page = usePage();

const authUser = computed(() => {
    return page.props.auth.user;
});

const kanbans = computed(() => {
    return page.props.auth.kanbans;
});

</script>