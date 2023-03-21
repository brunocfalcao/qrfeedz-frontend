import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import commonjs from '@rollup/plugin-commonjs';

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
        }),
        commonjs()
    ]
});
