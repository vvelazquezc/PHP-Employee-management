export const deleteMethod = {
  url: function (pathToSend, data) {
    const request = {
      url: pathToSend,
      data: { data: data },
      type: 'DELETE',
    };

    return $.ajax(request);
  },
};
