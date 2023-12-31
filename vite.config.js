import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.js', 'resources/js/app.css'],
            refresh: true,
        }),
    ],
});
