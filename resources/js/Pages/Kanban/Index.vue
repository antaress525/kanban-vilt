<template>
<AuthenticatedLayout>
    <Head title="Aucune kanban"></Head>
    <div class="w-full h-full flex flex-col">
        <div></div>
        <div class="flex-1 flex flex-col gap-y-4 items-center justify-center">
            <div class="flex flex-col gap-y-5 items-center justify-center max-w-md">
                <span class="p-2 border border-neutral-100 rounded-md bg-white shadow-2xl">
                    <LayoutDashboard class="h-6 w-6" />
                </span>
                <div class="flex flex-col gap-y-3.5 items-center">
                    <p class="font-medium">Aucun Kanban pour le moment</p>
                    <p class="text-sm text-center">Commencez à organiser vos projets en créant votre premier tableau Kanban.</p>
                    <Button>
                        <Plus class="h-5 w-5" />
                        Créer un Kanban
                    </Button>
                </div>
            </div>
        </div>
    </div>
</AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { LayoutDashboard } from 'lucide-vue-next';
import { Button } from '@/components/ui/button';
import { Plus } from 'lucide-vue-next';
</script>
