import './bootstrap'

import { createApp } from 'vue'
import HelloWorld from '@/components/HelloWorld.vue'
import Calendario from '@/components/Calendario.vue'

window.app = createApp({
    setup() {
        return {
            message: 'Welcome to Your Vue.js App',
        };
    },
    components: {
        HelloWorld,
        Calendario
    },
}).mount('#app');
