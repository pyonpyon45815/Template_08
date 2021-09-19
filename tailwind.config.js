module.exports = {
    mode: "jit",
    purge: {
        enabled: true, //  purgeするかどうか
        content: ['./single.php'], // purge対象のファイル
        content: ['./index.php'] // purge対象のファイル
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
}