import { store } from '../store/store.js';

export const dispatcher = {
  emit: function (action, data) {
    Object.values(store.onAction).forEach(element => {
      element({ name: action, payload: data });
    });
  },
};
