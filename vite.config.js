import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "./resources/**/*.blade.php",
                "./resources/**/*.{vue,js,ts,jsx,tsx}"
            ],
            refresh: [
                'resources/**'
            ]
        })
    ]
});
