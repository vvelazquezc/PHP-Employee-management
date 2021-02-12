export const getMethod = {
  url: function (pathToSend, data) {
    const request = {
      url: pathToSend,
      data: data,
      type: 'GET',
    };

    return $.ajax(request);
  },
};
