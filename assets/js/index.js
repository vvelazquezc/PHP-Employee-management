import { get } from './api_methods/get.js';
import { helpers } from './helpers/helpers.js';

get.url('../src/library/employeeController.php', 'employeeList').then(data => {
  $('#main-wrapper').jsGrid(helpers.grid(data));
});
