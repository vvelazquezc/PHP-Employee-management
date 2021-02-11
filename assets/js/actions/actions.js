import { get } from "../api_methods/get.js"

export const actions = {

    init: function(){
       
        get.url("../src/library/employeeController.php", "employeeList")
            .then(data => {
                console.log(data);

        })

    }

}