// const autoprefixer = require('autoprefixer');
// const postcss = require('rollup-plugin-postcss');
import autoprefixer from "autoprefixer";
import postcss from "rollup-plugin-postcss";

export default [
  {
    input: "styles/scss/style.scss",
    output: {
      file: "styles/style.css",
      format: "es"
    },
    plugins: [
      postcss({
        plugins: [autoprefixer],
        extract: true,
        minimize: true,
        sourceMap: false,
        extensions: [".scss"]
      })
    ]
  }
];