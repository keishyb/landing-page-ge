import typography from '@tailwindcss/typography';
import forms from '@tailwindcss/forms';
import aspectRatio from '@tailwindcss/aspect-ratio';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        inter: ['Inter'],
        mont: ['Montserrat']
      },
    },
  },
  plugins: [
    typography,
    forms,
    aspectRatio,
  ],
}

