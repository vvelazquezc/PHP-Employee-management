export const get = {

    url: function(path, data){
        const request = {
            url: path,
            data: data,
            type: "GET"
        }

        return $.ajax(request);
    }

}