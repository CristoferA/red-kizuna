import preline from 'preline/plugin';

export default {
    darkMode: 'class',
    
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.{js,vue}',
        './node_modules/preline/dist/*.js',
    ],
    theme: {
        extend: {},
    },
    plugins: [
        preline,
    ],
};
