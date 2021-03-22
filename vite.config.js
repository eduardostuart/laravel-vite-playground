export default ({ command }) => ({
    base: command === 'serve' ? '' : '/build/',
    publicDir: '.tmp-public',
    build: {
        manifest: true,
        outDir: 'public/build',
        rollupOptions: {
            input: 'resources/js/app.js',
        },
    },
});