import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/vanilla-cookieconsent.js',
                'resources/css/filament/theme.css'
            ],
            refresh: true,
        }),
    ],
    build:{
        sourcemap: true,
        // minify:'terser',
        // terserOptions:{
        //     compress:{
        //         drop_console: true,
        //     }
        // }
    }
});
