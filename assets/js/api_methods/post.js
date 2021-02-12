export const postMethod = {
  url: function (pathToSend, data) {
    const request = {
      url: pathToSend,
      data: data,
      type: 'POST',
    };

    return $.ajax(request);
  },
};
