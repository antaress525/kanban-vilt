<template>
    <div class="bg-white h-screen w-screen flex gap-x-8 p-[28px]">
       <!-- Aside bar -->
        <div class="hidden lg:block w-[242px] h-full">
            <!-- Avatar -->
            <Profile :auth-user="authUser" />
            <!-- Navigation -->
            <div class="h-full overflow-y-auto mt-8">
                <div class="space-y-6 px-[1px] overflow-y-auto">
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
        <main class="flex-1">
            <slot />
        </main>
    </div>
</template>

<script setup>
import { computed, ref } from 'vue';
import { Search, Bell, Settings, Plus } from 'lucide-vue-next';
import NavGroup from '@/components/NavGroup.vue';
import NavItems from '@/components/NavItems.vue';
import Profile from '@/components/Profile.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { usePage } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
const page = usePage();

const authUser = computed(() => {
    return page.props.auth.user;
});
</script>