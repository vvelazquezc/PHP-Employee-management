export const putMethod = {
    url: function (pathToSend, data) {
      const request = {
        url: pathToSend,
        data: data,
        type: 'PUT',
      };
      return $.ajax(request);
    },
}