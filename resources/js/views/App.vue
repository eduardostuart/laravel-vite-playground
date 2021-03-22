<template>
    <div class="main">
        <div class="main__warning">this is {{ result }}</div>
    </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';

export default defineComponent({
	name: 'App',
    computed: {
        result() {
            return 'FAST...and just a test :)'
        }
    }
});
</script>