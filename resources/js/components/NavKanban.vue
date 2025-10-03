<template>
<div class="relative flex items-center h-9 p-3.5 gap-x-2 group">
    <!-- Letters -->
    <div class="w-7 h-7 grid place-items-center rounded-lg text-white font-medium" :style="{background: kanban.color}">
        {{ kanban.title[0].toUpperCase() }}
    </div>
    <a :href="route('kanban.show', kanban.id)" class="absolute inset-0"></a>
    <p :class="['text-sm font-medium', {'text-neutral-400': !active}]">
        <text-clamp 
            :text="kanban.title.charAt(0).toUpperCase() + kanban.title.slice(1)" 
            :max-lines='1' 
        />
    </p>
    <!-- Button -->
    <div class="absolute hidden group-hover:grid right-0 h-9 w-9 bg-gradient-to-r from-white/90 via-white/95 to-white place-items-center">
        <button><EllipsisVertical class="w-4 h-4"/></button>
    </div>
</div>
</template>

<script setup>
import { EllipsisVertical } from 'lucide-vue-next';
import TextClamp from 'vue3-text-clamp';

defineProps({
    kanban: {
        type: Object,
        required: true
    },
    active: {
        type: Boolean,
        default: false
    }
})
</script>