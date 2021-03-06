module.exports = {
    mode: "jit",
    purge: {
        enabled: true,
        content: ['./single.php', './index.php', './contact.html', './contact2.html']
    },
    darkMode: false,
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
}