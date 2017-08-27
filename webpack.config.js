module.exports = [
    {
        entry: {
            "settings": "./app/views/admin/settings.js"
        },
        output: {
            filename: "./app/bundle/[name].js"
        },
        module: {
            loaders: [
                {test: /\.vue$/, loader: "vue"},
                {test: /\.js$/, exclude: /node_modules/, loader: "babel-loader"}
            ]
        }
    }
];
