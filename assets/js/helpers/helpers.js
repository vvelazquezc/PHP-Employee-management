import { deleteMethod } from '../api_methods/delete.js';
import { postMethod } from '../api_methods/post.js';
import { putMethod } from '../api_methods/put.js';

export const helpers = {
  grid: function (employeeList) {
    return {
      width: '100%',
      height: 'auto',
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      datatype: 'json',
      deleteConfirm: 'Do you really want to delete the client?',
      data: employeeList,

      onItemDeleting: function (args) {
        deleteMethod.url('../src/library/employeeController.php', args.item.id);
      },
      onItemInserting: function (args) {
        postMethod
          .url('../src/library/employeeController.php', args.item)
          .done(data => {
                args.item.id = data;
                args.item.lastName = '';
                args.item.gender = '';
                });
      },
      onItemUpdating: function (args) {
        putMethod
          .url('../src/library/employeeController.php', args.item)
      },
      rowClick: function (args) {
        window.location.href = `employee.php?employeeId=${args.item.id}`;
      },

      fields: [
        {
          name: 'name',
          type: 'text',
          width: 150,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'email',
          type: 'text',
          width: 200,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'age',
          type: 'number',
          width: 50,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'streetAddress',
          type: 'text',
          width: 200,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'city',
          type: 'text',
          width: 200,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'state',
          type: 'text',
          width: 50,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'PC',
          type: 'number',
          width: 70,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'phoneNumber',
          type: 'number',
          width: 100,
          validate: 'required',
          align: 'center',
        },
        { type: 'control' },
      ],
    };
  },
  
};
