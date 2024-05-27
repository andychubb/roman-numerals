import defaultTheme from 'tailwindcss/defaultTheme'

module.exports = {
    content: ['./resources/**/*.{js,vue,blade.php}'],
    plugins: [
        require('@tailwindcss/forms'),
    ],
}