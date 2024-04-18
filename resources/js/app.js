import './bootstrap';

import { createApp } from 'vue'
import App from './layouts/App.vue' 
import router from './routes/index' 
import { Bootstrap4Pagination } from 'laravel-vue-pagination';
import { Bootstrap5Pagination } from 'laravel-vue-pagination';
import { TailwindPagination } from 'laravel-vue-pagination';


createApp(App) 
    .use(router)
    .mount('#app')
