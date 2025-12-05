/**
 * Tailwind configuration — list files Tailwind should scan to generate used CSS.
 * Add other directories/files here if you use Tailwind classes in components outside the usual paths.
 */
module.exports = {
    content: [
        // Blade templates
        './resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
        // JS / Vue / React files
        './resources/**/*.js',
        './resources/**/*.vue',
        './resources/**/*.jsx',
        './resources/**/*.tsx',
        // Public / HTML (optional)
        './resources/**/*.html',
        './public/**/*.html',
        // Compiled Blade views (optional - helpful for runtime generated classes)
        './storage/framework/views/*.php',
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
