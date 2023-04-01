import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                path.resolve(__dirname, 'resources/js/app.js'),
                path.resolve(__dirname, 'resources/css/app.css'),
            ],
            refresh: [
                path.resolve(__dirname, 'resources/**'),
            ],
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
        },
    },
    build: {
        outDir: path.resolve(__dirname, 'dist'),
        manifest: true,
    },
});
