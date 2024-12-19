import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        function ({ addBase }) {
            addBase({
                'h1': { fontSize: '2.25rem', fontWeight: '700', color: '#1f2937' },
                'h2': { fontSize: '1.875rem', fontWeight: '600', color: '#374151' },
                'h3': { fontSize: '1.5rem', fontWeight: '600', color: '#4b5563' },
                'h4': { fontSize: '1.25rem', fontWeight: '500', color: '#4b5563' },
                'h5': { fontSize: '1rem', fontWeight: '500', color: '#6b7280' },
                'h6': { fontSize: '0.875rem', fontWeight: '500', color: '#6b7280' },
            });
        },
    ],
};
