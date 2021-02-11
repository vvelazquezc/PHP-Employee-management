import { helpers } from "../helpers/helpers.js"

export const store = {

    appState: {

    },
    onAction: {
        init: function (action) {
            if (action.name == 'init') {
                $('#main-wrapper').jsGrid(helpers.grid(action.payload))
            }
        }
    },

}