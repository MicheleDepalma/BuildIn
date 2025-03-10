import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            'fcf2ff': '#FCF2FF',
            'c37cff': '#C37CFF',
            'e2f8e2': '#E2F8E2',
            'ff8b29': '#FF8B29',
            'f6f5ff': '#F6F5FF',
            'f2feff': '#F2FEFF',
            'b2aee6': '#B2AEE6',
            'fdf2f3': '#FDF2F3',
            '5dc0c7': '#5DC0C7',
            'f0b225': '#F0B225',
            'c45654': '#C45654',
            '6f6bb2': '#6F6BB2',
            'f2f8fc': '#F2F8FC',
            '97c4f0': '#97C4F0',
            '78a5d9': '#78A5D9',
            'f2fcff': '#F2FCFF',
            'ff6817': '#FF6817',
            'fdf3e5': '#FDF3E5',
            'fdf8ea': '#FDF8EA',
            'eab115': '#EAB115',
            'faf2f0': '#FAF2F0',
            'f5fae2': '#F5FAE2',
            'f2f6fa': '#F2F6FA',
            'eafaf7': '#EAFAF7',
            'f0fdeb': '#F0FDEB',
            'f7f4ff': '#F7F4FF',
            'fbf2ff': '#FBF2FF',
            'fff2fe': '#FFF2FE',
            'f2f4f8': '#F2F4F8',
            '06627e': '#06627E',
            'c31414': '#C31414',
            '94b40d': '#94B40D',
            '1a8671': '#1A8671',
            '50bf35': '#50BF35',
            '8e5efc': '#8E5EFC',
            'ef56e3': '#EF56E3',
            'b035de': '#B035DE',
            '35b2d0': '#35B2D0',
            'f0f6ff': '#F0F6FF',
            'f2f3ff': '#F2F3FF',
            '525de8': '#525DE8',
            '4089ed': '#4089ED',
            'f5faf7': '#F5FAF7',
            '3bb984': '#3BB984',
            'f2fff2': '#F2FFF2',
            '6d5c9d': '#6D5C9D',
            'f8f5fd': '#F8F5FD',
            'fff5f6': '#FFF5F6',
            'faeaeb': '#FAEAEB',
            'e5323f': '#E5323F',
            '30acbc': '#30ACBC',
            '39386f': '#39386F',
            'f1f0ff': '#F1F0FF',
            'b72522': '#B72522',
            '514f8d': '#514F8D',
            'a11916': '#A11916',
            '252451': '#252451',
            '232323': '#232323',
            '3c3c3c': '#3C3C3C',
            '696969': '#696969',
            '959595': '#959595',
            'bfbfbf': '#BFBFBF',
            'dddddd': '#DDDDDD',
            'f0f0f0': '#F0F0F0',
            'f7f7f7': '#F7F7F7',
            'fcfcfc': '#FCFCFC',
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
