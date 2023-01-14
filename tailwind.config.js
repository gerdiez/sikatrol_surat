// tailwind.config.js
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                blue: {
                    1: "#30404f",
                    2: "#226C9E",
                    3: "#199CDB",
                },
                green: {
                    2: "#19db5a",
                    3: "#19db50",
                },
            },
        },
    },
    plugins: [require("daisyui")],
};
