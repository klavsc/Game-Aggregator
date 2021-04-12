module.exports = {
    future: {
        // removeDeprecatedGapUtilities: true,
        // purgeLayersByDefault: true,
        // defaultLineHeights: true,
        // standardFontWeights: true
    },
    purge: [
        './app/**/*.php',
        './resources/**/*.php'
    ],
    theme: {
        extend: {
            spacing: {
                '44': '11rem'
            }
        }
    },
    variants: {},
    plugins: []
}
