import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'node_modules/toastr/toastr.scss', 'public/css/custom.css', 'public/css/style.css'],
            refresh: true,
        }),
    ],
});
