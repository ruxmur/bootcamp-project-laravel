import { Datepicker } from 'vanillajs-datepicker';
// import Datepicker from '/node_modules/vanillajs-datepicker/dist/js/datepicker.js';

const elem = document.querySelector('input[name="foo"]');
const datepicker = new Datepicker(elem, {
  // ...options
});
