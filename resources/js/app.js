// resources/js/app.js
import { createApp } from 'vue';
import App from './App.vue';

// Vuetify
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

// vue-toastification
import Toast, {useToast} from 'vue-toastification';
import 'vue-toastification/dist/index.css';

// Import global CSS
import '../css/global.css';
import '@mdi/font/css/materialdesignicons.css'
import router from "./routes/route.js";



const vuetify = createVuetify({
    components,
    directives,
    icons: {
        defaultSet: 'mdi', // This is already the default value - only for display purposes
    },
    display: {
        mobileBreakpoint: 'sm',
        thresholds: {
            xs: 0,
            sm: 340,
            md: 540,
            lg: 800,
            xl: 1280,
        },
    },
})

const app = createApp(App);
app.use(vuetify)
app.use(router)
app.use(Toast, {})

app.config.globalProperties.$toast = useToast()

app.mount('#app');
