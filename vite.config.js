import path from 'path'
import vue from '@vitejs/plugin-vue'

export default ({ command }) => ({
    base: command === 'serve' ? '' : '/build/',
    publicDir: '.tmp-public',
    plugins: [vue()],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources')
        }
    },
    build: {
        manifest: true,
        outDir: 'public/build',
        rollupOptions: {
            input: 'resources/js/main.ts',
        },
    },
});