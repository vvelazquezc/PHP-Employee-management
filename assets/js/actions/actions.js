import { get } from "../api_methods/get.js"
import { dispatcher } from "../dispatcher/dispatcher.js"

export const actions = {

    init: function(){

        get.url("../src/library/employeeController.php", "employeeList")
            .then(data => {
                dispatcher.emit('init', data)

        })

    },
    

}